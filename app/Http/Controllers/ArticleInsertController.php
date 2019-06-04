<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleInsertController extends Controller
{

    public function insert(Request $request){
        Article::insert([
            'Name' => $request['name'],
            'Description' => $request['desc'],
            'Image' => ('public\img\uploads-img-articles\nophoto.jpg'),
            'Price' => $request['cina'],
            'Accessibility' => (true),
            'Author' => $request['autor'],
            'number' => $request['num'],
            'email' => $request['email'],

        ]);
        return response()->json('succes');
    }
    //
}
