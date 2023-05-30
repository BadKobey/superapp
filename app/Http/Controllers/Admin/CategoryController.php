<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Requests\CategoryFormRequest;

class CategoryController extends Controller
{
    public function index()
     {
        return view('admin.category.index');
    }

    public function create()
    {
        return view('admin.category.create');
    }



}

