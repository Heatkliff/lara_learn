<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = App\Pages::allpages();
        return view('home',['pages' => $data]);
    }

    public function admin_edit_pages()
    {
        $users = App\User::all();
        $data = App\Pages::allpages();
        return view('admin.pages',['pages' => $data, 'users' => $users]);
    }


}
