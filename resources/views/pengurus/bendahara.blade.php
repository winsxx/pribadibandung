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
                @foreach($cs as $c)
                <tr>
                    <td>{{$c->updated_at}}</td>
                    <td>{{$c->id}}</td>
                    <td>{{$c->name}}</td>
                    <td><a href="/file/{{$c->link_bukti}}">Lihat</a></td>
                    <td><a href="/sahkan/{{$c->id}}">Sahkan Pembayaran</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection