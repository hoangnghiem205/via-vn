<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

use DB;
class ServicesController extends Controller
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
        $services = DB::table('posts')->where('type', '=', 2)
                                        ->orderByRaw('id DESC')
                                        ->get();
        $page_title = "Service Manager";
        return view('admin/services/index',compact('services', 'page_title'));
    }

    public function showAddForm() {
        $page_title = "New Service";
        return view('admin/services/form',compact('page_title'));
    }

    public function showEditForm($id) {
        $page_title = "Edit Service";
        $service = Post::find($id);
        return view('admin/services/form',compact('page_title', 'service'));
    }

    public function update(Request $request, $id) {
        $service = Post::find($id);
        $service->title_en = $request->title_en;
        $service->summary_en = $request->summary_en;
        $service->content_en = $request->content_en;

        $service->title_jp = $request->title_jp;
        $service->summary_jp = $request->summary_jp;
        $service->content_jp = $request->content_jp;
        $service->img = $request->img;
        $service->save();
        return redirect()->intended(route('admin.services'));
    }

    public function delete(Request $request, $id) {
        $service = Post::find($id);
        $service->delete();
        return redirect()->intended(route('admin.services'));
    }

    public function add(Request $request) {
        $service = new Post;
        $service->title_en = $request->title_en;
        $service->summary_en = $request->summary_en;
        $service->content_en = $request->content_en;
        $service->title_jp = $request->title_jp;
        $service->summary_jp = $request->summary_jp;
        $service->content_jp = $request->content_jp;
        $service->img = $request->img;
        $service->author = $request->author;
        $service->type = 2;
        $service->save();
        return redirect()->intended(route('admin.services'));
    }
}
