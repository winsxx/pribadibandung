@extends('master')

@section('content')
    <nav class="navbar navbar-default top-nav">
        <div class="container">
            <ul class="top-nav">
                <li><a href="/admin">Mengubah Info Jadwal Ujian Masuk</a></li>
                <li><a href="/mengumumkan" class="active">Melakukan Pengumuman</a></li>
            </ul>
            <a href="#" id="pull"><img src="images/menu-icon.png" title="menu" /></a>
        </div>
    </nav>

    <div class="container">
        <div class="add-margin-top-bottom">
            <h1>Panel Pengumuman</h1>

            <p>Panel ini digunakan untuk menandakan berakhirnya ujian masuk dan mengumumkan status kelulusan yang telah ditentukan oleh Humas.</p>

            <div class="add-margin-top-bottom">
                <a href="/mengumumkan"><h1 class="text-center">Umumkan Hasil Ujian Masuk<h1></a>
            </div>
        </div>
    </div>
@endsection