<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bursa Kerja Khusus &mdash; SMK WIKRAMA BOGOR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="landing/fonts/icomoon/style.css">

  <link rel="stylesheet" href="landing/css/bootstrap.min.css">
  <link rel="stylesheet" href="landing/css/jquery-ui.css">
  <link rel="stylesheet" href="landing/css/owl.carousel.min.css">
  <link rel="stylesheet" href="landing/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="landing/css/owl.theme.default.min.css">

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
            <a href="index.html" class="site-logo">
              @yield('title')
            </a>

            <a href="#" class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>

          </div>
          <div class="col-12 col-lg-6 ml-auto d-flex">
            <div class="ml-md-auto top-social d-none d-lg-inline-block">
              <a href="#" class="d-inline-block p-3"><span class="icon-facebook"></span></a>
                <a href="#" class="d-inline-block p-3"><span class="icon-twitter"></span></a>
                <a href="#" class="d-inline-block p-3"><span class="icon-instagram"></span></a>
            </div>
            <form action="#" class="search-form d-inline-block">

              <div class="d-flex">
                <input type="email" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-secondary" ><span class="icon-search"></span></button>
              </div>
            </form>

            
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
                  <a href="index.html" class="nav-link text-left">Beranda</a>
                </li>
                <li>
                  <a href="{{route('login')}}" class="nav-link text-left">Login</a>
                </li>
                <li>
                  <a href="categories.html" class="nav-link text-left">Informasi Lowongan Kerja</a>
                </li>
                <li>
                  <a href="categories.html" class="nav-link text-left">Informasi Sekolah</a>
                </li>
                <li>
                    <a href="categories.html" class="nav-link text-left">Pesan</a>
                </li>
                <li>
                  <a href="categories.html" class="nav-link text-left">Tentang Kami</a>
                </li>
                <li><a href="contact.html" class="nav-link text-left">Kontak</a></li>
              </ul>                                                
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
  <footer class="footer">
      <div class="container">
          <div class="row">
              <div class="col-md-5">
                  <h4>Bursa Kerja Khusus</h4>
                  <h5>SMK WIKRAMA BOGOR</h5>
                  <div class="row">
                      <div class="col-md-12">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa quae animi, laboriosam voluptatibus neque ipsum quidem quas eius assumenda quam magnam, eos dolorem architecto sequi esse omnis veniam tenetur ad!</p>
                      </div>
                  </div>
                  <ul class="nav">
                      <li class="nav-item"><a href="" class="nav-link pl-0"><i class="fa fa-facebook fa-lg"></i></a></li>
                      <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-twitter fa-lg"></i></a></li>
                      <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-github fa-lg"></i></a></li>
                      <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-instagram fa-lg"></i></a></li>
                  </ul>
                  <br>
              </div>
              <div class="col-md-2">
                  <h5 class="text-md-right">Kirim Pesan</h5>
                  <hr>
              </div>
              <div class="col-md-5">
                  <form>
                      <fieldset class="form-group">
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                      </fieldset>
                      <fieldset class="form-group">
                          <textarea class="form-control" id="exampleMessage" placeholder="Message"></textarea>
                      </fieldset>
                      <fieldset class="form-group text-xs-right">
                          <button type="button" class="btn btn-secondary-outline btn-lg">Send</button>
                      </fieldset>
                  </form>
              </div>
          </div>
      </div>
      <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
  </footer>
  </div>
  <style>
    .zoom {
  padding: 50px;
  background-color: green;
  transition: transform .2s; /* Animation */
  width: 200px;
  height: 200px;
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
    html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 300px;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 300px;
}

/* Taller footer on small screens */
@media (max-width: 34em) {
    body {
      margin-bottom: 500px;
    }
    .footer {
      height: 500px;
    }
}

/* Sticky footer style and color
-------------------------------------------------- */
footer {
  padding-top: 30px;
  background-color: #292c2f;
  color: #bbb;
}

footer a {
  color: #999;
  text-decoration:none;
}

footer a:hover, footer a:focus {
  color: #aaa;
  text-decoration:none;
  border-bottom:1px dotted #999;
}

footer .form-control {
    background-color: #1f2022;
    box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1);
    border: none;
    resize: none;
    color: #d1d2d2;
    padding: 0.7em 1em;
}
  </style>
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
  </script>
  </body>
  
  </html>
