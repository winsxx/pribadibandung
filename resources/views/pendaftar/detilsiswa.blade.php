@extends('master')

@section('content')

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div class="container add-margin-top-bottom">
        <table class="table table-bordered">
            <tr class="table-header">
                <th>Attribute</th>
                <th>Keterangan</th>
            </tr>
            <tr>
                <td>Nama</td>
                <td>{{ $pengguna->name }}</td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td>{{ $dataSiswa->asal_sekolah }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ $pengguna->email }}</td>
            </tr>
            <tr>
                <td>No HP</td>
                <td>{{ $dataSiswa->no_hp }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>{{ $dataSiswa->alamat }}</td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>{{ $dataSiswa->tmpt_lahir }}</td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>{{ $dataSiswa->tgl_lahir }}</td>
            </tr>
            <tr>
                <td>Gender</td>
                @if($dataSiswa->gender == 0)
                    <td>Laki-laki</td>
                @else
                    <td>Perempuan</td>
                @endif
            </tr>
        </table>
    </div>
@endsection