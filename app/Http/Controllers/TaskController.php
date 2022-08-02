<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use Illuminate\Support\Facades\DB;
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

        $tasks = Task::latest()->paginate(6);

       return view('task.index', compact('tasks' ));

    }

    public function create()
    {
        //
        return view('task.create');

    }

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


    public function show(Task $task)
    {
        //
        return view('task.show', compact('task'));

    }


    public function edit(Task $task)
    {
        //
        return view('task.edit', compact('task'))  ;

    }


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


        return redirect()->route('tasks.index')
        ->with('success','task deleted successflly') ;
    }
    public function reOpenTask( $id ) {
        $task = Task::find($id);

        $status = DB::table('tasks')->select('status');
        $task=Task::whereId($id)->update(['status' => 'open']);

        return redirect()->route('tasks.index')
            ->with('success','Tasks opened');
    }
    public function closeTask( $id ) {
        $task = Task::find($id);

        $status = DB::table('tasks')->select('status');
        $task=Task::whereId($id)->update(['status' => 'close']);

        return redirect()->route('tasks.index')
            ->with('success','Tasks closed');
    }
    public function reSloveTask( $id ) {
        $task = Task::find($id);

        $status = DB::table('tasks')->select('status');
        $task=Task::whereId($id)->update(['status' => 'reslove']);

        return redirect()->route('tasks.index')
            ->with('success','Tasks sloved');
    }

    public function assignto( $id) {
        $users = User::where('user_type' , '=', 'developer')->get();

        return view('task.assignto', compact('users'));

    }
    public function assigned(Task $task ) {
        $users = User::where('user_type' , '=', 'developer')->get();



        return view('task.assigned', compact('users', 'task'));

    }

}
