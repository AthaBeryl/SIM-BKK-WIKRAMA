@extends('layouts.landing')
@section('title','SMK WIKRAMA BOGOR')
@section('content')
<div id="fb-root"></div>
@foreach($sekolah as $data)
<div class="site-section">
    <div class="container">
      <div class="row">

       <div class="col-md-6 single-content">
          <h1 class="mb-4">{{$data->judul}}</h1>
          <p style="color:black;">SMK Wikrama Bogor</p>
          <img src="/image/InfoSekolah/{{$data->foto}}" alt="Image" class="img-fluid">
       </div>

       <div class="col-md-12 mt-4">
          <span class="date-read">{{substr($data->updated_at,0,10)}}</span>
       </div>

       <div class="col-md-12">
            <p style="color:black;font-size:16px;" class="mb-4">{!!$data->isi!!}</p>
       </div>

      <div class="col-md-6">
        <a href="{{url('/form-full-sekolah')}}" class= "btn btn-outline-primary mt-2 " style="border-radius:10px!IMPORTANT;">Kembali<a>
      </div>

      </div>
     </div>
    </div>
@endforeach
<hr>
@endsection