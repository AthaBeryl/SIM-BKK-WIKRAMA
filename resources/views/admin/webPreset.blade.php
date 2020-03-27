@extends('layouts.header')
@section('color','m-menu__item--active')
@section('title','SIMBKK | Color Preset')
@section('content')
<!-- END: Left Aside -->
<div class="m-grid__item m-grid__item--fluid m-wrapper">
  <div class="m-subheader ">
    <div class="d-flex align-items-center">
      <div class="mr-auto">
        <h3 class="m-subheader__title ">Color Preset</h3>
       
      </div>
      <form action="{{route('presetColor.submit')}}" method="post">
      <button class="btn {{$preset->buttonClass}}" type="submit">Simpan Perubahan</button>
        <input type="hidden" name="method" value="post">
      @csrf
   
    </div>
  </div>
  
  <!-- Begin Body -->
  <!--Begin::Section-->
  <br>
  <div class="container">
  
    <div class="row">
        @forelse($clrPreset as $clr)
       <div class="col-xl-3">
        <div class="m-portlet m-portlet--mobile ">
          <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
              <div class="m-portlet__head-title">
              <input type="radio" name="preset" value="{{$clr->id}}"  @if($clr->status == "active") checked @endif >{{$clr->name}}
              </div>
            </div>

          </div>
          <div class="m-portlet__body">
           
            <span>Body Backround Color</span> 
            <div class="form-group m-form__group row">
            <input type="hidden" name="id" value="{{$clr->id}}" class="form-control m-input">    
            <input class="jscolor" class="form-control m-input" value="{{$clr->bodyBackround}}" name="bodyClr">
            </div>

            <span>Sidebar Color</span> 
            <div class="form-group m-form__group row">
            <input class="jscolor" class="form-control m-input" value="{{$clr->headerKiri}}" name="sidebarCLr">
            </div>

            <span>Active Icon Color</span> 
            <div class="form-group m-form__group row">
            <input class="jscolor" class="form-control m-input" value="{{$clr->iconActive}}" name="iconClr">
            </div>
          </div>
        </div> 
        </div>
        @empty
        </div>
        <h2><center>Tidak Ada Preset Yang Ditemukan</center></h2>
        <h3><center><a href="">Buat Preset</a></center></h3>
        @endforelse
        
        </form>
    </div>
    <span>Tidak Ada Preset yang anda suka ? <a href="">Buat Preset Baru</a></span>
  </div>
 
</div>
</div>
</div>
@include('layouts.footer')
@endsection
