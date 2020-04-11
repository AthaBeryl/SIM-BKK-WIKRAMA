@extends('layouts.header')
@section('color','m-menu__item--active')
@section('title','SIMBKK |  Website Configuration')
@section('content')
<!-- END: Left Aside -->
<div class="m-grid__item m-grid__item--fluid m-wrapper">
  <div class="m-subheader ">
    <div class="d-flex align-items-center">
      <div class="mr-auto">
        <h3 class="m-subheader__title ">Web Config</h3>
       
      </div>
      <form action="{{route('presetColor.submit')}}" method="post">
        <input type="hidden" name="method" value="post">
      @csrf
   
    </div>
  </div>
  
  <!-- Begin Body -->
  <!--Begin::Section-->
  <br>
  <div class="container">
  
    <div class="row">
    
       <div class="col-xl-3">
        <div class="m-portlet m-portlet--mobile ">
          <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
             <h5>Gambar Frontend</h5>
          <button class="btn {{$preset->buttonClass}}">Update</button>
            </div>

          </div>
          <div class="m-portlet__body">
            
            <img src="{{asset('landing/images/bg1.jpg')}}" style="object-fit:cover;width:200px;height:150px">
           <input type="file" name="" id="">
            </div>
    
          </div>

        </div> 
    
      
        <div class="col-xl-3">
        <div class="m-portlet m-portlet--mobile ">
          <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
              <div class="m-portlet__head-title">
              <h5>Gambar Logo Dashboard</h5>
              <button class="btn {{$preset->buttonClass}}">Update</button>
              </div>
            </div>

          </div>
          <div class="m-portlet__body">
          <img src="{{asset('landing/images/bg1.jpg')}}" style="object-fit:cover;width:200px;height:200px">
          <input type="file" name="" id="">

          </div>
        </div> 
        </div>

        <div class="col-xl-5">
        <div class="m-portlet m-portlet--mobile ">
          <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
              <div class="m-portlet__head-title">
              <h5>Gambar Login </h5>
              <button class="btn {{$preset->buttonClass}}">Update</button>
              </div>
            </div>

          </div>
          <div class="m-portlet__body">
          <img src="{{asset('landing/images/bg1.jpg')}}" style="object-fit:cover;width:70px;height:70px;">
          <img src="{{asset('landing/images/bg1.jpg')}}" style="object-fit:cover;width:70px;height:70px">
          <img src="{{asset('landing/images/bg1.jpg')}}" style="object-fit:cover;width:70px;height:70px">
          <img src="{{asset('landing/images/bg1.jpg')}}" style="object-fit:cover;width:70px;height:70px">
          <img src="{{asset('landing/images/bg1.jpg')}}" style="object-fit:cover;width:70px;height:70px">
          <input type="file" name="" id="">

          </div>
        </div> 
        </div>

        </div>
        </form>

        
    </div>
  </div>

  

  
 
</div>
</div>


</div>
@include('layouts.footer')
@endsection
