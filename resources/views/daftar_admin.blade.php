@extends('layouts.app')

@section('content')
<style type="text/css">
    .navbar {
        max-height: 60px;
        justify-content: center;
    }

    .backcolor {
        background-color: #111;
    }

    .nav-link {
        padding-left: 10px;
    }

    .navbar .container {
        padding-top: 0;
        margin-left: 17%;
        margin-right: 0;
        width: 100%;
        background-color: #111;
    }

    .comtainer {
        padding: 80px 0px 20px 0px;
        margin-left: 17%;
    }

    table {
        margin: 0 auto;

    }

    th, td {
        border: 1px solid #cfcfcf;
        padding: 10px 20px;
    }

    th {
        background-color: #1f1f1f;
        color: #fff;
        font-size: 15px;
    }

    tr.isi td {
        background-color: white;
    }

    td.button {
        border: 0px;
        padding: 0;
        padding-bottom: 20px;
    }

    a.primary {
        background-color: #2fb528;
        color: white;
        padding: 10px;
        text-decoration: none;
        border-radius: 3px;
        padding-bottom: 10px;
    }

    a.primary:hover {
        color: white;
        background-color: #008009;
    }

    .btn {
        border-radius: 2px;
        text-decoration: none;
    }

    a.success, a.danger {
        padding: 2px 7px;
        font-size: 12px;
        color: white;
        display: inline-block;
        background-color: #2fb528;
        box-shadow: 1px 1px 1px black;
    }

    a.danger:hover {
        background-color: #ba0000;
    }

    a.success:hover {
        background-color: #008512;
    }

    a.success:active, a.danger:active {
        color: white;
        position: relative;
        left: 1px;
        top: 1px;
        box-shadow: none;
    }

    a.danger {
        background-color: red;
    }

    .sidenav {
        height: 100%; 
        width: 0; 
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        padding-top: 60px; 
        width: 17%;

    }

    .side-link {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 20px;
        color: #818181;
        display: block;
        margin-bottom: 10px;
    }

    .side-link:hover {
        color: white;
        transition: 0.5s;
    }

    .active {
        background-color: white;
        color: black;
    }

    .active:hover {
        color: black; 
    }

</style>
<div id="sideNavigation" class="sidenav">
      <a href="/pesanan" class="side-link">Pesanan</a>
      <a href="/masakan" class="side-link">Menu</a>
      <a href="#" class="side-link active">Daftar Admin</a>
    </div>
    <div class="comtainer">
            <table cellspacing="0">
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>E-MAIL</th>
                    <th>PASSWORD</th>
                    <th>DIBUAT PADA</th>
                    <th>DIUPDATE PADA</th>
                    <th>AKSI</th>
                </tr>
                
                <?php $i=1 ?>
                @foreach($daftar as $d)
                <tr class="isi">
                    <td>{{ $i }}</td>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->email }}</td>
                    <td><input type="password" name="" value="{{ $d->password }}" disabled></td>
                    <td>{{ $d->created_at }}</td>
                    <td>{{ $d->updated_at }}</td>
                    <td>
                        <a href="/daftar_admin/hapus/{{ $d->id }}" class="btn danger">Hapus</a>
                    </td>
                </tr>
                <?php $i++; ?>
                @endforeach
    </div>
@endsection