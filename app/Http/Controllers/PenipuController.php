<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenipuController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        $results = DB::select("
            SELECT * FROM penipus 
            WHERE id LIKE ? OR server LIKE ?
        ", ["%$query%", "%$query%"]);

        return view('searchresults', ['results' => $results]);
    }

    public function create(Request $request)
    {
        $server = $request->input('server');
        $keterangan = $request->input('keterangan');
        $tanggal = $request->input('tanggal');
        $pelaku = $request->input('pelaku');
        $korban = $request->input('korban');
        $image_urls = json_encode($request->input('image_urls', []));

        DB::insert("
            INSERT INTO penipus (server, keterangan, tanggal, pelaku, korban, image_urls)
            VALUES (?, ?, ?, ?, ?, ?)
        ", [$server, $keterangan, $tanggal, $pelaku, $korban, $image_urls]);

        return redirect()->route('penipu.index')->with('success', 'Data penipu berhasil ditambahkan.');
    }
}