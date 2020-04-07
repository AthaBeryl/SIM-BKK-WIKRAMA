@extends('layouts.landing')
@section('title','SMK WIKRAMA BOGOR')
@section('content')
<div class="row">
  <div class="col-md-12">
        <div class="site-section">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-8">
                      <div class="row">
                        <div class="col-12">
                          <div class="section-title">
                            {{-- <h2>Informasi Lowongan Kerja</h2> --}}
                          </div>
                        </div>
                      </div>
                        <div class="col-md-12">
                          <div class="post-entry-2 d-flex bg-light">
                            <div class="thumbnail zoom" style="border-radius:10px;background-image: url('landing/images/img_v_1.jpg')"></div>
                            <div class="contents">
                              <h2><a href="/form-single">Dibutuhkan Lowongan Pekerjaan Administrasi Perkantoran</a></h2>
                              <div class="post-meta">
                               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum illo aspernatur tempora natus eligendi similique? Cupiditate a repudiandae quam magnam, placeat, ipsa temporibus natus ab, maiores deleniti dolorum accusamus corporis!</p>
                                <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                              </div>
                            </div>
                          </div>
          
                          <div class="post-entry-2 d-flex">
                            <div class="thumbnail zoom" style="border-radius:10px;background-image: url('landing/images/img_v_2.jpg')"></div>
                            <div class="contents">
                              <h2><a href="#">Dibutuhkan Ahli Jaringan</a></h2>
                              <div class="post-meta">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates magni unde molestiae nisi sunt, quidem aperiam quis iure quasi et autem repellendus amet sequi, possimus praesentium dolores fuga facere quas!</p>
                                <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                              </div>
                            </div>
                          </div>
          
                          <div class="post-entry-2 d-flex">
                            <div class="thumbnail zoom" style="border-radius:10px;background-image: url('landing/images/img_v_3.jpg')"></div>
                            <div class="contents">
                              <h2><a href="#">dibutuhkan Chef Profesional </a></h2>
                              <div class="post-meta">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium, culpa excepturi incidunt dolore totam nesciunt consectetur odit, eaque obcaecati, quidem porro voluptates! Dolores, ipsum? Hic voluptatum sunt sapiente tenetur vel.</p>
                                <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                              </div>
                            </div>
                          </div>
                          {{-- More --}}
                          <div class="row">
                            <div class="col-lg-6">
                              <ul class="custom-pagination list-unstyled">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                              </ul>
                            </div>
                          </div>
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

@endsection