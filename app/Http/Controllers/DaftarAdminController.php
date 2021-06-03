<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaftarAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $daftar = DB::table('users')->orderBy('name','asc')->get();
        return view('daftar_admin',['daftar' => $daftar]);
    }

    public function hapus($id)
    {
        DB::table('users')->where('id',$id)->delete();

        return redirect('daftar_admin');
    }
}
