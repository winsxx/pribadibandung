@extends('master')

@section('content')

@if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@endsection

    <nav class="navbar navbar-default top-nav">
        <div class="container">
            <ul class="top-nav">
                <li><a href="/home">Home</a></li>
                <li><a href="/ubahdatadiri" class="active">Detail Siswa</a></li>
            </ul>
            <a href="#" id="pull"><img src="images/menu-icon.png" title="menu" /></a>
        </div>
    </nav>
    <table class="table table-bordered">
        <tr class="table-header">
            <th>Attribute</th>
            <th>Keterangan</th>
        </tr>        
        <tr>                    
            <td>Nama</td>
            <td>{{ $dataSiswa->name }}</td>
        </tr>        
    </table>