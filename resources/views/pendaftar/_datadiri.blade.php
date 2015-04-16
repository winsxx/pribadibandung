@if ($errors->any())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form class="form-horizontal" action="/hasilform" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="col-sm-offset-2 col-sm-8">
        <h1 class="text-center add-margin-top-bottom">Data Diri</h1>
    </div>
    <div class="form-group">
        <label for="dateofbirth" class="col-sm-3 control-label">Alamat Sekarang</label>

        <div class="col-sm-6">
            <input class="form-control" name="address" id="address" placeholder="Alamat">
        </div>
    </div>
    <div class="form-group">
        <label for="placeofbirth" class="col-sm-3 control-label">Tempat Lahir</label>

        <div class="col-sm-6">
            <input class="form-control" name="placeofbirth" id="placeofbirth" placeholder="Tempat kelahiran">
        </div>
    </div>
    <div class="form-group">
        <label for="dateofbirth" class="col-sm-3 control-label">Tanggal Lahir</label>

        <div class="col-sm-6">
            <input class="form-control" name="dateofbirth" id="dateofbirth" placeholder="YYYY/MM/DD">
        </div>
    </div>

    <div class="form-group">
        <label for="gender" class="col-sm-3 control-label">Gender</label>

        <div class="col-sm-6">
            <div class="radio" id="gender">
                <label>
                    <input type="radio" name="gender" id="genderRadios1" value="0" checked>
                    Laki-laki
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="gender" id="genderRadios2" value="1">
                    Perempuan
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="phoneNumber" class="col-sm-3 control-label">Nomor HP</label>
        <div class="col-sm-6">
            <input class="form-control" name="phoneNumber" id="phoneNumber" placeholder="081xxxxxx">
        </div>
    </div>
    <div class="form-group">
        <label for="phoneNumber" class="col-sm-3 control-label">Asal Sekolah</label>
        <div class="col-sm-6">
            <input class="form-control" name="school_before" id="school_before" placeholder="Asal Sekolah">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-8 add-margin-top-bottom">
            <button type="submit" class="btn btn-default center-block">Selesai</button>
        </div>
    </div>
</form>