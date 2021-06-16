@extends('../layouts.navbar-logged-in')

@section('content')
@if(session()->has('messege'))
<div class="alert alert-success">{{session()->get('messege')}}</div>
@endif
<section class="heros hero-bg p-1 d-flex justify-content-center align-items-center text-white">
        <div class="container p-5">
            <div class="row p-5" id="rcorners1">
                <a href="/semuadata/{{ Auth::user()->id }}" class="nav-link logout p-5"><h4 style="text-align: center" id="bold">LIHAT BIODATA</h4></a>
            </div>
        </div>
        <div class="container p-5">
            <div class="row p-5" id="rcorners1">
                <a href="/kelulusan/{{ Auth::user()->id }}" class="nav-link logout p-5"><h4 style="text-align: center" id="bold">INFO KELULUSAN</h4></a>
            </div>
        </div>
     </section>
@endsection