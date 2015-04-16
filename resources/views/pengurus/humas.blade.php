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
                    <th colspan="2">Kelulusan</th>
                </tr>
                @foreach($cs as $c)
                    @if($c->status_kelulusan == 1)
                        <tr class="success">
                    @elseif ($c->status_kelulusan == 2)
                        <tr class="danger">
                    @else
                        <tr>
                    @endif
                    <td>{{$c->id}}</td>
                    <td>{{$c->name}}</td>
                    <td><a href="/detailsiswa/{{$c->id}}">Lihat</a></td>
                    <td><a href="/luluskan/{{$c->id}}">Luluskan</a></td>
                    <td><a href="/gagalkan/{{$c->id}}">Gagalkan</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection