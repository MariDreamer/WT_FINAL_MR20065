<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voicepost;
use App\Models\Topic;
use App\Models\User;
use App\Models\Userpage;
use App\Models\Subtopic;
use Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\URL;

class UserpageController extends Controller
{

    public function __construct() {
        // only Admins have access to the following methods
        //$this->middleware('auth.admin')->only(['create', 'store']);
        // only authenticated users have access to the methods of the controller
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (DB::table('userpages')->where('username', auth()->user()->id)->first()==null)
        {
            return UserpageController:: store(auth()->user()->id);
        }
        else
        {
            return UserpageController:: show(auth()->user()->id);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        $userpage= new Userpage;
        $userpage->username=auth()->user()->id;
        $userpage->description="Hey there! I'm on Speak'N'Post now:)"; 
        $userpage->photo=URL::asset('/public/pic/user.png');
        $userpage->save();

        return UserpageController:: show(auth()->user()->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userpage = DB::table('userpages')->where('username', $id)->first();
        $voiceposts=Voicepost::orderBy('date')->where('usernamne', $id)->get();

        return view('userpage', compact('userpage', 'voiceposts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
