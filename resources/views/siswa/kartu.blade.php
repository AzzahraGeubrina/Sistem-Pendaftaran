@extends('../layouts.navbar-id-id')

@section('content')
    <section class="heros hero-bg d-flex justify-content-center align-items-center text-white p-6">
    <div class="container">
    <div class="row d-flex justify-content-center">
                <h3>KARTU PENDAFTARAN<h3>
            </div>
            <div class="row">
                <h6>Mohon dicetak dan dibawa ketika mengikuti seleksi.<h6>
            </div>
            <br>
            
            <div class="d-flex justify-content-center">
            <div class="card border-dark" style="width: 35rem;">
	@foreach($student as $data)
		<div class="card-body text-dark">
		<img src="../../assets-beranda/images/bg.png" class="card-img" alt="...">
			<div class="row card-img-overlay">
				<div class="col-7 m-3">
					<br><br>
					<h1 class="py-4"><strong>No.{{ $data->user_id }}</strong><h1>
					<h4 class="card-text py-3">Nama&ensp;: {{ $data->nama_lengkap }}<h4>
					<h4 class="card-text">NISN &ensp;: {{ $data->nisn }}</h4>
				</div>
				<div class="col-3">
				<br><br><br><br><br>
					<img src="{{asset('/storage/'.$data->foto)}}" width=120px height=160>
				</div>
			</div>
		</div>
		@endforeach
        </div>
	</div>
     </section>
</div>
    </section>
@endsection