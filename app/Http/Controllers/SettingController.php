<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;

use DB;

class SettingController extends Controller
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
        $setting = DB::table('config')->where('type', '=', 1)->get();
        $page_title = "Setting Show Manager";
        return view('admin/setting/index',compact('setting', 'page_title'));
    }

    public function showAddForm() {
        $page_title = "New Setting";
        return view('admin/setting/form',compact('page_title'));
    }

    public function showEditForm($id) {
        $page_title = "Edit Setting";
        $config = Slide::find($id);
        return view('admin/setting/form',compact('page_title', 'config'));
    }

    public function update(Request $request, $id) {
        $config = Slide::find($id);
        $config->name = $request->name;
        $config->value = $request->value;
        $config->type = 1;
        $config->save();
        return redirect()->intended(route('admin.setting'));
    }

    public function delete(Request $request, $id) {
        $config = Slide::find($id);
        $config->delete();
        return redirect()->intended(route('admin.setting'));
    }

    public function add(Request $request) {
        $config = new Slide;
        $config->name = $request->name;
        $config->value = $request->value;
        $config->type = 1;
        $config->save();
        return redirect()->intended(route('admin.setting'));
    }
}
