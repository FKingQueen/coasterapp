<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use DB;

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
        // remove html tag
        // $taglessBody = strip_tags($subject->body);
        $article = Article::all()->reverse();
        
        foreach($article as $key => $arti)
        {
            $article[$key]->date = Carbon::createFromFormat('Y-m-d H:i:s', $arti->created_at)->format('F d, Y');
        }

        return view('admin.article', array('articles' => $article));
    }
    
}
