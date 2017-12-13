<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
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
        $page_title = "VIA-VN.COM Dashboard";
        $page_description = "Welcome, Administrator";
        return view('admin/layouts/admin_template', compact( 'page_title', 'page_description'));

    }
}
