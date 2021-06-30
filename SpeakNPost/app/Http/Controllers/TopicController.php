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

class TopicController extends Controller
{

    public function __construct() {
        // only Admins have access to the following methods
        //$this->middleware('auth.admin')->only(['index']);
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
        if (!Auth::user()->isAdmin())
        {
            return redirect('homepage');
        }
        else
        {
            $topics = Topic::orderBy('t_name')->get();
            $subtopics = Subtopic::orderBy('st_name')->get();
            return view('admin',  compact('topics', 'subtopics'));
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
        return view('addtopic');
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
            't_name'=>'required|string|min:1|max:191',
        );
        $messages = array(
            'required' => 'The :attribute field is required.',
            'string' => 'The :attribute must be string.',
            'min' => 'The :attribute must be greater than :min.',
            'max' => 'The :attribute must be less than :max.',
        );

        $this->validate($request, $rules, $messages);

        $topic=new Topic;
        $topic->t_name=$request->t_name;
        $topic->save();

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
     *  @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //

        $st=Subtopic::orderBy('t_id')->where('t_id', $request->id)->get();
        foreach ($st as $to_del)
        {
            $to_del->delete();
        }
        
        Topic::findOrFail($request->id)->delete();

        return redirect('admin');
    }
}
