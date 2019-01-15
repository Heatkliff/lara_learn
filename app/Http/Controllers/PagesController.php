<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;

class PagesController extends Controller
{


    public function allpages()
    {
        $data = Pages::allpages();
        return view('pages', ['pages' => $data]);
    }

    public function page_from_author($id)
    {
        $pages = Pages::author_pages($id);
        dd($pages);
    }

    public function admin_edit_pages()
    {
        $data = Pages::allpages();
        return view('admin.pages', ['pages' => $data]);
    }

    public function ajaxCreatePage(Request $request)
    {
        $page_new = Pages::create($request->all());
        echo true;
    }

    public function ajaxUpdatePage(Request $request)
    {
        $page = $request->all();
        $page_update = Pages::where('id', $request->all()['id'])->update($page);
        echo true;
    }

    public function ajaxDeletePage(Request $request)
    {
        $page = $request->all();
        $page_delete = Pages::where('id', $request->all()['id'])->delete();
        echo true;
    }
}
