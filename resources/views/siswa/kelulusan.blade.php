<!DOCTYPE html>
<html lang="en">
<head>

     <title>Daftar SMA</title>
<!--

TAMPILAN BERANDA


-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{{asset('assets-beranda/css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('assets-beranda/css/font-awesome.min.css')}}">
     <link rel="stylesheet" href="{{asset('assets-beranda/css/aos.css')}}">
     <link rel="stylesheet" href="{{asset('assets-beranda/css/owl.carousel.min.css')}}">
     <link rel="stylesheet" href="{{asset('assets-beranda/css/owl.theme.default.min.css')}}">

     <!-- LINK CSS -->
     <link rel="stylesheet" href="{{asset('assets-beranda/css/beranda-style.css')}}">
</head>
<body>

     <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg">
      <img class="nav-img" src="../assets-beranda/images/icon-sma.png">
        <div class="container">
            <a class="navbar-brand" href="index.html">
              SMA NEGERI 1 SINGKIL UTARA
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="" class="nav-link smoothScroll">Visi & Misi</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link smoothScroll">Ektrakurikuler</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('admin')}}" class="nav-link">Admin</a>
                    </li>
                    <li class="">
                        <a href="" class="nav-link contact">About Us</a>
                    </li>
                    <li class="">
                        <a class="nav-link logout" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    </li>
                </ul>
            </div>
        </div>   
    </nav>

    <section class="heros hero-bg justify-content-center align-items-center text-white">
    @foreach($student as $data)
    @if ($data->keterangan == 'Lulus')
        <div class="container p-5">
            <div class="row justify-content-center p-3">
                <h4 id="bold">SELAMAT! Anda Dinyatakan Lulus Seleksi.<h4>
            </div>
            <br>
            <div class="row p-3" id="rcorners1">
                Harap melakukan pendaftaran ulang yang akan dilaksanakan pada tanggal 7 - 13 Juni 2021
            </div>
        </div>
    @elseif ($data->keterangan == 'Tidak Lulus')
        <div class="container p-5">
            <div class="row justify-content-center p-3">
                <h4 id="bold">Mohon maaf. Anda belum lulus seleksi.<h4>
            </div>
            <br>
            <div class="row p-3" id="rcorners1">
                Jangan menyerah dan tetap semangat.
            </div>
        </div>
    @else
    <div class="container p-5">
            <div class="row justify-content-center p-3">
                <h4 id="bold">Pengumuman belum tersedia.<h4>
            </div>
            <br>
            <div class="row p-3" id="rcorners1">
                Pengumuman kelulusan akan diumumkan pada tanggal 5 Juni 2021.
            </div>
        </div>
    @endif
    @endforeach
    </section>

    <!-- HUBUNGI KAMI -->
    <div id='footer-wrapper'>
        <div id='footer'>
            <div>
            <i class="fa fa-phone mr-2 footer-icon"></i> 
                +62 852 2869 1680
            </div>
            <br/>
            <div class='footer-sosmed'>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-youtube"></a>
            </div>
        </div>
        </div>
        
        <!-- SCRIPTS LINK -->


        <script src="assets-beranda/js/jquery.min.js"></script>
        <script src="assets-beranda/js/bootstrap.min.js"></script>
        <script src="assets-beranda/js/aos.js"></script>
        <script src="assets-beranda/js/owl.carousel.min.js"></script>
        <script src="assets-beranda/js/smoothscroll.js"></script>
        <script src="assets-beranda/js/custom.js"></script>

</body>
</html>
