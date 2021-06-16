@extends('../layouts.scrolled-navbar-logged-in')

@section('content')
<section class="hero hero-bg d-flex justify-content-center align-items-center w-100">
        <div class="container text-white" data-aos="fade-up">
        <div class="row py-3">
            <h6>Silahkan upload berkas yang diminta di bawah ini dengan benar dan teliti<h6>
        </div>

        <div class="row py-4" id="rcorners1"><br>
        <div class="row" style="margin-left: 43%; margin-right: auto;">
            <h5>Data Berkas<h5>
        </div>
            <form method="post" action="/uploadberkas" enctype="multipart/form-data">
            @csrf
                <div class="form-row px-5 py-2">
                    <div class="form-group px-4 py-2 col-md-6">
                            <label for="akta">Scan Akta Kelahiran</label>
                        <div class="custom-file">
                            <input type="file" name="akta" class="form-control" id="akta">
                        </div>
                    </div>

                    <div class="form-group px-4 py-2 col-md-6">
                            <label for="kk">Scan Kartu Keluarga</label>
                        <div class="custom-file">
                            <input type="file" name="kk" class="form-control" id="kk">
                        </div>
                    </div>

                    <div class="form-group px-4 py-2 col-md-6">
                            <label for="ijazah_skhu">Scan Ijazah/SKHU</label>
                        <div class="custom-file">
                            <input type="file" name="ijazah_skhu" class="form-control" id="ijazah_skhu">
                        </div>
                    </div>

                    <div class="form-group px-4 py-2 col-md-6">
                            <label for="foto">Pas foto (latar merah)</label>
                        <div class="custom-file">
                            <input type="file" name="foto" class="form-control" id="foto">
                        </div>
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