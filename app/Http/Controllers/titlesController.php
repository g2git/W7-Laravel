<?php

namespace App\Http\Controllers;

use App\articles;

class titlesController extends Controller
{
    //

    public function index()
    {

      $titles = articles::all();

      return view('titles.index', compact('titles'));
    }

    public function show($id)
    {
      $show_article=articles::find($id);
      return view('titles.show', compact('show_article'));

    }

}
