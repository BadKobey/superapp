<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ArmteckController extends Controller
{
    public function index()
     {
        return view('admin.api.armteck.index');
    }

    public function create()
    {
        return view('admin.api.armteck.create');
    }



}

