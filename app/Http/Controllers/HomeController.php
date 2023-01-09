<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;


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
        $article = Article::all()->reverse();
        
        foreach($article as $key => $arti)
        {
            $date[$key] =  Carbon::createFromFormat('Y-m-d H:i:s', $arti->created_at)->format('F d, Y');
        };

        return view('article', array('articles' => $article, 'date' => $date));
    }
    public function createArticle(Request $request)
    {

        $request->validate([
            'image' => 'required',
        ]);

        $article =  new Article();
        $article->project_id = 1;
        $article->title = $request->title;
        $article->article = $request->editor;
        $res = $article->save();

        $art = Article::find($article->id);
        
        if($request->hasfile('image'))
        {
            $dest = 'uploads/article/'.$art->image;
            if(File::exists($dest))
            {
                File::delete($dest);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = $art->id.'.'.$extension;
            $file->move('uploads/article/', $filename);
            $art->image = $filename;
        }
        $res = $art->update();

        return back();
    }
}
