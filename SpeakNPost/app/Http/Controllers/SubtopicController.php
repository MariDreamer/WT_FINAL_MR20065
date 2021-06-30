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
use Illuminate\Support\Facades\Auth;

class SubtopicController extends Controller
{

    public function __construct() {
        // only Admins have access to the following methods
        //$this->middleware('auth.admin');
        // only authenticated users have access to the methods of the controller
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request  $request)
    {
        //
        if (!Auth::user()->isAdmin())
        {
            return redirect('homepage');
        }
        else
        {
            $t_id=$request->t_id;
            return view('addstopic',  compact('t_id'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rules = array(
            'st_name'=>'required|string|min:1|max:191',
        );
        $messages = array(
            'required' => 'The :attribute field is required.',
            'string' => 'The :attribute must be string.',
            'min' => 'The :attribute must be greater than :min.',
            'max' => 'The :attribute must be less than :max.',
        );

        $this->validate($request, $rules, $messages);

        $stopic=new Subtopic;
        $stopic->st_name=$request->st_name;
        $stopic->t_id=$request->t_id;
        $stopic->save();

        return redirect('admin');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        Subtopic::findOrFail($request->id)->delete();
        return redirect('admin');
    }
}
