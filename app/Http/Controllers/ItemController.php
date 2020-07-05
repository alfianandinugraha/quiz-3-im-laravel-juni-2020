<?php

namespace App\Http\Controllers;

use App\ArtikelModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store()
    {
        $judul = request()->input('input-judul');
        $isi = request()->input('input-isi');
        $tags = request()->input('input-tags');
        $slug = strtolower($judul);
        $slug = trim($slug, " ");
        $slug = str_replace(" ", "-", $slug);

        ArtikelModel::create_article(['judul' => $judul, 'isi' => $isi, 'tag' => $tags, 'slug' => $slug]);

        return redirect('/artikel/create');
    }
}
