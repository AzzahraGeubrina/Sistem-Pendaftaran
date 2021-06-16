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
      <img class="nav-img" src="assets-beranda/images/icon-sma.png" >
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
                        <a href="/visimisi" class="nav-link smoothScroll">Visi & Misi</a>
                    </li>
                    <li class="nav-item">
                        <a href="/ekstrakurikuler" class="nav-link smoothScroll">Ektrakurikuler</a>
                    </li>
                    <li class="nav-item">
                        <a href="/galeri" class="nav-link smoothScroll">Galeri</a>
                    </li>
                    <li class="">
                        <a href="/about" class="nav-link contact">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


     <!-- HALAMAN -->
               <div class="container p-4">
                    <div class="row">
                        <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text">
                                   <h1 class="text-front" data-aos="fade-up">Pendaftaran Peserta Didik Baru Mulai Dibuka Pada 16 Juli - 31 Agustus 2021</h1>
                                   <a href="{{ route('register') }}" class="custom-btn btn-bg btn mt-2" data-aos="fade-up" data-aos-delay="100">Daftar</a>
                                   <a href="{{ route('login') }}" class="btn-masuk btn-bg2 btn mt-2" data-aos="fade-up" data-aos-delay="100">Masuk</a>
                              </div>
                              
                        </div>
                        <div>
                          <div  class="hero-image1" data-aos="fade-up" data-aos-delay="300">
                            <img src="assets-beranda/images/sma1.png" class="img-fluid" alt="working girl">
                          </div>
                        </div>

                    </div>
               </div>
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
