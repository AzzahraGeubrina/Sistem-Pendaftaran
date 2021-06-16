@extends('../layouts.scrolled-navbar-id')

@section('content')
    <section class="heros hero-bg justify-content-center align-items-center text-white">
    @foreach($student as $data)
        <div class="container">
            <div class="row justify-content-center">
                <h4 id="bold">DATA DIRI<h4>
            </div>
            <br>
            
            <div class="row" id="rcorners1">
                <br>
                <div class="form-row py-2">
                    <div class="form-group px-4 col-md-6">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <div class="container bg-white text-dark p-2 px-3 rounded-pill" id="bold">{{ $data->nama_lengkap }}</div>
                    </div>
                    <div class="form-group px-4 col-md-6">
                        <label for="nisn">NISN</label>
                        <div class="container bg-white text-dark p-2 px-3 rounded-pill" id="bold">{{ $data->nisn }}</div>
                    </div>
                    <div class="form-group px-4 col-md-6">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <div class="container bg-white text-dark p-2 px-3 rounded-pill" id="bold">{{ $data->jenis_kelamin }}</div>
                        </select>
                    </div>

                    <div class="form-group px-4 col-md-6">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <div class="container bg-white text-dark p-2 px-3 rounded-pill" id="bold">{{ $data->tempat_lahir }}</div>
                    </div>
                    <div class="form-group px-4 col-md-6">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <div class="container bg-white text-dark p-2 px-3 rounded-pill" id="bold">{{ $data->tanggal_lahir }}</div>
                    </div>

                    <div class="form-group px-4 col-md-6">
                        <label for="agama">Agama</label>
                        <div class="container bg-white text-dark p-2 px-3 rounded-pill" id="bold">{{ $data->agama }}</div>
                    </div>
                    <div class="form-group px-4 col-md-6">
                        <label for="alamat">Alamat Tempat Tinggal</label>
                        <div class="container bg-white text-dark p-2 px-3 rounded-pill" id="bold">{{ $data->alamat }}</div>
                    </div>

                    <div class="form-group px-4 col-md-6">
                        <label for="no_hp">No Telepon</label>
                        <div class="container bg-white text-dark p-2 px-3 rounded-pill" id="bold">{{ $data->no_hp }}</div>
                    </div>
                    <div class="form-group px-4 col-md-6">
                        <label for="asal_sekolah">Asal Sekolah</label>
                        <div class="container bg-white text-dark p-2 px-3 rounded-pill" id="bold">{{ $data->asal_sekolah }}</div>
                    </div>
                    <div class="form-group px-4 col-md-6">
                        <label for="jurusan_pilihan">Jurusan Pilihan</label>
                        <div class="container bg-white text-dark p-2 px-3 rounded-pill" id="bold">{{ $data->jurusan_pilihan }}</div>
                    </div>
                </div>
                <br>
            </div>
            <br>
        </div>
        <br>
        <div class="container">
            <div class="row justify-content-center">
                <h4 id="bold">DATA ORANG TUA DAN WALI<h4>
            </div>
            <br>
            
            <div class="row" id="rcorners1">
                <br>
                <div class="form-row py-2">
                    <div class="form-group px-4 col-md-6">
                        <label for="nama_lengkap">Nama Ayah</label>
                        <div class="container bg-white text-dark p-2 px-3 rounded-pill" id="bold">{{ $data->nama_ayah }}</div>
                    </div>
                    <div class="form-group px-4 col-md-6">
                        <label for="jenis_kelamin">Nama Ibu</label>
                        <div class="container bg-white text-dark p-2 px-3 rounded-pill" id="bold">{{ $data->nama_ibu }}</div>
                        </select>
                    </div>

                    <div class="form-group px-4 col-md-6">
                        <label for="tempat_lahir">Alamat Ayah</label>
                        <div class="container bg-white text-dark p-2 px-3 rounded-pill" id="bold">{{ $data->alamat_ayah }}</div>
                    </div>
                    <div class="form-group px-4 col-md-6">
                        <label for="tanggal_lahir">Alamat Ibu</label>
                        <div class="container bg-white text-dark p-2 px-3 rounded-pill" id="bold">{{ $data->alamat_ibu }}</div>
                    </div>

                    <div class="form-group px-4 col-md-6">
                        <label for="agama">Pekerjaan Ayah</label>
                        <div class="container bg-white text-dark p-2 px-3 rounded-pill" id="bold">{{ $data->pekerjaan_ayah }}</div>
                    </div>
                    <div class="form-group px-4 col-md-6">
                        <label for="alamat">Pekerjaan Ibu</label>
                        <div class="container bg-white text-dark p-2 px-3 rounded-pill" id="bold">{{ $data->pekerjaan_ibu }}</div>
                    </div>

                    <div class="form-group px-4 col-md-6">
                        <label for="no_hp">No Telepon Ayah</label>
                        <div class="container bg-white text-dark p-2 px-3 rounded-pill" id="bold">{{ $data->nohp_ayah }}</div>
                    </div>
                    <div class="form-group px-4 col-md-6">
                        <label for="asal_sekolah">No Telepon Ibu</label>
                        <div class="container bg-white text-dark p-2 px-3 rounded-pill" id="bold">{{ $data->nohp_ibu }}</div>
                    </div>
                    <div class="form-group px-4 col-md-6">
                        <br>
                    </div>
                    <div class="form-group px-4 col-md-6">
                    <br>
                    </div>
                    <div class="form-group px-4 col-md-6">
                        <label for="agama">Nama Wali</label>
                        <div class="container bg-white text-dark p-2 px-3 rounded-pill" id="bold">{{ $data->nama_wali }}</div>
                    </div>
                    <div class="form-group px-4 col-md-6">
                        
                    </div>
                    <div class="form-group px-4 col-md-6">
                        <label for="no_hp">Alamat Wali</label>
                        <div class="container bg-white text-dark p-2 px-3 rounded-pill" id="bold">{{ $data->alamat_wali }}</div>
                    </div>
                    <div class="form-group px-4 col-md-6">
                        
                    </div>
                    <div class="form-group px-4 col-md-6">
                        <label for="no_hp">No Telepon Wali</label>
                        <div class="container bg-white text-dark p-2 px-3 rounded-pill" id="bold">{{ $data->nohp_wali }}</div>
                        <br>
                    </div>
                <br>
                </div>
            </div>
            <br>
        </div>
        <br>        
        <div class="container">
            <div class="row justify-content-center">
                <h4 id="bold">BERKAS<h4>
            </div>
            <br>
            
            <div class="row p-3" id="rcorners1">
                <div class="form-row">
                <div class="form-group px-4">
                        <label for="agama">Akta Kelahiran</label>
                        <div class="container bg-white text-dark p-2 px-3 rounded-pill" id="bold">
                        <a href="{{asset('/storage/'.$data->akta)}}" target="_blank">Lihat Berkas Akta Kelahiran</a>
                        </div>
                    </div>
                    <div class="form-group px-4">
                        <label for="no_hp">Kartu Keluarga</label>
                        <div class="container bg-white text-dark p-2 px-3 rounded-pill" id="bold">
                        <a href="{{asset('/storage/'.$data->kk)}}" target="_blank">Lihat Berkas Kartu Keluarga</a>
                        </div>
                    </div>
                    <div class="form-group px-4">
                        <label for="no_hp">Ijazah / SKHU</label>
                        <div class="container bg-white text-dark p-2 px-3 rounded-pill" id="bold">
                        <a href="{{asset('/storage/'.$data->ijazah_skhu)}}" target="_blank">Lihat Berkas Ijazah/SKHU</a>
                        </div>
                    </div>
                    <div class="form-group px-4">
                        <label for="no_hp">Pas Foto</label>
                        <div class="container bg-white text-dark p-2 px-3 rounded-pill" id="bold">
                        <a href="{{asset('/storage/'.$data->foto)}}" target="_blank">Lihat Berkas Pas Foto</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <a class="btn btn-success" href="/kartu/{{ $data->user_id }}">Lihat Kartu Pendaftaran</a>
        </div>
    @endforeach
    </section>
@endsection