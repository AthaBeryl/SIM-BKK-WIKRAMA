<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Resume {{$alumni->name}}</title>
    <meta name="description" content="SMK WIKRAMA BOGOR"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('cv/css/aos.css')}}" rel="stylesheet">
    <link href="{{asset('cv/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('cv/styles/main.css')}}" rel="stylesheet">
  </head>
  <body id="top">
    <header>
      <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
          <div class="container">
            <div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip">{{$alumni->name}}'s Resume</a>
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#skill">Skills</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#experience">Experience</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <div class="page-content">
      <div>
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-image: url({{asset('cv/images/cc-bg-1.jpg')}});"></div>
      <div class="container">
        <div class="content-center">
          <div class="cc-profile-image"><a href="#"><img src="{{asset('image/profiles/'.$user->foto)}}" alt="Image"/></a></div>
          <div class="h2 title">{{$alumni->name}}</div>

          <p class="category text-white">@if($alumni->status_id == 4){{$alumni->jurusan}}@elseif($alumni->status_id == 1 || $alumni->status_id == 2){{$status->jabatan}}@else Wirausahan @endif</p><a class="btn btn-primary smooth-scroll mr-2" href="#contact" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Contact Me</a><a class="btn btn-primary" href="{{route('cv.download',$alumni->user_id)}}" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Download CV</a>
        </div>
      </div>
      <div class="section">
        <div class="container">
        <div class="button-container"><a class="btn btn-default btn-round btn-lg btn-icon" href="mailto:{{$alumni->email}}" rel="tooltip" title="Contact me on Email"><i class="fa fa-envelope"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="tel:{{$alumni->telp}}" rel="tooltip" title="Contact me on phone"><i class="fa fa-phone"></i></a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="about">
  <div class="container">
    <div class="card" data-aos="fade-up" data-aos-offset="10">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">About</div>
          <p>Hello! Perkenalkan Saya {{$alumni->name}}. Seorang {{$status->jabatan}}</p>
            {{-- <p>Saya dapat <a href="https://templateflip.com/templates/creative-cv/" target="_blank">Learn More</a></p> --}}
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">Basic Information</div>
            <div class="row">
              <div class="col-sm-4"><strong class="text-uppercase">Jenis Kelamin:</strong></div>
              <div class="col-sm-8">{{$alumni->jk}}</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
              <div class="col-sm-8">{{$alumni->email}}</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
              <div class="col-sm-8">{{$alumni->telp}}</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Address:</strong></div>
              <div class="col-sm-8">{{$alumni->alamat}}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- <div class="section" id="skill">
  <div class="container">
    <div class="h4 text-center mb-4 title">Professional Skills</div>
    <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <div class="card-body">
        <div class="row">

          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">HTML</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div><span class="progress-value">80%</span>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>
</div> -->
<!-- <div class="section" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-md-6 ml-auto mr-auto">
        <div class="h4 text-center mb-4 title">Portfolio</div>
        <div class="nav-align-center">
          <ul class="nav nav-pills nav-pills-primary" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#web-development" role="tablist"><i class="fa fa-laptop" aria-hidden="true"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#graphic-design" role="tablist"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Photography" role="tablist"><i class="fa fa-camera" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="tab-content gallery mt-5">
      <div class="tab-pane active" id="web-development">
        <div class="ml-auto mr-auto">
          <div class="row">
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#web-development">
                  <figure class="cc-effect"><img src="images/project-1.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Recent Project</div>
                      <p>Web Development</p>
                    </figcaption>
                  </figure></a></div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#web-development">
                  <figure class="cc-effect"><img src="images/project-2.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Startup Project</div>
                      <p>Web Development</p>
                    </figcaption>
                  </figure></a></div>
            </div>
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#web-development">
                  <figure class="cc-effect"><img src="images/project-3.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Food Order Project</div>
                      <p>Web Development</p>
                    </figcaption>
                  </figure></a></div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#web-development">
                  <figure class="cc-effect"><img src="images/project-4.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Web Advertising Project</div>
                      <p>Web Development</p>
                    </figcaption>
                  </figure></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="graphic-design" role="tabpanel">
        <div class="ml-auto mr-auto">
          <div class="row">
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#graphic-design">
                  <figure class="cc-effect"><img src="images/graphic-design-1.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Triangle Pattern</div>
                      <p>Graphic Design</p>
                    </figcaption>
                  </figure></a></div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#graphic-design">
                  <figure class="cc-effect"><img src="images/graphic-design-2.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Abstract Umbrella</div>
                      <p>Graphic Design</p>
                    </figcaption>
                  </figure></a></div>
            </div>
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#graphic-design">
                  <figure class="cc-effect"><img src="images/graphic-design-3.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Cube Surface Texture</div>
                      <p>Graphic Design</p>
                    </figcaption>
                  </figure></a></div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#graphic-design">
                  <figure class="cc-effect"><img src="images/graphic-design-4.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Abstract Line</div>
                      <p>Graphic Design</p>
                    </figcaption>
                  </figure></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="Photography" role="tabpanel">
        <div class="ml-auto mr-auto">
          <div class="row">
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#Photography">
                  <figure class="cc-effect"><img src="images/photography-1.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Photoshoot</div>
                      <p>Photography</p>
                    </figcaption>
                  </figure></a></div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#Photography">
                  <figure class="cc-effect"><img src="images/photography-3.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Wedding Photoshoot</div>
                      <p>Photography</p>
                    </figcaption>
                  </figure></a></div>
            </div>
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#Photography">
                  <figure class="cc-effect"><img src="images/photography-2.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Beach Photoshoot</div>
                      <p>Photography</p>
                    </figcaption>
                  </figure></a></div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#Photography">
                  <figure class="cc-effect"><img src="images/photography-4.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Nature Photoshoot</div>
                      <p>Photography</p>
                    </figcaption>
                  </figure></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
<div class="section" id="experience">
  <div class="container cc-experience">
    <div class="h4 text-center mb-4 title">Work Experience</div>
    @foreach($kerja as $k)
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-experience-header">
            <p>{{$k->created_at->year}} - {{$k->updated_at->year}}</p>
            <div class="h5">{{$k->jabatan}}</div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5">{{$k->jabatan}}</div>
            <p class="category">{{$k->nama}}</p>
            <p>Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis, tristique sapien taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend primis lectus quisque cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium molestie ultricies sollicitudin dui.</p>
          </div>
        </div>
      </div>
    </div>
    @endforeach

  </div>
</div>
<div class="section">
  <div class="container cc-education">
    <div class="h4 text-center mb-4 title">Education</div>
    <div class="card">
        <div class="row">
          <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
            <div class="card-body cc-education-header">
              <p>{{$alumni->masuk}} - {{$alumni->lulus}}</p>
              <div class="h5">{{$alumni->jurusan}}</div>
            </div>
          </div>
          <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
            <div class="card-body">
            <div class="h5">Alumni Jurusan {{$alumni->jurusan}}</div>
              <p class="category">SMK WIKRAMA BOGOR</p>
            <p>Saya telah lulus dari SMK WIKRAMA BOGOR pada tahun {{$alumni->tahun}},pada paket keahlian {{$alumni->jurusan}}</p>
            </div>
          </div>
        </div>
      </div>
    @foreach($kuliah as $k)
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-education-header">
            <p>{{$k->created_at->year}} - {{$k->updated_at->year}}</p>
            <div class="h5">{{$k->jabatan}}</div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5">{{$k->durasi_kontrak}} {{$k->jabatan}}</div>
            <p class="category">{{$k->nama}}</p>
            <p>Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis, tristique sapien taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend primis lectus quisque cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium molestie ultricies sollicitudin dui.</p>
          </div>
        </div>
      </div>
    </div>
@endforeach

  </div>
</div>

<div class="section" id="contact">
  <div class="cc-contact-information" style="background-image: url({{asset('cv/images/staticmap.png')}});">
    <div class="container">
      <div class="cc-contact">
        <div class="row">
          <div class="col-md-9">
            <div class="card mb-0" data-aos="zoom-in">
              <div class="h4 text-center title">Contact Me</div>
              <div class="row">
                <div class="col-md-6">
                  <div class="card-body">
                    <form action="https://formspree.io/{{$alumni->email}}" method="POST">
                      <div class="p pb-3"><strong>Feel free to contact me </strong></div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                            <input class="form-control" type="text" name="name" placeholder="Name" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                            <input class="form-control" type="text" name="Subject" placeholder="Subject" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input class="form-control" type="email" name="_replyto" placeholder="E-mail" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Your Message" required="required"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <button class="btn btn-primary" type="submit">Send</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <p class="mb-0"><strong>Alamat </strong></p>
                    <p class="pb-2">{{$alumni->alamat}}</p>
                    <p class="mb-0"><strong>Telepon</strong></p>
                    <p class="pb-2">{{$alumni->telp}}</p>
                    <p class="mb-0"><strong>Email</strong></p>
                    <p>{{$alumni->email}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div></div>
    </div>
    <footer class="footer">
    <div class="container text-center"><a class="cc-twitter btn btn-link " href="tel:{{$alumni->telp}}"><i class="fa fa-phone fa-2x " aria-hidden="true"></i></a><a class="cc-google-plus btn btn-link"  href="mailto:{{$alumni->email}}"><i class="fa fa-envelope fa-2x " aria-hidden="true"></i></a></div>
      <div class="h4 title text-center">{{$alumni->name}}</div>
    </footer>
    <script src="{{asset('cv/js/core/jquery.3.2.1.min.js')}}"></script>
    <script src="{{asset('cv/js/core/popper.min.js')}}"></script>
    <script src="{{asset('cv/js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('cv/js/now-ui-kit.js?v=1.1.0')}}"></script>
    <script src="{{asset('cv/js/aos.js')}}"></script>
    <script src="{{asset('cv/scripts/main.js')}}"></script>
  </body>
</html>
