<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Config;

use DB;

class OtherController extends Controller
{
    /**
     * 
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
        // $posts = Post::all();
        $others = DB::table('config')->where('type', '=', 2)->get();
        $page_title = "Other Manager";
        return view('admin/other/index',compact('others', 'page_title'));
    }

    public function showAddForm() {
        $page_title = "New Other";
        return view('admin/other/form',compact('page_title'));
    }

    public function showEditForm($id) {
        $page_title = "Edit Other";
        $other = Config::find($id);
        return view('admin/other/form',compact('page_title', 'other'));
    }

    public function update(Request $request, $id) {
        $other = Config::find($id);
        $other->name = $request->name;
        $other->value = $request->value;
        $other->type = 2;
        $other->save();
        return redirect()->intended(route('admin.other'));
    }

    public function delete(Request $request, $id) {
        $other = Config::find($id);
        $other->delete();
        return redirect()->intended(route('admin.other'));
    }

    public function add(Request $request) {
        $other = new Config;
        $other->name = $request->name;
        $other->value = $request->value;
        $other->type = 2;
        $other->save();
        return redirect()->intended(route('admin.other'));
    }
}
