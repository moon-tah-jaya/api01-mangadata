<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ArticleController extends Controller{

    /*public function __construct()
    {
        $this->middleware('auth', ['only' => [
            'index',
            'create',
            'update',
            'delete'
        ]]);
    }*/

    public function index(){

        $articles  = Articles::all();

        return response()->json($articles);

    }

    public function getArticle($id){

        $article  = Articles::find($id);

        return response()->json($article);
    }

    public function saveArticle(Request $request){

        $article = Articles::create($request->all());

        return response()->json($article);

    }

    public function deleteArticle($id){
        $article  = Articles::find($id);

        $article->delete();

        return response()->json('success');
    }

    public function updateArticle(Request $request,$id){
        $article  = Articles::find($id);

        $article->title = $request->input('title');
        $article->content = $request->input('content');

        $article->save();

        return response()->json($article);
    }

}