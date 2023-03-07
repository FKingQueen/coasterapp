<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Carbon\Carbon;

class ProjectsController extends Controller
{
    public function project1()
    {
        $article = Article::all()->reverse();
        foreach($article as $key => $arti)
        {
            $article[$key]->date = Carbon::createFromFormat('Y-m-d H:i:s', $arti->created_at)->format('F d, Y');
        }
        return view('projects.project1', array("articles" => $article));
    }

    public function project2()
    {
        $article = Article::all()->reverse();
        return view('projects.project2', array("articles" => $article));
    }
}
