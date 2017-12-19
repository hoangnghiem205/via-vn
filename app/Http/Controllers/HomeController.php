<?php

namespace App\Http\Controllers;

use App\Mail\ContactSender;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Post;

class HomeController extends MyController
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $services = DB::table('posts')->where('type', '=', 2)->get();
        $posts = DB::table('posts')
                        ->where('type', '=', 1)
                        ->orderByRaw('id DESC')
                        ->take(4)->get();

        return view('home')->with(['others' => $this->others])
                                ->with(compact('services'))
                                ->with(compact('posts'));
    }

    public function about(){
        $infos = DB::table('info')->where('type', '=', 1)->get();

        return view('about')->with(['others' => $this->others])
            ->with(compact('infos'));
    }
    public function service(){
        $services = DB::table('posts')->where('type', '=', 2)->get();
        return view('service')->with(['others' => $this->others])
            ->with(compact('services'));
    }
    public function feature(){
        $features = DB::table('posts')
                            ->where('type', '=', 3)
                            ->orderByRaw('id DESC')
                            ->paginate(15);
        return view('feature')->with(['others' => $this->others])
            ->with(compact('features'));
    }

    public function news(){
        $posts = DB::table('posts')
                    ->where('type', '=', 1)
                    ->orderByRaw('id DESC')
                    ->paginate(15);
        return view('news')->with(['others' => $this->others])
            ->with(compact('posts'));
    }

    public function detail($id){
        $post = Post::find($id);
        return view('detail')->with(['others' => $this->others])
            ->with(compact('post'));
    }

    public function recruitment(){
        $posts = DB::table('posts')->where('type', '=', 4)->paginate(15);
        return view('recruitment')->with(['others' => $this->others])
            ->with(compact('posts'));
    }

    public function sendMail(Request $request) {
        $data = [
            "name"=>$request->name,
            "subject"=>$request->subject,
            "message"=>$request->message,
            "email"=>$request->email
        ];
        Mail::to('murayama@via-vn.com')
                ->cc('oanh.nt@via-vn.com')
                ->bcc('hoangnm@ows.vn')
                ->send(new ContactSender($data));
        return back();


    }
    public function contact(){
        return view('contact')->with(['others' => $this->others]);
    }
}
