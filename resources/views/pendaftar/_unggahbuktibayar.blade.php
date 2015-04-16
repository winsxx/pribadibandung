<div class="container">
    @if(\App\CalonSiswa::find(Auth::user()->id)->link_bukti != null)
        <img src="/file/{{\App\CalonSiswa::find(Auth::user()->id)->link_bukti}}">
    @endif
    <div class="add-margin-top-bottom">
        <h1>Unggah Bukti Pembayaran</h1>
        <form action="/buktibayar" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="buktiBayarFile">Bukti pembayaran</label>
                <input type="file" id="buktiBayarFile" name="buktibayar">
                <p class="help-block">Format file: .jpg</p>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>