<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;

class PagesController extends Controller
{


    public function allpages()
    {
        $data = Pages::allpages();
//        dd($pages);
        return view('pages',['pages' => $data]);
    }

    public function page_from_author($id)
    {
        $pages = Pages::author_pages($id);
        dd($pages);
    }

    public function admin_edit_pages()
    {
        $data = Pages::allpages();
//        dd($pages);
        return view('admin.pages',['pages' => $data]);
    }


}
