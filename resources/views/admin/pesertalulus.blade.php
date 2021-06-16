@extends('../layouts.navbar-logged-in')

@section('content')

    <section class="hero-bg d-flex justify-content-center p-1">
    @if(session()->has('messege'))
    <div class="alert alert-success">{{session()->get('messege')}}</div>
    @endif
    </section>
    <section class="hero p-2 hero-bg d-flex justify-content-center align-items-center">
        <div class="container text-white">
            <div class="row justify-content-center">
                <h4 id="bold">DATA SISWA<h4>
            </div>
            <br>
            
            <div class="row" id="rcorners1">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">No. Pendaftaran</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NISN</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Biodata</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($student as $s)
                        <tr>
                        <th scope="row">{{ $s->user_id }}</th>
                        <td>{{ $s->nama_lengkap }}</td>
                        <td>{{ $s->nisn }}</td>
                        <td>{{ $s->keterangan }}</td>
                        <td>
                            <a href="/datasiswaadmin/{{ $s->user_id }}" class="btn btn-primary">Lihat Biodata</a>
                        </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection