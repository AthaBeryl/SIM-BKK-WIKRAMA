@extends('layouts.header')
@section('dashboard','m-menu__item--active')
@section('title','SIMBKK | My Profiles')
@section('content')
    <div class="container">
        <br>
    <form action="{{route('edit.profiles')}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="method" value="post">
        @csrf
        <div class="row">
            <div class="col-md-4">
                    <label for="foto">Foto Profile</label>
                <div class="form-group">

                <img style="object-fit: cover; width: 230px ; height: 230px"
                src="{{asset('image/profiles/'.auth::user()->foto)}}"/>
              </div>
              <input type="file" name="foto" id="">
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="Username">Username</label>
        <input required autofocus type="text" class="form-control" id="Username" name="username" placeholder="Username" value="{{auth::user()->username}}">
    </div>

    <div class="form-group">
        <label for="password">Password Lama</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password Lama">
    </div>

            <div class="form-group">
                <label for="password">Password Baru</label>
                <input type="password" class="form-control" id="password" name="newPassword" placeholder="Password Baru">
            </div>

            <div class="form-group">
                <label for="password">  konfirmasi Password Baru</label>
                <input  type="password" class="form-control" id="password" name="conPassword" placeholder=" konfirmasi Password Baru">
            </div>
        </div>


    </div>
    <button class="btn {{$preset->buttonClass}}" style="float: right">Update</button>
</form>
</div>
</div>

@include('layouts.footer')
@endsection

