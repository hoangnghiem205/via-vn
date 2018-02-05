<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

use DB;

class PostsController extends Controller
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
        $posts = Post::where('type', 1)->orderBy('sort', 'DESC')->get();
        $page_title = "Posts Manager";
        return view('admin/posts/index',compact('posts', 'page_title'));
    }

    public function reorder($src, $dist) {
        $arr = Post::where('type', 1)->orderBy('sort', 'DESC')->get();
        foreach ($arr as $key => $item) {
            if ($item->id == $src) {
                $prevIndex = $key - 1;
                $nextIndex = $key + 1;
                $currIndex = $key;
            }
        }
        $src_post = $arr[$currIndex];
        if ($dist == 1) 
            $dist_post = $arr[$prevIndex];
        else 
            $dist_post = $arr[$nextIndex];
        $temp = $src_post->sort;
        $src_post->sort = $dist_post->sort;
        $dist_post->sort = $temp;
        $src_post->save();
        $dist_post->save();
        return "OK";
    }

    public function showAddForm() {
        $page_title = "New Post";
        return view('admin/posts/form',compact('page_title'));
    }

    public function showEditForm($id) {
        $page_title = "Edit Post";
        $post = Post::find($id);
        return view('admin/posts/form',compact('page_title', 'post'));
    }

    public function update(Request $request, $id) {
        
        $post = Post::find($id);
        $post->title_en = $request->title_en;
        $post->summary_en = $request->summary_en;
        $post->content_en = $request->content_en;

        $post->title_jp = $request->title_jp;
        $post->summary_jp = $request->summary_jp;
        $post->content_jp = $request->content_jp;

        $post->img = $request->img;
        $post->save();
        return redirect()->intended(route('admin.posts'));
    }

    public function delete(Request $request, $id) {
        $post = Post::find($id);
        $post->delete();
        return redirect()->intended(route('admin.posts'));
    }

    public function add(Request $request) {
        $post = new Post;
        $post->title_en = $request->title_en;
        $post->summary_en = $request->summary_en;
        $post->content_en = $request->content_en;

        $post->title_jp = $request->title_jp;
        $post->summary_jp = $request->summary_jp;
        $post->content_jp = $request->content_jp;

        $post->img = $request->img;
        $post->author = $request->author;
        $post->type = 1;
        $post->sort = 1;
        $post->save();
        $post->sort = $post->id;
        $post->save();
        return redirect()->intended(route('admin.posts'));
    }
}
