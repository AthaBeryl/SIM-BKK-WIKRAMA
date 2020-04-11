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
    
                                  <center><i class="far fa-sad-tear"></i><h1>Belum Tersedia</h1></center>
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
    
                              <center><i class="far fa-sad-tear"></i><h1>Belum Tersedia</h1></center>
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
      <div class="owl-carousel">
        {{-- cards --}}
        @forelse($pesan as $p)
        <div class="card mb-4" style="width: 18rem;">
          <div class="card-header">
            {{$p->name}}
          </div>
          <div class="card-body">
            <p class="card-text">{{$p->pesan}}</p>
          </div>
          <div class="blockquote-footer card-footer text-center ">
            {{$p->jurusan}}
          </div>
        </div>
        @empty
        <div class="card mb-4" style="width: 18rem;">
          <div class="card-header">
            Belum Ada Data
          </div>
          <div class="card-body">
            <p class="card-text"> Belum Ada Data</p>
          </div>
          <div class="blockquote-footer card-footer text-center ">
          Belum Ada Data
          </div>
        </div>
    @endforelse

        {{-- End cards --}} 
      </div>
    </div>
  {{-- End carrousel Message --}}

@endsection