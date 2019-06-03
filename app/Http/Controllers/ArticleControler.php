<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;

class ArticleControler extends Controller
{
    public function index()
    {
        return Article::all();
    }

    public function showArt()
    {
        $articles = DB::table('articles')->get();
        return $articles;
    }

    public function store(Request $request)
    {
        $article = Article::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, Article $article)
    {
        $article->update($request->all());

        return response()->json($article, 200);
    }

    public function delete(Article $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }
    public function show()
    {
        $articles = DB::table('articles')->paginate(6);
        return view('articles', ['articles'=>$articles]);
    }
    public function showID($id){
        $article = DB::table('articles')->find($id);
        return view('article', ['articles'=>$article]);
    }
    public function searchA(){
        $q = Input::get ( 'q' );
        $user = DB::table('articles')->where('name','LIKE','%'.$q.'%')->get();

            return view('searchResult')->withDetails($user)->withQuery( $q );
    }
}
