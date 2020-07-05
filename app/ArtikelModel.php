<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class ArtikelModel extends Model
{
    public static function get_all()
    {
        $artikel = DB::table('artikel')->get();
        return $artikel;
    }

    public static function create_article($data)
    {
        DB::table('artikel')->insert($data);
    }

    public static function get_once($id)
    {
        $artikel = DB::table('artikel')->where('id_artikel', '=', $id)->get();
        return $artikel;
    }

    public static function delete_article($id)
    {
        DB::table('artikel')->where('id_artikel', '=', $id)->delete();
    }

    public static function edit_article($id, $data)
    {
        DB::table('artikel')->where('id_artikel', '=', $id)->update($data);
    }

    public static function get_by_slug($slug)
    {
        $artikel = DB::table('artikel')->where('slug', '=', $slug)->get();
        return $artikel;
    }
}
