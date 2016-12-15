<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends Controller
{
    // Admin Section
    public function articles()
    {
        return view('admin.articles.article');
    }

    public function create()
    {
        return view('admin.articles.create');
    }
}
