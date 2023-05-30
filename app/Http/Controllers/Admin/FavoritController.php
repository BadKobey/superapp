<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class FavoritController extends Controller
{
    public function index()
     {
        return view('admin.api.favorit.index');
    }

    public function create()
    {
        return view('admin.api.favorit.create');
    }



}

