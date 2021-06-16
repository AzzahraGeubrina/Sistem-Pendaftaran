@extends('../layouts.scrolled-navbar-logged-in')

@section('content')
<section class="hero hero-bg d-flex justify-content-center align-items-center w-100">
        <div class="container text-white" data-aos="fade-up">
        <div class="row py-3">
            <h6>Silahkan isi data orang tua anda di bawah ini dengan benar dan teliti<h6>
        </div>

        <div class="row py-4" id="rcorners1"><br>
        <div class="row" style="margin-left: 37%; margin-right: auto;">
            <h5>Data Orang Tua & Wali Siswa<h5>
        </div>
            <form method="post" action="/dataorangtua">
            @csrf
                <div class="form-row px-5 py-4">
                    <div class="form-group px-4 col-md-6">
                        <label for="nama_ayah">Nama Ayah</label>
                        <input type="nama_ayah" name="nama_ayah" class="form-control" id="nama_ayah" placeholder="Masukkan nama ayah" required autocomplete="name">
                    </div>

                    <div class="form-group px-4 col-md-6">
                        <label for="nama_ibu">Nama Ibu</label>
                        <input type="nama_ibu" class="form-control" name="nama_ibu" id="nama_ibu" placeholder="Masukkan nama ibu" required autocomplete="name">
                    </div>

                    <div class="form-group px-4 col-md-6">
                        <label for="alamat_ayah">Alamat Ayah</label>
                        <input type="alamat_ayah" name="alamat_ayah" class="form-control" id="alamat_ayah" placeholder="Masukkan alamat ayah" required autocomplete="name">
                    </div>

                    <div class="form-group px-4 col-md-6">
                        <label for="alamat_ibu">Alamat Ibu</label>
                        <input type="alamat_ibu" name="alamat_ibu" class="form-control" id="alamat_ibu" placeholder="Masukkan alamat ibu" required autocomplete="name">
                    </div>

                    <div class="form-group px-4 col-md-6">
                        <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                        <input type="pekerjaan_ayah" name="pekerjaan_ayah" class="form-control" id="pekerjaan_ayah" placeholder="Masukkan pekerjaan ayah" required autocomplete="name">
                    </div>

                    <div class="form-group px-4 col-md-6">
                        <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                        <input type="pekerjaan_ibu" name="pekerjaan_ibu" class="form-control" id="pekerjaan_ibu" placeholder="Masukkan pekerjaan ayah" required autocomplete="name">
                    </div>

                    <div class="form-group px-4 col-md-6">
                        <label for="nohp_ayah">No Telepon Ayah</label>
                        <input type="nohp_ayah" name="nohp_ayah" class="form-control" id="nohp_ayah" placeholder="Masukkan nomor telepon ayah" required autocomplete="name">
                    </div>

                    <div class="form-group px-4 col-md-6">
                        <label for="nohp_ibu">No Telepon Ibu</label>
                        <input type="nohp_ibu" name="nohp_ibu" class="form-control" id="nohp_ibu" placeholder="Masukkan nomor telepon ibu" required autocomplete="name">
                    </div>
                </div>

                <div class="form-row px-5 py-4">
                    <div class="form-group px-4 col-md-6">
                        <label for="nama_wali">Nama Wali</label>
                        <input type="nama_wali" class="form-control" name="nama_wali" id="nama_wali" placeholder="Masukkan nama wali" required autocomplete="name">
                    </div>
                    
                    <div class="form-group px-4 col-md-6">
                        <label for="alamat_wali">Alamat Wali</label>
                        <input type="alamat_wali" name="alamat_wali" class="form-control" id="alamat_wali" placeholder="Masukkan alamat wali" required autocomplete="name">
                    </div>

                    <div class="form-group px-4 col-md-6">
                        <label for="nohp_wali">No Telepon Wali</label>
                        <input type="nohp_wali" name="nohp_wali" class="form-control" id="nohp_wali" placeholder="Masukkan nomor telepon wali" required autocomplete="name">
                    </div>
                    <div class="form-group px-4 col-md-6">
                        
                    </div>
                    <div class="form-group px-4" style="margin-left: auto; margin-right: 0;">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection