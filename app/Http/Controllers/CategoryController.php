<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories.category');
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function edit($id)
    {

    }

    public function update(Request $request)
    {

    }

    public function destroy($id)
    {

    }
}

