<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;

use DB;

class InfoController extends Controller
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
        $info = DB::table('info')->where('type', '=', 1)->get();
        $page_title = "Company Infomation";
        return view('admin/info/index',compact('info', 'page_title'));
    }

    public function showAddForm() {
        $page_title = "New Information";
        return view('admin/info/form',compact('page_title'));
    }

    public function showEditForm($id) {
        $page_title = "Edit Information";
        $info = Info::find($id);
        return view('admin/info/form',compact('page_title', 'info'));
    }

    public function update(Request $request, $id) {
        $info = Info::find($id);
        $info->name_en = $request->name_en;
        $info->value_en = $request->value_en;
        $info->name_jp = $request->name_jp;
        $info->value_jp = $request->value_jp;
        $info->save();
        return redirect()->intended(route('admin.info'));
    }

    public function delete(Request $request, $id) {
        $info = Info::find($id);
        $info->delete();
        return redirect()->intended(route('admin.info'));
    }

    public function add(Request $request) {
        $info = new Info;
        $info->name_en = $request->name_en;
        $info->value_en = $request->value_en;

        $info->name_jp = $request->name_jp;
        $info->value_jp = $request->value_jp;

        $info->type = 1;
        $info->save();
        return redirect()->intended(route('admin.info'));
    }
}
