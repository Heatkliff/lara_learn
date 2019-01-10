<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;


class AdminController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $users = App\User::all();
        $count_page = App\Pages::count();
        return view('home',['count_page' => $count_page, 'users' => $users]);
    }

    public function getPages(){
        $users = App\User::all();
        $data = App\Pages::allpages();
        $count_page = App\Pages::count();
        return view('admin.pages',['count_page' => $count_page, 'pages' => $data, 'users' => $users]);
    }
    public function getUsers(){
        $users = App\User::all();
        $count_page = App\Pages::count();
        return view('admin.users',['count_page' => $count_page, 'users' => $users]);
    }
    public function editPages($id){
        $users = App\User::all();
        $count_page = App\Pages::count();
        $pages = App\Pages::getPageFromID($id);
//        dd($pages);
        return view('admin.edit-page',['count_page' => $count_page, 'users' => $users, 'page' => $pages]);
    }
}
