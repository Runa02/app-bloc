<?php

namespace App\Http\Controllers;

use App\Models\Front;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(Request $request)
    {
        $pagination = 5;
        $datas = Front::where(function ($q) use ($request) {
            $q->where('judul', 'LIKE', '%' . $request->search . '%');
        })->orderBy('id', 'asc')->paginate($pagination);
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

    public function category_gadget(Request $request)
    {
        $pagination = 5;

        $datas = Front::where(function ($q) use ($request) {
            $q->where('judul', 'LIKE', '%' . $request->search . '%');
        })
            ->whereHas('kategori', function ($q) {
                $q->where('kategori', 'Gadgets');
            })
            ->orderBy('id', 'asc')
            ->paginate($pagination);

        return view('front.homepage.category_gadget', compact('datas'));
    }


    public function category_games(Request $request)
    {
        $pagination = 5;

        $datas = Front::where(function ($q) use ($request) {
            $q->where('judul', 'LIKE', '%' . $request->search . '%');
        })
            ->whereHas('kategori', function ($q) {
                $q->where('kategori', 'Games');
            })
            ->orderBy('id', 'asc')
            ->paginate($pagination);

        return view('front.homepage.category_games', compact('datas'));
    }

    public function category_tips(Request $request)
    {
        $pagination = 5;

        $datas = Front::where(function ($q) use ($request) {
            $q->where('judul', 'LIKE', '%' . $request->search . '%');
        })
            ->whereHas('kategori', function ($q) {
                $q->where('kategori', 'Tips');
            })
            ->orderBy('id', 'asc')
            ->paginate($pagination);

        return view('front.homepage.category_tips', compact('datas'));
    }

    public function category_software(Request $request)
    {
        $pagination = 5;

        $datas = Front::where(function ($q) use ($request) {
            $q->where('judul', 'LIKE', '%' . $request->search . '%');
        })
            ->whereHas('kategori', function ($q) {
                $q->where('kategori', 'Software');
            })
            ->orderBy('id', 'asc')
            ->paginate($pagination);

        return view('front.homepage.category_gadget', compact('datas'));
    }
}
