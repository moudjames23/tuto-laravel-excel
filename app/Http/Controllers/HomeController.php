<?php

namespace App\Http\Controllers;

use App\Models\Prefecture;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $prefectures = Prefecture::get();

        return view('welcome', compact('prefectures'));
    }
}
