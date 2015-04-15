@extends('master')

@section('content')
    <nav class="navbar navbar-default top-nav">
        <div class="container">
            <ul class="top-nav">
                <li><a href="/home">Home</a></li>
                <li><a href="/ubahdatadiri" class="active">Ubah Data Diri</a></li>
            </ul>
            <a href="#" id="pull"><img src="images/menu-icon.png" title="menu" /></a>
        </div>
    </nav>
    <form class="form-horizontal">
        <div class="col-sm-offset-2 col-sm-8">
            <h1 class="text-center add-margin-top-bottom">Ubah Data Diri</h1>
        </div>
        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Nama Lengkap</label>

            <div class="col-sm-6">
                <input class="form-control" id="name" placeholder="Nama">
            </div>
        </div>
        <div class="form-group">
            <label for="placeofbirth" class="col-sm-3 control-label">Tempat Lahir</label>

            <div class="col-sm-6">
                <input class="form-control" id="placeofbirth" placeholder="Tempat kelahiran">
            </div>
        </div>
        <div class="form-group">
            <label for="dateofbirth" class="col-sm-3 control-label">Tanggal Lahir</label>

            <div class="col-sm-6">
                <input class="form-control" id="dateofbirth" placeholder="Tanggal Lahir">
            </div>
        </div>
        <div class="form-group">
            <label for="gender" class="col-sm-3 control-label">Gender</label>

            <div class="col-sm-6">
                <div class="radio" id="gender">
                    <label>
                        <input type="radio" name="gender" id="genderRadios1" value="laki" checked>
                        Laki-laki
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="gender" id="genderRadios2" value="perempuan">
                        Perempuan
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="phoneNumberHome" class="col-sm-3 control-label">Nomor Telepon</label>
            <div class="col-sm-6">
                <input class="form-control" id="phoneNumberHome" placeholder="061xxxxx">
            </div>
        </div>
        <div class="form-group">
            <label for="phoneNumber" class="col-sm-3 control-label">Nomor HP</label>
            <div class="col-sm-6">
                <input class="form-control" id="phoneNumber" placeholder="081xxxxxx">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8 add-margin-top-bottom">
                <button type="submit" class="btn btn-default center-block">Selesai</button>
            </div>
        </div>
    </form>
@endsection