<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Carbon\Carbon;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        $article = Article::all()->reverse();
        
        foreach($article as $key => $arti)
        {
            $article[$key]->date = Carbon::createFromFormat('Y-m-d H:i:s', $arti->created_at)->format('F d, Y');
        }

        return view('article.home', array('articles' => $article));
    }

    public function articlePage($id)
    {
        $article = Article::all()->reverse();
        $selArticle = Article::find($id);

        $selArticle->date = Carbon::createFromFormat('Y-m-d H:i:s', $selArticle->created_at)->format('F d, Y');
        
        foreach($article as $key => $arti)
        {
            $article[$key]->date = Carbon::createFromFormat('Y-m-d H:i:s', $arti->created_at)->format('F d, Y');
        }
        foreach($article as $key => $art ) 
        {
            if($art->id != $id){
               $fArticle[$key] = $article[$key];  
            }
        }
        // dd($fArticle);
        return view('article.articlePage', array("fArticles" => $fArticle, "selArticles" => $selArticle));
    }

    public function articleMore()
    {
        $article = Article::all()->reverse();
        foreach($article as $key => $arti)
        {
            $article[$key]->date = Carbon::createFromFormat('Y-m-d H:i:s', $arti->created_at)->format('F d, Y');
        }
        return view('article.articleMore', array('articles' => $article));
    }

    public function searchArticle(Request $request)
    {
        $search = $request->searchInput;
        $article = Article::where('title','LIKE',"%{$search}%")
        ->orWhere('article','LIKE',"%{$search}%")
        ->get();

        dd($article);
    }
}
