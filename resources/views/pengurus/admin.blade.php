@extends('master')

@section('content')
    <nav class="navbar navbar-default top-nav">
        <div class="container">
            <ul class="top-nav">
                <li><a href="index.html" class="active">Mengubah Info Jadwal Ujian Masuk</a></li>
                <li><a href="about.html">Mengubah Hak Akses Pengguna</a></li>
            </ul>
            <a href="#" id="pull"><img src="images/menu-icon.png" title="menu" /></a>
        </div>
    </nav>

    <div class="container">
        <div class="add-margin-top-bottom">
            <h1>Panel Pengubahan Informasi Jadwal Ujian Masuk</h1>
            <p>Panel ini digunakan untuk mengganti informasi yang akan ditampilkan
                kepada calon siswa ketika bukti pembayarannya sudah divalidasi oleh bendahara.
                Masukkan informasi dalam bentuk kode html untuk menampilkan jadwal Ujian Masuk.</p>
            <form>
                <div class="form-group">
                    <label for="jadwal">Jadwal Seleksi (Format HTML):</label><br>
                <textarea rows="30" cols="110" id="jadwal">
                </textarea>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
@endsection