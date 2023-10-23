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

    public function konten($id)
    {
        $data = Front::find($id);
        return view('front.artikelpage.artikel', compact('data'));
    }

    public function artikel()
    {
        return view('front.artikelpage.artikel');
    }

    public function category()
    {
        return view('front.homepage.category');
    }
}
