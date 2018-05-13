<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserArticleController extends Controller
{
    public function show(User $user){

       $articles =  $user->articles;

       return view('articles.show', compact('articles'));
    }
}
