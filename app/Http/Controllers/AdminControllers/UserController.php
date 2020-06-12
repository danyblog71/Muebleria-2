<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Models\Role;
use DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')
        ->join('roles', 'users.roles_id', '=', 'roles.id')
        ->select('users.id','users.name', 'users.last_name', 'users.username', 'users.email', 'roles.name as rol',)
        ->get();
        return View('admin.users.show_users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.users.create_user', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'LastName' => ['required', 'string', 'max:255'],
            'UserName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'numeric'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'rol' => ['required', 'numeric'],
        ]);
        
        User::create([
            'name' => $request->get('name'),
            'last_name' => $request->get('LastName'),
            'username' => $request->get('UserName'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'password' => Hash::make($request->get('password')),
            'roles_id' => $request->get('rol') ,
        ]);

        return redirect()->route('admin.user_index')->with('info','Usuario creado exitosamente');
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
        $user = User::find($id);
        $roles = Role::all();
        return view('admin.users.edit_user', compact('user','roles'));
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
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->last_name = $request->get('LastName');
        $user->username = $request->get('UserName');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');
        $user->roles_id = $request->get('rol');
        $user->save();
        
        return redirect()->route('admin.user_index')->with('info','Usuario modificado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();
        return redirect()->route('admin.user_index')->with('info','Usuario Eliminado exitosamente');

    }
}
