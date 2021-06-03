<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasakanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $masakan = DB::table('daftar_produk')->orderBy('harga','asc')->get();
        return view('masakan',['masakan' => $masakan]);
    }

    public function tambah()
    {
        $masakan = DB::table('daftar_produk')->get();
        return view('masakan/tambah_masakan',['masakan' => $masakan]);
    }

    public function simpan(Request $request)
    {
        DB::table('daftar_produk')->insert([
            'nama_produk' => $request->nama,
            'jenis' => $request->jenis,
            'harga' => $request->harga
        ]);

        return redirect('masakan');
    }

    public function edit($id)
    {
        $masakan = DB::table('daftar_produk')->where('id_menu', $id)->get();
        return view('masakan/edit_masakan', ['masakan' => $masakan]);
    }

    public function update(Request $request)
    {
        DB::table('daftar_produk')->where('id_menu',$request->id)->update([
            'nama_produk' => $request->nama,
            'jenis' => $request->jenis,
            'harga' => $request->harga
        ]);

        return redirect('masakan');
    }

    public function hapus($id)
    {
        DB::table('daftar_produk')->where('id_menu',$id)->delete();

        return redirect('masakan');
    }
}
