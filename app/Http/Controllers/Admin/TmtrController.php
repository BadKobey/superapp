<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class TmtrController extends Controller
{
    public function index()
     {
        return view('admin.api.tmtr.index');
    }

    public function create()
    {
        return view('admin.api.tmtr.create');
    }



}

