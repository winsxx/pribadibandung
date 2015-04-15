@extends('master')

@section('content')
    <div class="container">
        <div class="add-margin-top-bottom">
            <h1>Panel Pengaturan Kelulusan Seleksi Masuk</h1>
            <table class="table table-bordered">
                <tr class="table-header">
                    <th>No Reg</th>
                    <th>Nama</th>
                    <th>Detail</th>
                    <th>Kelulusan</th>
                </tr>
                <tr>
                    <td>2015001</td>
                    <td>Budi Gunawan</td>
                    <td><a href="">Lihat</a></td>
                    <td>
                        <select class="form-control">
                            <option>Belum Diumumkan</option>
                            <option>Gagal</option>
                            <option>Lulus</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>2015002</td>
                    <td>Charlie</td>
                    <td><a href="">Lihat</a></td>
                    <td>
                        <select class="form-control">
                            <option>Belum Diumumkan</option>
                            <option>Gagal</option>
                            <option>Lulus</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>2015003</td>
                    <td>Rama Aji</td>
                    <td><a href="">Lihat</a></td>
                    <td>
                        <select class="form-control">
                            <option>Belum Diumumkan</option>
                            <option>Gagal</option>
                            <option>Lulus</option>
                        </select>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection