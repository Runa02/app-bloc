<?php

namespace App\Http\Controllers;

use App\Models\Front;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function login()
    {
        return view('session.login-session');
    }

    public function adminEditor(Request $request)
    {
        $datas = Front::all();
        return view('laravel-examples/user-management', compact('datas'));
    }

    public function detail($id)
    {
        $data = Front::find($id);
        if (!$data) {
            // Handle the case where the article is not found, e.g., show an error message or redirect.
            return redirect()->route('user-management')->with('error', 'Article not found.');
        } else {
            return view('laravel-examples/article-detail', compact('data'));
        }
    }

    public function create()
    {
        $datas = Kategori::all();
        return view('laravel-examples/article-management', compact('datas'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'sumber' => 'required',
            'kategori_id' => 'required', // Update the validation rule to 'kategori_id'
            'image' => 'required',
            'konten' => 'required',
        ]);

        $image = $request->file('image')->store('photo', 'public');

        Front::create([
            'kategori_id' => $request->kategori_id, // Use 'kategori_id' to store the selected category
            'judul' => $request->judul,
            'sumber' => $request->sumber,
            'konten' => $request->konten,
            'image' => $image
        ]);

        return redirect()->route('user-management')->with('message', 'Data berhasil ditambahkan');
    }


    public function Delete($id)
    {
        $article = Front::find($id);

        if (!empty($article->image) && Storage::disk('public')->exists($article->image)) {
            Storage::disk('public')->delete($article->image);
        }

        // Delete the article
        $article->delete();

        return redirect()->route('user-management')->with('message', 'Data berhasil dihapus');
    }
}
