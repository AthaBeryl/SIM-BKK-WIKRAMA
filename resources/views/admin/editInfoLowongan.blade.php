@extends('layouts.header')
@section('infolowongan','m-menu__item--active')
@section('title','SIMBKK | Edit Info Lowongan')
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
        <a href="/infolowongan"><div class="btn {{$preset->buttonClass}}" >Kembali</div></a>
      </div>

      <div class="col-xl-12">
        <div class="m-portlet m-portlet--mobile ">
          <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
              <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                  Info Lowongan
                </h3>
              </div>
            </div>

          </div>
          <div class="m-portlet__body">
          @foreach($data as $d)
          <form method="post" action="/editinfolowongan/update;{{$d->id}}" enctype="multipart/form-data" class="form-horizontal">
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
                <img src="/image/infolowongan/{{$d->foto}}" id="previewHolder" alt=" Preview" width="150px" height="150px"/>
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
<script src="https://cdn.tiny.cloud/1/6qed0blc4b73g5p5uwh7acq07ay1sli0skekw9shc6wz2sbc/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
   tinymce.init({
  selector: 'textarea',
  height: 500,
  plugins: [
  'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
  'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
  'table emoticons template paste help'
],
toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
  content_css: '//www.tiny.cloud/css/codepen.min.css'
});
  </script>
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
