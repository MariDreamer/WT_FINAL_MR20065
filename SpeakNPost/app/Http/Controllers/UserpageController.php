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
        $userpage->photo=URL::asset('user.png');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
        $userpage = DB::table('userpages')->where('username', auth()->user()->id)->first();
        return view('userpage-edit', compact('userpage'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $id = DB::table('userpages')->where('username', auth()->user()->id)->first()->id;

        $userpage=Userpage::find($id);


        //$input=$request->all();
        if ($request->file('photo')!=NULL)
        {
            $dest='/public/pic';
            $photo=$request->file('photo');
            $img_name=$photo->getClientOriginalName();
            $path=$request->file('photo')->storeAs($dest,$img_name);
            //$input['photo']=$img_name;

            $userpage->photo=$img_name;
            $userpage->save();
            //$userpage->updateOrInsert(['photo'=>$img_name]);

        }

        if ($request->description!="")
        {
            $userpage->description=$request->description;
            $userpage->save();

            //$userpage->updateOrInsert(['description'=>$request->description]);
        }

        //return UserpageController:: show(auth()->user()->id);
        return redirect('userpage');
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
