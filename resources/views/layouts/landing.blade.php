<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bursa Kerja Khusus &mdash; SMK WIKRAMA BOGOR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">


  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="landing/fonts/icomoon/style.css">

  <link rel="stylesheet" href="landing/css/bootstrap.min.css">
  <link rel="stylesheet" href="landing/css/jquery-ui.css">
  <link rel="stylesheet" href="landing/css/owl.carousel.min.css">
  <link rel="stylesheet" href="landing/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="landing/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="landing/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="landing/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="landing/css/aos.css">
  <link href="landing/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="landing/css/style.css">
	<!-- Include the slider scripts -->
  {{-- <script type="text/javascript" src="landing/js/jquery.simpleslider.js"></script>
  <script type="text/javascript" src="landing/js/src/backstretch.js"></script>
  <script type="text/javascript" src="landing/js/src/custom.js"></script> --}}


</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-lg-6 d-flex">
            <a href="{{url('/')}}" class="site-logo">
              @yield('title')
            </a>

            <a href="#" class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>

          </div>
          <div class="col-12 col-lg-6 ml-auto d-flex">
            
            

            
          </div>
          <div class="col-6 d-block d-lg-none text-right">
            
          </div>
        </div>
      </div>
          
      <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                <li class="active">
                  <a href="/" class="nav-link text-left">Beranda</a>
                </li>
                <li>
                  @guest
                  <a href="{{url('login')}}" class="nav-link text-left">Login</a>
                  @else
                  <a href="{{route('home')}}" class="nav-link text-left">Dashboard</a>
                   @endguest
                </li>
                <li>
                  <a href="{{url('/form-full-lowongan')}}" class="nav-link text-left">Informasi Lowongan Kerja</a>
                </li>
                <li>
                  <a href="{{url('/form-full-sekolah')}}" class="nav-link text-left">Informasi Sekolah</a>
                </li>
                <li>
                    <a href="#pesan" class="nav-link text-left">Pesan</a>
                </li>
            </nav>

          </div>
        </div>
      </div>
      
    </div>
    
    </div>
  </div>
  {{-- Body --}}
  @yield('content')
  {{-- End Body --}}
 <!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Content -->
        <h4 class="font-weight-bold text-uppercase ">Bursa kerja Khusus</h4>
        <h5 class="mb-2">SMK WIKRAMA BOGOR</h5>
        <p>adalah sebuah lembaga yang dibentuk di Sekolah Menengah Kejuruan Negeri dan Swasta, sebagai unit pelaksana yang memberikan pelayanan dan informasi lowongan kerja, pelaksana pemasaran, penyaluran dan penempatan tenaga kerja, merupakan mitra Dinas Tenaga Kerja dan Transmigrasi.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Hotline : </h5>

        <ul class="list-unstyled">
          <li>
            <i class="fab fa-whatsapp"></i> 087775086000
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-6 mx-auto">
        @guest
        
        @else
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Kirim Pesan</h5>
        
          <form id="formpesan">
          <fieldset class="form-group">
              <textarea class="form-control sizefootertextarea" name="pesan" id="pesan" rows="4" placeholder="Pesan"></textarea>
          </fieldset>
          <fieldset class="form-group text-xs-right">
              <button type="button" id="send" class="btn btn-secondary-outline btn-lg">Send</button>
          </fieldset>
      </form>
@endguest
      </div>
      <!-- Grid column -->
    </div>
    <!-- Grid row -->
  </div>
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
   <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
   Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
   <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

  
    <!-- .site-wrap -->
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>
    {{-- <script type="text/javascript" src="landing/js/transit.js"></script>
    <script type="text/javascript" src="landing/js/touchSwipe.js"></script>
    <script type="text/javascript" src="landing/js/simpleSlider.js"></script> --}}
    <script src="landing/js/jquery-3.3.1.min.js"></script>
    <script src="landing/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="landing/js/jquery-ui.js"></script>
    <script src="landing/js/popper.min.js"></script>
    <script src="landing/js/bootstrap.min.js"></script>
    <script src="landing/js/owl.carousel.min.js"></script>
    <script src="landing/js/jquery.stellar.min.js"></script>
    <script src="landing/js/jquery.countdown.min.js"></script>
    <script src="landing/js/bootstrap-datepicker.min.js"></script>
    <script src="landing/js/jquery.easing.1.3.js"></script>
    <script src="landing/js/aos.js"></script>
    <script src="landing/js/jquery.fancybox.min.js"></script>
    <script src="landing/js/jquery.sticky.js"></script>
    <script src="landing/js/jquery.mb.YTPlayer.min.js"></script>
    <script src="landing/js/main.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    {{-- <script src="https://unpkg.com/simpleslider-js@1.9.0/dist/simpleSlider.min.js"></script>
    <script src="https://unpkg.com/simpleslider-js@1.9.0/dist/simpleSlider.min.css"></script> --}}
  <script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

//kirim pesan
$("#send").click(function (e) {
    $.ajaxSetup({ 
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }   
    })
    e.preventDefault();

    $.ajax({
      data: $('#formpesan').serialize(),
      url: "{{ route('pesan.store') }}",
      type: "POST",
      dataType: 'json',
      success: function (data) {
        $('#formpesan').trigger("reset");
        swal({
          title: "Berhasil!",
          text: "Pesan Terikirim!",
          icon: "success",
          button: false,
          timer: 1500
        });
      },
      error: function (data) {
        console.log('Error:', data);
        swal({
          title: "Gagal!",
          text: "Pesan Tidak Terkirim!",
          icon: "error",
          button: false,
          timer: 1500
        });
      }
    });
  });


  </script>
  </body>
  
  </html>
