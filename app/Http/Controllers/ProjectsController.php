<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ProjectsController extends Controller
{
    public function project1()
    {
        $article = Article::all()->reverse();
        return view('projects.project1', array("articles" => $article));
    }
}
