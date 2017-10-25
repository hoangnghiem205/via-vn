<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

use DB;
class FeaturesController extends Controller
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
        $features = DB::table('posts')->where('type', '=', 3)->get();
        $page_title = "Features Manager";
        return view('admin/features/index',compact('features', 'page_title'));
    }

    public function showAddForm() {
        $page_title = "New Feature";
        return view('admin/features/form',compact('page_title'));
    }

    public function showEditForm($id) {
        $page_title = "Edit Features";
        $feature = Post::find($id);
        return view('admin/features/form',compact('page_title', 'feature'));
    }

    public function update(Request $request, $id) {
        $feature = Post::find($id);
        $feature->title = $request->title;
        $feature->summary = $request->summary;
        $feature->content = $request->content;
        $feature->img = $request->img;
        $feature->save();
        return redirect()->intended(route('admin.features'));
    }

    public function delete(Request $request, $id) {
        $feature = Post::find($id);
        $feature->delete();
        return redirect()->intended(route('admin.features'));
    }

    public function add(Request $request) {
        $feature = new Post;
        $feature->title = $request->title;
        $feature->summary = $request->summary;
        $feature->content = $request->content;
        $feature->img = $request->img;
        $feature->author = $request->author;
        $feature->type = 3;
        $feature->save();
        return redirect()->intended(route('admin.features'));
    }
}
