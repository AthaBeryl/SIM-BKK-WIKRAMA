@extends('layouts.loyout')
@section('title','Sistem Informasi Bursa Kerja Khusus')
@section('container')
        <div class="limiter">
                <div class="container-login100">
                    <div class="wrap-login100">
                    <form method="POST" action="{{route('login')}}" class="login100-form validate-form">
                        @csrf
                            <span class="login100-form-title p-b-43">
                                Sistem Informasi
                                <p style="font-size:20px;"> Bursa Kerja Khusus</p>
                            </span>
                            <div class="wrap-input100 validate-input">
                                <input id="login" type="text"
                                       class="input100{{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}"
                                       name="login" value="{{ old('username') ?: old('email') }}" required autofocus>
                                <span class="focus-input100"></span>
                            <span id="username" class="label-input100">Username</span>
                            @if ($errors->has('username') || $errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                            </span>
                            @endif
                            </div>

                            <div class="wrap-input100 validate-input" data-validate="Password is required">
                                <input id="password" type="password" class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                <span class="focus-input100"></span>
                                <span class="label-input100">Password</span>
                                @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="flex-sb-m w-full p-t-3 p-b-32">
                                <div class="contact100-form-checkbox">
                                    <input class="input-checkbox100" id="remember" type="checkbox" name="remember-me"{{old('remember') ? 'checked' : ''}}>
                                    <label class="label-checkbox100" for="remember">
                                        Remember me
                                    </label>
                                </div>

                                <div>
                                </div>
                            </div>


                            <div class="container-login100-form-btn">
                                <button type="submit"class="login100-form-btn">
                                    Login
                                </button>
                            </div>
                            <a href="/" class="container-login100-form-btn btn btn-outline-primary mt-4">Back</a>
                        </form>
        {{-- Carrousel --}}
                                    <div id="carouselExampleControls" class="login100-more carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="image/config/login/login1.jpg" class="d-block w-100" alt="..." style="height: 100vh ; object-fit: cover">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="image/config/login/login2.jpg" class="d-block w-100" alt="..."style="height: 100vh ; object-fit: cover">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="image/config/login/login3.jpg" class="d-block w-100" alt="img not found"style="height: 100vh ; object-fit: cover">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="image/config/login/login4.jpg" class="d-block w-100" alt="img not found"style="height: 100vh ; object-fit: cover">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="image/config/login/login5.jpg" class="d-block w-100" alt="img not found"style="height: 100vh ; object-fit: cover">
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                              {{-- END Carousel --}}
                </div>
            </div>
@endsection
