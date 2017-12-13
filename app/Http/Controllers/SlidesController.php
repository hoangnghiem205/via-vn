<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Config;

use DB;

class SlidesController extends Controller
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
        $slides = DB::table('config')->where('type', '=', 1)->get();
        $page_title = "Slide Show Manager";
        return view('admin/slides/index',compact('slides', 'page_title'));
    }

    public function showAddForm() {
        $page_title = "New Slide";
        return view('admin/slides/form',compact('page_title'));
    }

    public function showEditForm($id) {
        $page_title = "Edit Slide";
        $slide = Config::find($id);
        return view('admin/slides/form',compact('page_title', 'slide'));
    }

    public function update(Request $request, $id) {
        $slide = Config::find($id);
        $slide->name = $request->name;
        $slide->value = $request->value;
        $slide->type = 1;
        $slide->save();
        return redirect()->intended(route('admin.slides'));
    }

    public function delete(Request $request, $id) {
        $slide = Config::find($id);
        $slide->delete();
        return redirect()->intended(route('admin.slides'));
    }

    public function add(Request $request) {
        $slide = new Config;
        $slide->name = $request->name;
        $slide->value = $request->value;
        $slide->type = 1;
        $slide->save();
        return redirect()->intended(route('admin.slides'));
    }
}
