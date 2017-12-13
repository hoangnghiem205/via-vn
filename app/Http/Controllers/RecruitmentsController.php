<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

use DB;

class RecruitmentsController extends Controller
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
        // $posts = Post::all();
        $recruits = DB::table('posts')->where('type', '=', 4)->get();
        $page_title = "Recruitment Manager";
        return view('admin/recruit/index',compact('recruits', 'page_title'));
    }

    public function showAddForm() {
        $page_title = "New Recruit";
        return view('admin/recruit/form',compact('page_title'));
    }

    public function showEditForm($id) {
        $page_title = "Edit Recruit";
        $recruit = Post::find($id);
        return view('admin/recruit/form',compact('page_title', 'recruit'));
    }

    public function update(Request $request, $id) {
        $recruit = Post::find($id);
        $recruit->title_en = $request->title_en;
        $recruit->summary_en = $request->summary_en;
        $recruit->content_en = $request->content_en;

        $recruit->title_jp = $request->title_jp;
        $recruit->summary_jp = $request->summary_jp;
        $recruit->content_jp = $request->content_jp;

        $recruit->img = $request->img;
        $recruit->save();
        return redirect()->intended(route('admin.recruit'));
    }

    public function delete(Request $request, $id) {
        $recruit = Post::find($id);
        $recruit->delete();
        return redirect()->intended(route('admin.recruit'));
    }

    public function add(Request $request) {
        $recruit = new Post;
        $recruit->title_en = $request->title_en;
        $recruit->summary_en = $request->summary_en;
        $recruit->content_en = $request->content_en;

        $recruit->title_jp = $request->title_jp;
        $recruit->summary_jp = $request->summary_jp;
        $recruit->content_jp = $request->content_jp;

        $recruit->img = $request->img;
        $recruit->author = $request->author;
        $recruit->type = 4;
        $recruit->save();
        return redirect()->intended(route('admin.recruit'));
    }
}
