<?php

namespace App\Http\Controllers;

use App\Article;
//Add category
use App\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $titles = Article::latest()->get();
      $items = Category::all();

      return view('titles.index', compact('titles', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //Form validation
      $rules = [
      'article_title' => 'required',
      'article_body' => 'required',
      'category_id' => 'required',
    ];
    $customMessages = [
      'article_title.required' => 'A article title is required',
      'article_body.required' => 'You forgot the article itself',
      'category_id.required'  => 'Category is required',
    ];
    $this->validate($request, $rules, $customMessages);
      //var_dump of data from create post form
        //dd(request()->all());
        $post = new Article;
      //Creata a new post using the request data
        $post->article_title = $request->article_title;
        $post->article = $request->article_body;
        $post->category_id = $request->category_id;
        $post->user_id = 1;

        //Save it to DB
        $post->save();

        //And redirect
        return redirect('/titles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      $show_article= Article::find($id);
      $comments = \App\Comment::where('article_id',$id)->get();
      return view('titles.show', compact('show_article','comments'));
    }

    //Store 2
    public function store2(Request $request)
    {
      $items = Category::all();
      if ($request->has('filterAuthor'))
      {
      $titles = Article::where('user_id',request('filterbyAuthor'))->latest()->get();
      return view('titles.index', compact('titles', 'items'));
      }else
        {
          $titles = Article::where('category_id',request('filterbyCategory'))->latest()->get();
          return view('titles.index', compact('titles', 'items'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
