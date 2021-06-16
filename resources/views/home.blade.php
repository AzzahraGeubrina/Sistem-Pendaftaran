@extends('layouts.scrolled-navbar-logged-in')

@section('content')
@if(session()->has('messege'))
    <div class="row alert alert-warning">{{session()->get('messege')}}</div>
    @endif
    <section class="heros hero-bg d-flex justify-content-center align-items-center text-white">
        <div class="container text-white" data-aos="fade-up">
        <div class="row">
            <h3>Selamat Datang, {{ Auth::user()->name }}!</h3>
        </div>
        <div class="row">
            <h6>Silahkan isi data diri anda di bawah ini dengan teliti.<h6>
        </div>
        <br>

        <div class="row py-4" id="rcorners1">
            <div class="row" style="margin-left: 42%; margin-right: auto;">
                <h5>Data Diri Siswa<h5>
            </div>
            <form method="post" action="/datadiri">
            @csrf
                <div class="form-row">
                    <div class="form-group px-4 col-md-6">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="nama_lengkap" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Masukkan nama lengkap" required autocomplete="name">
                    </div>
                    <div class="form-group px-4 col-md-6">
                        <label for="nisn">NISN</label>
                        <input type="nisn" name="nisn" class="form-control" id="nisn" placeholder="Masukkan NISN" required autocomplete="nisn">
                    </div>
                    <div class="form-group px-4 col-md-6">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin">
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group px-4 col-md-6">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="tempat_lahir" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Masukkan tempat lahir" required autocomplete="name">
                    </div>
                    <div class="form-group px-4 col-md-6">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Masukkan tanggal lahir" required autocomplete="name">
                    </div>

                    <div class="form-group px-4 col-md-6">
                        <label for="agama">Agama</label>
                        <input type="agama" class="form-control" name="agama" id="agama" placeholder="Masukkan agama" required autocomplete="name">
                    </div>
                    <div class="form-group px-4 col-md-6">
                        <label for="alamat">Alamat Tempat Tinggal</label>
                        <input type="alamat" class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat rumah" required autocomplete="name">
                    </div>

                    <div class="form-group px-4 col-md-6">
                        <label for="no_hp">No Telepon</label>
                        <input type="no_hp" class="form-control" name="no_hp" id="no_hp" placeholder="Masukkan nomor telepon" required autocomplete="name">
                    </div>
                    <div class="form-group px-4 col-md-6">
                        <label for="asal_sekolah">Asal Sekolah</label>
                        <input type="asal_sekolah" class="form-control" name="asal_sekolah" id="asal_sekolah" placeholder="Masukkan asal sekolah" required autocomplete="name">
                    </div>
                    <div class="form-group px-4 col-md-6">
                        <label for="jurusan_pilihan">Jurusan yang akan dipilih</label>
                        <select class="form-control" name="jurusan_pilihan">
                            <option value="ipa">IPA</option>
                            <option value="ips">IPS</option>
                        </select>
                    </div>
                    <div class="form-group px-4" style="margin-left: auto; margin-right: 0;">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
            <br>
        </div>
        <br>
        </div>
    </section>
@endsection