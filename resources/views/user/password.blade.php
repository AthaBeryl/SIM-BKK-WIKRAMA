@extends('layouts.header')
@section('dashboard','m-menu__item--active')
@section('title','SIMBKK | My Profiles')
@section('content')
    <div class="container">
        <br>
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Update Sukses</strong> data anda berhasil di update
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
        @endif
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
                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <label for="Username"class="col-md-4 control-label">Username</label>
        <input required autofocus type="text" class="form-control" id="username" name="username" placeholder="Username" value="{{auth::user()->username}}">
        <span class="help-block">{{ $errors->first('username') }}</span>
    </div>

    <div class="form-group{{ $errors->has('current_password') ? ' has-error' : '' }}">
            <label for="current_password" class="col-md-4 control-label">Password Lama</label>
               
                    <input id="current_password" type="password" class="form-control" name="current_password" autofocus>
                    <span class="help-block">{{ $errors->first('current_password') }}</span>
               
            </div>

            <h5>Ganti Password</h5>
            <hr>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                 <label for="password" class="col-md-4 control-label">Password Baru</label>   
                  <div>
                     <input id="password" type="password" class="form-control" name="password">
                     <span class="help-block">{{ $errors->first('password') }}</span>
                 </div>
             </div>

             <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password_confirmation" class="col-md-4 control-label">Konfrimasi Password Baru</label>
                            <div>
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
                                <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
                            </div>
                        </div>
        </div>


    </div>
    <button class="btn {{$preset->buttonClass}}" style="float: right">Update</button>
</form>
</div>
</div>

@include('layouts.footer')
@endsection

