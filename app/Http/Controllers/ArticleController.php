<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){

        $articles = Article::paginate(5);
        return view('articles.index', compact('articles'));
    }
}
