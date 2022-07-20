<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 use App\Http\Controllers\UserController;


class TaskController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        /*$tasks = Task::find(7);
        //$tasks->user()->get();
       // dd($tasks->user);
        print_r($tasks->user()->get());
        die();*/


        $tasks = Task::latest()->paginate(6);

       return view('task.index', compact('tasks'));

    }
    public function trashedTasks()
    {
    $tasks = Task::onlyTrashed()->latest()->paginate(4);
       return view('task.trash', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('task.create');

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
        $request->validate([
            'title'=>'required',
            'description' =>'required'
        ]);
         $info=$request->all();
         $info["owner_id"]=Auth::id();
         $task = Task::create($info);
         return redirect()->route('tasks.index')
         ->with('success','task added successflly') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
        return view('task.show', compact('task'))  ;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
        return view('task.edit', compact('task'))  ;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
        $request->validate([
            'title'=>'required',
            'description' =>'required'
        ]);

        $task->update($request->all());
         return redirect()->route('tasks.index')
         ->with('success','task added successflly') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
        $task->delete();
        return redirect()->route('tasks.index')
        ->with('success','task deleted successflly') ;
    }

    public function softDelete(  $id)
    {

        $task = Task::find($id);
        if ($id == Auth::id()|| Auth :: user()->user_type =='admin'){
            $task ->delete();
        }

        /*$user= Auth :: user()->user_type;
     //dd($user);
        $task = Task::where('id' , $id )
        ->orWhere('user_type' ,$user )->first();
*/


        return redirect()->route('tasks.index')
        ->with('success','task deleted successflly') ;
    }

    public function openTask(Task $task) {
        $task=Task::where('close', $status)->update('open', $status)
        ->orWhere('reslove', $status)->update('open', $status) ;
    }
    public function closeTask(Task $task) {
        $task=Task::where('close', $status)->update('open', $status)
        ->orWhere('reslove', $status)->update('open', $status) ;
    }
    public function resloveTask(Task $task) {
        $task=Task::where('close', $status)->update('open', $status)
        ->orWhere('reslove', $status)->update('open', $status) ;
    }


    /*
    public function  deleteForEver(  $id)
    {

        $task = Task::onlyTrashed()->where('id' , $id)->forceDelete();

        return redirect()->route('task.trash')
        ->with('success','task deleted successflly') ;
    }


    public function backFromSoftDelete(  $id)
    {


        $task = Task::onlyTrashed()->where('id' , $id)->first()->restore() ;

        return redirect()->route('tasks.index')
        ->with('success','task back successfully') ;
    }
    public function stautsTask(Task $task) {
        $task = Task:: open() ->where('task' , $task);
        return view('task.stauts')->with('success') ;
    }
*/
}
