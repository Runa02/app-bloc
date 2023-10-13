<?php

namespace App\Http\Controllers;

use App\Models\Front;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $datas = Front::all();
        return view('front.homepage.homepage', compact('datas'));
    }
}
