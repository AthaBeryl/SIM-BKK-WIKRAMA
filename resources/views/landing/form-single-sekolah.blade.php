@extends('layouts.landing')
@section('title','SMK WIKRAMA BOGOR')
@section('content')

@foreach($sekolah as $data)
<div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 single-content">
            <h1 class="mb-4">{{$data->judul}}</h1>
          <p class="mb-5">
            <img src="/image/InfoSekolah/{{$data->foto}}" alt="Image" class="img-fluid">
          </p>  
          <div class="post-meta d-flex mb-5">
            <div class="vcard">
              <span class="date-read">{{substr($data->updated_at,0,10)}}<span class="mx-1">&bullet;</span></span>
            </div>
          </div>

          <p><pre>{{$data->isi}}</pre></p>

            <a href="{{url('/form-full-sekolah')}}" class= "btn btn-outline-primary mt-2 " style="border-radius:10px!IMPORTANT;">Kembali<a>
            </div>
          </div>
        </div>
      </div>
    </div>
@endforeach

@endsection