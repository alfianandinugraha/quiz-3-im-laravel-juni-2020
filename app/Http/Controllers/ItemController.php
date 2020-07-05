<?php

namespace App\Http\Controllers;

use App\ArtikelModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $result = ArtikelModel::get_all();
        return view('index', ['result' => $result]);
    }

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

    public function show($id)
    {
        $result = ArtikelModel::get_once($id);
        return view('artikelItem', ['artikel' => $result[0]]);
    }

    public function destroy($id)
    {
        ArtikelModel::delete_article($id);
        return redirect('/artikel');
    }

    public function edit($id)
    {
        $result = ArtikelModel::get_once($id);
        return view('edit', ['artikel' => $result[0]]);
    }

    public function update($id)
    {
        $judul = request()->input('input-judul');
        $isi = request()->input('input-isi');
        $tags = request()->input('input-tags');
        $slug = strtolower($judul);
        $slug = trim($slug, " ");
        $slug = str_replace(" ", "-", $slug);

        ArtikelModel::edit_article($id, ['judul' => $judul, 'isi' => $isi, 'tag' => $tags, 'slug' => $slug]);
        return redirect('/artikel/' . $id);
    }
}
