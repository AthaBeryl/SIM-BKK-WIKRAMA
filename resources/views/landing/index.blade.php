@extends('layouts.landing')
@section('title','SMK WIKRAMA BOGOR')
@section('content')
  <style>
    @media screen (max-width:480px;){
  .tales{
    width:120%;
    height: 500px;
  }
    }
    .tales{
    width:120%;
    height: 500px;
  }
  .hover-login:hover{
    background-color: green;
  }
  </style>
<!-- Jumbotron -->
<div class="card card-image" style="background-image: url(landing/images/bg1.jpg);">
  <div class="text-white text-center rgba-stylish-strong py-5 px-4">
    <div class="py-5">

      <!-- Content -->
      <h5 class="h5 text-black">SMK WIKRAMA BOGOR</h5>
      <h2 class="card-title text-black h2 my-4 py-2">Sistem Informasi Bursa Kerja Khusus</h2>
      <a class="btn peach-gradient hover-login">Login</a>

    </div>
  </div>
</div>
<!-- Jumbotron -->
  {{-- Informasi Loker --}}
      <div class="row">
          <div class="col-md-12">
                <div class="site-section">
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-8">
                              <div class="row">
                                <div class="col-12">
                                  <div class="section-title">
                                    <h2>Informasi Lowongan Kerja</h2>
                                  </div>
                                </div>
                              </div>
                                <div class="col-md-12">
                                  <div class="post-entry-2 d-flex bg-light">
                                    <div class="thumbnail zoom" style="border-radius:10px;background-image: url('landing/images/img_v_1.jpg')"></div>
                                    <div class="contents">
                                      <h2><a href="blog-single.html">Dibutuhkan Lowongan Pekerjaan Administrasi Perkantoran</a></h2>
                                      <div class="post-meta">
                                       <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum illo aspernatur tempora natus eligendi similique? Cupiditate a repudiandae quam magnam, placeat, ipsa temporibus natus ab, maiores deleniti dolorum accusamus corporis!</p>
                                        <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                      </div>
                                    </div>
                                  </div>
                  
                                  <div class="post-entry-2 d-flex">
                                    <div class="thumbnail zoom" style="border-radius:10px;background-image: url('landing/images/img_v_2.jpg')"></div>
                                    <div class="contents">
                                      <h2><a href="blog-single.html">Dibutuhkan Ahli Jaringan</a></h2>
                                      <div class="post-meta">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates magni unde molestiae nisi sunt, quidem aperiam quis iure quasi et autem repellendus amet sequi, possimus praesentium dolores fuga facere quas!</p>
                                        <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                      </div>
                                    </div>
                                  </div>
                  
                                  <div class="post-entry-2 d-flex">
                                    <div class="thumbnail zoom" style="border-radius:10px;background-image: url('landing/images/img_v_3.jpg')"></div>
                                    <div class="contents">
                                      <h2><a href="blog-single.html">dibutuhkan Chef Profesional </a></h2>
                                      <div class="post-meta">
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium, culpa excepturi incidunt dolore totam nesciunt consectetur odit, eaque obcaecati, quidem porro voluptates! Dolores, ipsum? Hic voluptatum sunt sapiente tenetur vel.</p>
                                        <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                      </div>
                                    </div>
                                  </div>
                                  {{-- More --}}
                                  <p>
                                        <a href="#" class="more">Lainnya<span class="icon-keyboard_arrow_right"></span></a>
                                      </p>
                                  {{-- End More --}}
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- END section -->
          </div>
      </div>
  {{-- End Loker --}}
  {{-- Informasi sekolah --}}
     <div class="container" style="margin-bottom:200px;">
        <div class="section-title">
            <h2>Informasi Sekolah</h2>
          </div>
       <div class="row">
         <div class="col-md-6">
           <div class="card" style="width: 18rem;">
          <div class="row">
            <div class="col-md-12">
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100 " src="image/profiles/default.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="image/profiles/default.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100"  src="image/profiles/default.png" alt="Third slide">
                    </div>
                  </div>
                </div>
            </div>
           </div>
               <div class="card-body">
                 <h5 class="card-title">Card title</h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 <a href="#" class="btn btn-primary">Go somewhere</a>
               </div>
             </div>
         </div>
       </div>
         </div>
       </div>
     </div>
  {{-- End Informasi Sekolah --}}
  <!-- carrousel of message -->
  <div class="container">
    <div class="section-title">
      <h2 style="font-size:32px;">Pesan</h2>
    </div>
      <div class="owl-carousel">
        {{-- cards --}}
        <div class="card" style="width: 18rem;">
          <div class="card-header">
            header
          </div>
            <img src="image/profiles/default.png" alt="image-alumni-copyright">
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus, ducimus suscipit perferendis nostrum consectetur temporibus, qui laborum cum modi similique ipsum iusto saepe dicta iure recusandae. Asperiores recusandae dolor animi.</p>
          </div>
          <div class="blockquote-footer card-footer text-center ">
            footer
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <div class="card-header">
            header
          </div>
          <img src="image/profiles/default.png" class="image-rounded" alt="image-alumni-copyright">
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, rem consequuntur praesentium ducimus minima animi doloremque sed minus aliquam debitis sequi commodi distinctio omnis non doloribus, veritatis ex, eum quo!
            </p>
          </div>
          <div class="blockquote-footer card-footer text-center ">
            footer
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <div class="card-header">
            header
          </div>
          <img src="image/profiles/default.png" class="image-rounded" alt="image-alumni-copyright">
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat vitae quisquam ipsam repellat, soluta similique iure. Incidunt porro perspiciatis, optio a itaque ut eveniet natus nisi eligendi sed velit quisquam?</p>
          </div>
          <div class="blockquote-footer card-footer text-center ">
            footer
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <div class="card-header">
            header
          </div>
          <img src="image/profiles/default.png" class="image-rounded" alt="image-alumni-copyright">
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos aliquid saepe accusantium deleniti! Nulla, velit, architecto assumenda, vitae praesentium accusantium quidem officiis inventore ipsum quos itaque temporibus facilis eum delectus?</p>
          </div>
          <div class="blockquote-footer card-footer text-center ">
            footer
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <div class="card-header">
            header
          </div>
          <img src="image/profiles/default.png" class="image-rounded" alt="image-alumni-copyright">
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente laudantium impedit nam minus? Magnam natus illo architecto id corrupti, iure dolorem, quas veniam quis iusto distinctio nesciunt aut. Quos, temporibus.</p>
          </div>
          <div class="blockquote-footer card-footer text-center ">
            footer
          </div>
        </div>
        {{-- End cards --}} 
      </div>
    </div>
  {{-- End carrousel Message --}}
@endsection