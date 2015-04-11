@extends('master')

@section('content')
    <div class="container content-space grey-text">
        <div class="row">
            <div class="col-md-4">
                <img src="images/team-1.jpg" alt="Smiley face" height="240" width="180">
            </div>
            <div class="col-md-4">
                <h3 class="orange-text">No Registrasi:</h3>
                <h3> &nbsp;&nbsp;2015001</h3>
                <br>
                <h3 class="orange-text">Status:</h3>
                <h3> &nbsp;&nbsp;Belum Lolos</h3>
            </div>
            <div class="col-xs-4">
                <h2 class="orange-text">Tahapan Proses:</h2>
                <ol>
                    <h3><li class="white-text">Input data diri dan dokumen</li></h3>
                    <h3><li>Unggah bukti pembayaran</li></h3>
                    <h3><li>Mengikuti ujian masuk</li></h3>
                    <h3><li>Pengumuman kelulusan</li></h3>
                </ol>
            </div>
        </div>
    </div>

    @include('pendaftar._datadiri')
@endsection