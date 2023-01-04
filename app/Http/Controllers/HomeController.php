<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

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
        $article = Article::get();
        return view('article', array('articles' => $article));
    }
    public function createArticle(Request $request)
    {
        $article =  new Article();
        $article->project_id = 1;
        $article->title = $request->title;
        $article->article = $request->editor;
        $res = $article->save();
        return back();
    }
}
