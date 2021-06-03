<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pesanan = DB::table('pesanan')->get();
        return view('pesanan',['pesanan' => $pesanan]);
    }

    public function tambah()
    {
        $masakan = DB::table('daftar_produk')->get();
        return view('pesanan/tambah_pesanan',['masakan' => $masakan]);
    }

    public function simpan(Request $request)
    {
        DB::table('pesanan')->insert([
            'nama_pelanggan' => $request->nama,
            'waktu_pemesanan' => $request->time,
            'nama_produk' => $request->nama_produk,
            'no_meja' => $request->no_meja,
            'porsi' => $request->porsi,
            'keterangan' => $request->ket
        ]);

        return redirect('pesanan');
    }

    public function edit($id)
    {
        $masakan = DB::table('daftar_produk')->get();
        $pesanan = DB::table('pesanan')->where('id', $id)->get();
        return view('pesanan/edit_pesanan', ['pesanan' => $pesanan], ['masakan' => $masakan]);
    }

    public function update(Request $request)
    {
        DB::table('pesanan')->where('id',$request->id)->update([
            'nama_pelanggan' => $request->nama,
            'nama_produk' => $request->nama_produk,
            'no_meja' => $request->no_meja,
            'porsi' => $request->porsi,
            'keterangan' => $request->ket
        ]);

        return redirect('pesanan');
    }

    public function hapus($id)
    {
        DB::table('pesanan')->where('id',$id)->delete();

        return redirect('pesanan');
    }
}
