<?php

namespace App\Http\Controllers;

use App\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){

        $websites = Website::all();

        return view('websites.index', compact('websites'));
    }
}
