<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;

class ArticleControler extends Controller
{

    //////--------API-------
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

    public function searchApi(Request $request)
    {
        if ($request->has('queryApp')) {
            $result = Article::where('Name', 'LIKE', '%' . $request->queryApp . '%')->get();

            return response()->json($result);

        }else{
            return 'Упппс щось пішло не так';
        }
    }
    public function showArt()
    {
        $articles = DB::table('articles')->get();
        return $articles;
    }

    public function showIDAPI($id)
    {
        $article = DB::table('articles')->find($id);
        return response()->json($article);
    }
    //////-------WEB------




    public function index()
    {
        return Article::all();
    }

    public function show()
    {
        $articles = DB::table('articles')->paginate(6);
        return view('articles', ['articles' => $articles]);
    }

    public function showID($id)
    {
        $article = DB::table('articles')->find($id);
        return view('article', ['articles' => $article]);
    }

    public function searchA()
    {
        $q = Input::get('q');
        $result = DB::table('articles')->where('name', 'LIKE', '%' . $q . '%')->get();
        return view('searchResult')->withDetails($result)->withQuery($q);
    }

}
