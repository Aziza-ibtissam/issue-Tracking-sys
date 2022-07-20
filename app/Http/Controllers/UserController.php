<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /*public function __construct() {
        $this-middleware('auth');
        $this-middleware('is_admin');


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::latest()->paginate(4);
       return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'user_type' => ['required', 'string']
        ]);




        $user = User::create([
            'name'=> $request->name ,
            'email' => $request->email ,
            'password' => Hash::make($request->password ),
           'user_type' =>$request->user_type
        ]);


         return redirect()->route('users.index')
         ->with('success','user added successflly') ;
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
    public function edit(User $user)
    {
        //
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $this->validate($request,[
            'name' => 'required', //['required', 'string', 'max:255'],
            'email' => 'required',//['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => 'required',//['required', 'string', 'min:8', 'confirmed'],
            'user_type' => 'required',//['required', 'string']
        ]);

        $user->update($request->all());
         return redirect()->route('users.index')
         ->with('success','user update successflly') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user->delete();
        return redirect()->route('users.index')
        ->with('success','users deleted successflly') ;
    }

    public function softDeletes(){
        $user = User::find($id)->delete();

        return redirect()->route('users.index')
        ->with('success','users deleted successflly') ;
    }
}
