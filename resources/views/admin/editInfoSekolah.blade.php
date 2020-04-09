@extends('layouts.header')
@section('infosekolah','m-menu__item--active')
@section('title','SIMBKK | Edit Info Sekolah')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- END: Left Aside -->
<div class="m-grid__item m-grid__item--fluid m-wrapper">
  <div class="m-subheader ">
    <div class="d-flex align-items-center">
      <div class="mr-auto">
        <!-- <h3 class="m-subheader__title ">Input Info Sekolah</h3> -->
      </div>
    </div>
  </div>
  <!-- Begin Body -->
  <!--Begin::Section-->

  <div class="container">
    <div class="row">
    <div class="col-xl-12 mb-4">
        <a href="/infosekolah"><div class="btn {{$preset->buttonClass}}" >Kembali</div></a>
      </div>

      <div class="col-xl-12">
        <div class="m-portlet m-portlet--mobile ">
          <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
              <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                  Info Sekolah
                </h3>
              </div>
            </div>

          </div>
          <div class="m-portlet__body">
          @foreach($data as $d)
          <form method="post" action="/editinfosekolah/update;{{$d->id}}" enctype="multipart/form-data" class="form-horizontal">
          {{ csrf_field() }}
            <div class="form-group m-form__group row">
              <input type="hidden" name="id" id="id" class="form-control m-input">
              <h5><label id="isi" class="form-control-label col-lg-3 mt-4">Judul</label></h5>
              <div class="col-lg-12">
                <input type="text" name="judul" required id="judul" value="{{$d->judul}}" class="form-control m-input">
              </div>

              <h5><label id="isi" class="form-control-label col-lg-3 mt-4">Isi</label></h5>
              <div class="col-lg-12">
                <textarea name="isi" id="isi" required class="form-control" cols="30" rows="10">{{$d->isi}}</textarea>
              </div>

              <h5><label id="foto" class="form-control-label col-lg-3 mt-4">Foto</label></h5>
              <div class="col-lg-12 mt-2 mb-4">
                <img src="/image/infosekolah/{{$d->foto}}" id="previewHolder" alt=" Preview" width="150px" height="150px"/>
              </div>
              <div class="col-lg-12">
                <input type="file" name="foto" id="filePhoto" class="form-control m-input">
              </div>
              <div class="col-lg-12 mt-4">
                <button type="input" class="btn {{$preset->buttonClass}}">Save Data</button>
              </div>
            </div>
          </form>
          @endforeach
          </div>
        </div>
      </div>

    </div>
  </div>

    <!--End::Section-->
  </div>
</div>
</div>
<script>
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#previewHolder').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#filePhoto").change(function() {
  readURL(this);
});
</script>
@include('layouts.footer')
@endsection
