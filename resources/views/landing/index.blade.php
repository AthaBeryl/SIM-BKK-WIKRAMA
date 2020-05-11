@extends('layouts.landing')
@section('title','SMK WIKRAMA BOGOR')
@section('content')
<style>
.isi{
  display: -webkit-box;
  -webkit-line-clamp: 6;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
}
@media (min-width: 768px) {
  /* show 3 items */
  .carousel-inner .active,
  .carousel-inner .active + .carousel-item,
  .carousel-inner .active + .carousel-item + .carousel-item {
    display: block;
  }

  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
    transition: none;
  }

  .carousel-inner .carousel-item-next,
  .carousel-inner .carousel-item-prev {
    position: relative;
    transform: translate3d(0, 0, 0);
  }

  .carousel-inner .active.carousel-item + .carousel-item + .carousel-item + .carousel-item {
    position: absolute;
    top: 0;
    right: -33.3333%;
    z-index: -1;
    display: block;
    visibility: visible;
  }

  /* left or forward direction */
  .active.carousel-item-left + .carousel-item-next.carousel-item-left,
  .carousel-item-next.carousel-item-left + .carousel-item,
  .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item,
  .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
    position: relative;
    transform: translate3d(-100%, 0, 0);
    visibility: visible;
  }

  /* farthest right hidden item must be abso position for animations */
  .carousel-inner .carousel-item-prev.carousel-item-right {
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    display: block;
    visibility: visible;
  }

  /* right or prev direction */
  .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
  .carousel-item-prev.carousel-item-right + .carousel-item,
  .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item,
  .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
    position: relative;
    transform: translate3d(100%, 0, 0);
    visibility: visible;
    display: block;
    visibility: visible;
  }
}

</style>
<!-- Jumbotron -->
<div class="card card-image" style="background-image: url(landing/images/bg1.jpg);height:500px;">
  <div class="text-white text-center rgba-stylish-strong py-5 px-4 mt-6">
    <div class="py-5">

      <!-- Content -->
      <h2 class="card-title text-black h2">Sistem Informasi Bursa Kerja Khusus</h2>
      <h5 class="h5 text-black mb-4">SMK WIKRAMA BOGOR</h5>
      @guest
    <a href="{{route('login')}}" class="btn peach-gradient hover-login">Login</a>
      @else
      <a href="{{route('home')}}" class="btn peach-gradient hover-login">Dashboard</a>
      @endguest
    </div>
  </div>
</div>
<!-- Jumbotron -->
  {{-- Informasi Loker --}}
      <div class="row">
          <div class="col-md-12 mt-6">
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-8">
                              <div class="row">
                                <div class="col-12">
                                  <div class="section-title">
                                    <h2>Informasi Lowongan Kerja</h2>
                                  </div>
                                </div>
                              </div>
                                <div class="col-md-12">
                                  @forelse($lowongan as $data)
                                  <div class="post-entry-2 d-flex">
                                    <div class="thumbnail zoom" style="border-radius:10px;background-image: url('image/InfoLowongan/{{$data->foto}}')"></div>
                                    <div class="contents">
                                      <h2><a href="/form-single-lowongan;{{$data->id}}">{{$data->judul}}</a></h2>
                                      <div class="post-meta">
                                       <p class="isi"> {!!$data->isi!!}</p>
                                        <span class="date-read">{{substr($data->updated_at,0,10)}}<span class="mx-1">&bullet;</span></span>
                                      </div>
                                    </div>
                                  </div>
                                  @empty
    
                                  <center><i class="far fa-sad-tear"></i><h4>Belum ada Info Sekolah</h4></center>
                                 @endforelse

                                  {{-- More --}}
                                  <p>
                                        <a href="{{url('/form-full-lowongan')}}" class="more">Lainnya<span class="icon-keyboard_arrow_right"></span></a>
                                      </p>
                                  {{-- End More --}}
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END section -->
                  </div>
  {{-- End Loker --}}
  {{-- Informasi sekolah --}}
  <div class="row">
      <div class="col-md-12 mt-4">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-8">
                          <div class="row">
                            <div class="col-12">
                              <div class="section-title">
                                <h2>Informasi Sekolah</h2>
                              </div>
                            </div>
                          </div>
                            <div class="col-md-12">
                              @forelse($sekolah as $data)
                              <div class="post-entry-2 d-flex">
                                <div class="thumbnail zoom" style="border-radius:10px;background-image: url('image/InfoSekolah/{{$data->foto}}')"></div>
                                <div class="contents">
                                  <h2><a href="/form-single-sekolah;{{$data->id}}">{{$data->judul}}</a></h2>
                                  <div class="post-meta">
                                   <p class="isi">{{$data->isi}}</p>
                                    <span class="date-read">{{substr($data->updated_at,0,10)}}<span class="mx-1">&bullet;</span></span>
                                  </div>
                                </div>
                              </div>
                              @empty
    
                              <center><i class="far fa-sad-tear"></i><h4>Belum ada Info Lowongan</h4></center>
                              @endforelse

                              {{-- More --}}
                              <p>
                                    <a href="{{url('/form-full-sekolah')}}" class="more">Lainnya<span class="icon-keyboard_arrow_right"></span></a>
                                  </p>
                              {{-- End More --}}
                            </div>
                          </div>
                        </div>
                      </div>
                  
                      <!-- END section -->
              </div>
      </div>
  {{-- End Informasi Sekolah --}}
  <!-- carrousel of message -->
    <div class="container mt-4">
      <div class="section-title" data-spy="scroll" data-target="#pesan" id="pesan" data-offset="0" >
          <h2>Pesan</h2>
      </div>
      <div class="container-fluid">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner row w-100 mx-auto">
    @if($pesan->count() >= 1)
    <div class="carousel-item col-md-4 active">
        <div class="card">
          <img class="card-img-top img-fluid" src="{{asset('image/profiles/'.$pesan->last()->foto)}}" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title"> {{$pesan->last()->name}}</h4>
            <p class="card-text">{{$pesan->last()->pesan}}</p>
            <p class="card-text"><small class="text-muted">{{$pesan->last()->pesan}}</small></p>
          </div>
        </div>
      </div>
      @endif
    @forelse($pesan as $p)
      <div class="carousel-item col-md-4 ">
        <div class="card">
        <img class="card-img-top img-fluid" src="{{asset('image/profiles/'.$p->foto)}}" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title"> {{$p->name}}</h4>
            <p class="card-text">{{$p->pesan}}</p>
            <p class="card-text"><small class="text-muted">{{$p->jurusan}}</small></p>
          </div>
        </div>
      </div>
      @empty
      <center><i class="far fa-sad-tear"></i><h4>Belum ada Pesan</h4></center>
      @endforelse
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <br>
  </div>
</div>
    </div>
    <script>
    $(document).ready(function() {
  $("#myCarousel").on("slide.bs.carousel", function(e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $(".carousel-item").length;

    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end
        if (e.direction == "left") {
          $(".carousel-item")
            .eq(i)
            .appendTo(".carousel-inner");
        } else {
          $(".carousel-item")
            .eq(0)
            .appendTo($(this).find(".carousel-inner"));
        }
      }
    }
  });
});

    </script>
  {{-- End carrousel Message --}}

@endsection