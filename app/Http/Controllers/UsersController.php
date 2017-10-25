<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $page_title = "User Manager";
        return view('admin/users/index',compact('users', 'page_title'));
    }

    public function showUserForm() {
        $page_title = "New User";
        return view('admin/users/form',compact('page_title'));
    }

    public function showEditUserForm($id) {
        $page_title = "New User";
        $user = User::find($id);
        return view('admin/users/form',compact('page_title', 'user'));
    }

    public function updateUser(Request $request, $id) {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if (isset($request->password))
            $users->password = bcrypt($request->password);
        $user->save();
        return redirect()->intended(route('admin.users'));
    }

    public function deleteUser(Request $request, $id) {
        $user = User::find($id);
        $user->delete();
        return redirect()->intended(route('admin.users'));
    }

    public function userRegist(Request $request) {
        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->save();
        return redirect()->intended(route('admin.users'));
    }
}
