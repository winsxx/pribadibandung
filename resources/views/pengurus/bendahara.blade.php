@extends('master')

@section('content')
    <div class="container">
        <div class="add-margin-top-bottom">
            <h1>Panel Pengaturan Status Pembayaran Pendaftar</h1>
            <table class="table table-bordered">
                <tr class="table-header">
                    <th>Waktu Upload</th>
                    <th>No Reg</th>
                    <th>Nama</th>
                    <th>Bukti Bayar</th>
                    <th>Konfirmasi Pembayaran</th>
                </tr>
                <tr>
                    <td>06-07-2015 16:00</td>
                    <td>2015001</td>
                    <td>Budi Gunawan</td>
                    <td><a href="">Lihat</a></td>
                    <td><a href="">Sahkan Pembayaran</a></td>
                </tr>
                <tr>
                    <td>06-07-2015 16:00</td>
                    <td>2015002</td>
                    <td>Charlie</td>
                    <td><a href="">Lihat</a></td>
                    <td><a href="">Sahkan Pembayaran</a></td>
                </tr>
                <tr>
                    <td>06-07-2015 16:00</td>
                    <td>2015003</td>
                    <td>Rama Aji</td>
                    <td><a href="">Lihat</a></td>
                    <td><a href="">Sahkan Pembayaran</a></td>
                </tr>
            </table>
        </div>
    </div>
@endsection