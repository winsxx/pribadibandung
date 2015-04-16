<div class="container">
    <div class="add-margin-top-bottom">
        <div class="add-margin-top-bottom">
            <h1 class="text-center">Pengumuman Ujian Masuk</h1>
        </div>
        @if ($dataSiswa->status_kelulusan==1)
	        <h3 class="text-center">Selamat, Anda diterima sebagai siswa Pribadi BBS Bandung</h3>
	        <p class="text-center">Lakukan pendaftaran ulang sesuai dengan jadwal yang telah ditentukan.</p>
	        <p class="text-center">Bawalah berkas-berkas yang diperlukan pada saat pendaftaran ulang.</p>
        @else
 	       <h3 class="text-center">Maaf, Anda tidak lulus Ujian Masuk Pribadi BBS Bandung.</h3>
        @endif
    </div>
</div>