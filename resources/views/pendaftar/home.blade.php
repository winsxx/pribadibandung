@extends('master')

@section('content')
    <nav class="navbar navbar-default top-nav">
        <div class="container">
            <ul class="top-nav">
                <li><a href="/home" class="active">Home</a></li>
                <li><a href="/ubahdatadiri">Ubah Data Diri</a></li>
            </ul>
            <a href="#" id="pull"><img src="images/menu-icon.png" title="menu" /></a>
        </div>
    </nav>

    <div class="container content-space grey-text">

        <div class="row">
            <div class="col-md-4">
                @if($dataSiswa->link_profpic == null)
                    <img src="images/team-1.jpg" alt="Profpic" height="240" width="180">
                @else
                    <img src="file/{{$dataSiswa->link_profpic}}" alt="Profpic" height="240" width="180">
                @endif
            </div>
            <div class="col-md-4">
                <h3 class="orange-text">No Registrasi:</h3>
                <h3> &nbsp;&nbsp;{{Auth::user()->id}}</h3>
                <br>
                <h3 class="orange-text">Status:</h3>
                @if(Auth::user()->siswa != null && Auth::user()->siswa->phase==4 && Auth::user()->siswa->status_kelulusan != 0)
                    @if(Auth::user()->siswa->status_kelulusan == 1)
                        <h3> &nbsp;&nbsp;Lolos</h3>
                    @elseif (Auth::user()->siswa->status_kelulusan == 2)
                        <h3> &nbsp;&nbsp;Gagal</h3>
                    @endif
                @else
                    <h3> &nbsp;&nbsp;Belum Lolos</h3>
                @endif
            </div>
            <div class="col-xs-4">
                <h2 class="orange-text">Tahapan Proses:</h2>                                              
                    @if ($dataSiswa->phase==2)
                        <ol>
                            <h3><li><strike>Input data diri dan dokumen</strike></li></h3>
                            <h3><li class="white-text">Unggah bukti pembayaran</li></h3>
                            <h3><li>Mengikuti ujian masuk</li></h3>
                            <h3><li>Pengumuman kelulusan</li></h3>
                        </ol>
                    @elseif ($dataSiswa->phase==3)
                        <ol>
                            <h3><li><strike>Input data diri dan dokumen</strike></li></h3>
                            <h3><li><strike>Unggah bukti pembayaran</strike></li></h3>
                            <h3><li class="white-text">Mengikuti ujian masuk</li></h3>
                            <h3><li>Pengumuman kelulusan</li></h3>
                        </ol>
                    @elseif ($dataSiswa->phase==4)
                        <ol>
                            <h3><li><strike>Input data diri dan dokumen</strike></li></h3>
                            <h3><li><strike>Unggah bukti pembayaran</strike></li></h3>
                            <h3><li><strike>Mengikuti ujian masuk</strike></li></h3>
                            <h3><li class="white-text">Pengumuman kelulusan</li></h3>
                        </ol>
                    @else
                        <ol>
                            <h3><li class="white-text">Input data diri dan dokumen</li></h3>
                            <h3><li>Unggah bukti pembayaran</li></h3>
                            <h3><li>Mengikuti ujian masuk</li></h3>
                            <h3><li>Pengumuman kelulusan</li></h3>
                        </ol>     
                    @endif                
            </div>
        </div>
    </div>
    @if ($dataSiswa->phase==2)
        @include('pendaftar._unggahbuktibayar')
    @elseif ($dataSiswa->phase==3)        
        @include('pendaftar._jadwaltes')
    @elseif ($dataSiswa->phase==4)    
        @include('pendaftar._pengumumanlulus')
    @else
        @include('pendaftar._datadiri')
    @endif
@endsection