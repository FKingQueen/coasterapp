<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $article = Article::all()->reverse();

        foreach($article as $key => $arti)
        {
            $article[$key]->date = Carbon::createFromFormat('Y-m-d H:i:s', $arti->created_at)->format('F d, Y');
        }

        return view('dashboard', array('articles' => $article));
    }
}
