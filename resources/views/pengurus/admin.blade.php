@extends('master')

@section('content')
    <nav class="navbar navbar-default top-nav">
        <div class="container">
            <ul class="top-nav">
                <li><a href="/admin" class="active">Mengubah Info Jadwal Ujian Masuk</a></li>
                <li><a href="/admin-umumkan">Melakukan Pengumuman</a></li>
            </ul>
            <a href="#" id="pull"><img src="images/menu-icon.png" title="menu" /></a>
        </div>
    </nav>

    <div class="container">
        <div class="add-margin-top-bottom">
            <h1>Panel Pengubahan Informasi Jadwal Ujian Masuk</h1>

            <p>Panel ini digunakan untuk mengganti informasi jadwal yang akan ditampilkan
                kepada calon siswa ketika bukti pembayarannya sudah divalidasi oleh bendahara.</p>

            <div class="add-margin-top-bottom">
                <form class="form-horizontal" action="/ubahjadwal" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label for="jadwal_baru" class="col-sm-3 control-label">Jadwal Ujian</label>

                        <div class="col-sm-6">
                            <input class="form-control" name="jadwal_baru" id="jadwal_baru" placeholder="17 April 2015">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default center-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection