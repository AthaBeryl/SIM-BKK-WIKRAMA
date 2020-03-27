@extends('layouts.user_edit')
@section('title','Sistem Informasi.. | Input Data ')
@section('container')
<div class="m-content">
        <!-- Begin::Row -->
        <div class="row">
            <div class="col-xl-6">
              <div class="m-portlet">
                <div class="m-portlet__head">
                  <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                      <span class="m-portlet__head-icon">
                            <i class="la la-user-plus"></i>
                          </span>
                          <h3 class="m-portlet__head-text">
                            Data pribadi
                          </h3>
                        </div>
                      </div>
                    </div>
                    
                    <div class="m-portlet__body">
                      <div class="tab-content">
                        <div class="tab-pane active" id="indonesia_content">
                          <div class="row">
                            <div class="col-xl-10 offset-xl-1">
                              <div class="m-form__section m--margin-0">
                                <div class="m-form__heading">
                                  <h3 class="m-form__heading-title"> Data pribadi </h3>
                                </div>
                                <form class="m-form m-form--state m-form--label-align-left" action="/user/{{auth::user()->data->id}}" method="post">
                                  @method('patch')    
                                  @csrf
                                <!-- Body Input -->
                                <div class="form-group m-form__group row">
                                  {{-- Nis --}}
                                  <label class="form-control-label col-lg-3 mt-4">NIS</label>
                                  <div class="col-lg-9 mt-4">
                                  <input type="text" class="form-control m-input" name="username" placeholder="username" value="{{auth::user()->username}}">
                                  </div>
                                  {{-- Name --}}
                                  <label class="form-control-label col-lg-3 mt-4">Nama</label>
                                  <div class="col-lg-9 mt-4">
                                    <input type="text" class="form-control m-input" name="name" placeholder="name" value="{{auth::user()->name}}">
                                  </div>
                                  <label class="form-control-label col-lg-3 mt-4">Email</label>
                                  <div class="col-lg-9 mt-4">
                                  <input type="text" class="form-control m-input" name="email" placeholder="Email" value="{{auth::user()->email}}">
                                  </div>
                                  <label class="form-control-label col-lg-3 mt-4">No Telepon</label>
                                  <div class="col-lg-9 mt-4">
                                    <input type="text"  class="form-control m-input" name="telp" placeholder="No Telepon" value="{{auth::user()->data->telp}}">
                                    <!-- <span class="m-form__help">Silahkan Masukkan Nis Anda</span> -->
                                  </div>
                                <!-- JK -->
                                
                                  <label class="form-control-label col-lg-3 mt-4">Jenis Kelamin</label>
                                  <div class="col-lg-9 mt-4">
                                    <div class="m-radio-inline">
                                      @foreach ($kelamin as $k)
                                      <label class="m-radio m-radio--solid m-radio--primary">
                                        <input type="radio" name="jk" value="{{$k->jk}}" checked>{{$k->jk}}
                                        <span></span>
                                      </label>
                                      @endforeach
                                    </div>
                                  </div>    
                                  <!-- stat -->
                              <label class="form-control-label col-lg-3 mt-4">Status</label>
                              <div class="col-lg-9 mt-4">
                                <div class="m-form__control">
                                  <select class="form-control m-bootstrap-select m_selectpicker" name="status">
                                    @foreach ($status as $s)
                                    <option value="{{$s->status}}">{{$s->status}}</option>    
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                            </div>
                            <!-- Submit -->
                    <div class="m-portlet__foot m-portlet__foot--fit">
                      <div class="m-form__actions m-form__actions--solid">
                        <div class="row">
                          <div class="col-xl-10 offset-xl-1">
                            <div class="row">
                              <div class="col-lg-3 col-sm-12"></div>
                              <div class="col-lg-9">
                                <div class="input-group file-input">
                                  <button type="submit" class="btn btn-danger btn-sm m-btn--pill m-btn--air m-btn--wide">Submit</button>		
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                     <!-- End Submit -->
                  </div>
                </form>
                <!--Penutup Col-->
              </div>
          <!-- End ROw -->
        </div>
      <!-- Penutup Content -->
      </div>
      <!-- Penutup Fatal -->
    </div>
  </div>
  </div>
  <!-- Penutup fatal2 -->
</div>
<!-- Form2 -->
     <!-- Begin::Row -->
    
        <div class="col-xl-6">
              <div class="m-portlet">
                <div class="m-portlet__head">
                  <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                      <span class="m-portlet__head-icon">
                        <i class="la la-user-plus"></i>
                      </span>
                      <h3 class="m-portlet__head-text">
                         Data Akademik
                </h3>
                    </div>
                  </div>
                </div>
                
                <div class="m-portlet__body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="indonesia_content">
                      <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                          <div class="m-form__section m--margin-0">
                            <div class="m-form__heading">
                              <h3 class="m-form__heading-title"> Data Akademik </h3>
                            </div>
                            <!-- Body Input -->
                            <form class="m-form m-form--state m-form--label-align-left" action="/akademik/{{auth::user()->data->id}}" method="post">
                              @method('patch')    
                              @csrf
                            <!-- Nisn -->
                            <div class="form-group m-form__group row">
                              <label class="form-control-label col-lg-3 mt-4">NISN</label>
                              <div class="col-lg-9 mt-4">
                              <input type="text" class="form-control m-input" name="nisn" placeholder="NISN" value="{{auth::user()->data->nisn}}">
                                <!-- <span class="m-form__help">Silahkan Masukkan Nisn Anda</span> -->
                              </div>
                              <label class="form-control-label col-lg-3 mt-4">NIS</label>
                              <div class="col-lg-9 mt-4">
                                <input type="text" class="form-control m-input" name="username" placeholder="NIS" value="{{auth::user()->username}}">
                                <!-- <span class="m-form__help">Silahkan Masukkan Nis Anda</span> -->
                              </div>
                              <!-- jurusan -->
                              <label class="form-control-label col-lg-3 mt-4">Jurusan</label>
                          <div class="col-lg-9 mt-4">
                            <div class="m-form__control">
                              <select class="form-control m-bootstrap-select m_selectpicker" name="jurusan">
                                <option>----Pilih Jurusan-----</option>
                                @foreach ($jurusan as $j)
                                <option value="{{$j->short}}">{{$j->short}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <label class="form-control-label col-lg-3 mt-4">Rayon</label>
                          <div class="col-lg-9 mt-4">
                            <div class="m-form__control">
                              <select class="form-control m-bootstrap-select m_selectpicker" name="rayon">
                                <option>----Pilih Rayon-----</option>
                                @foreach ($rayon as $r)
                                <option value="{{$r->rayon}}">{{$r->rayon}}</option> 
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <label class="form-control-label col-lg-3 mt-4">Tahun Masuk</label>
                          <div class="col-lg-9 mt-4">
                            <input type="text" class="form-control m-input" name="masuk" placeholder="Tahun Masuk" value="{{auth::user()->data->masuk}}">
                            <!-- <span class="m-form__help">Silahkan Masukkan Nis Anda</span> -->
                          </div>
                          <label class="form-control-label col-lg-3 mt-4">Tahun Lulus</label>
                          <div class="col-lg-9 mt-4">
                            <input type="text" class="form-control m-input" name="keluar" placeholder="Tahun Lulus" value="{{auth::user()->data->lulus}}">
                            <!-- <span class="m-form__help">Silahkan Masukkan Nis Anda</span> -->
                          </div>
                          <!-- End -->
                        </div>
                        <!-- Submit -->
                <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions m-form__actions--solid">
                    <div class="row">
                      <div class="col-xl-10 offset-xl-1">
                        <div class="row">
                          <div class="col-lg-3 col-sm-12"></div>
                          <div class="col-lg-9">
                            <div class="input-group file-input">
                              <button type="submit" class="btn btn-danger btn-sm m-btn--pill m-btn--air m-btn--wide">Submit</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                 <!-- End Submit -->
              </div>
            </form>
            <!--Penutup Col-->
          </div>
  <!-- Penutup Content -->
  </div>
  <!-- Penutup Fatal -->
</div>
</div>
</div>
<!-- Penutup fatal2 -->
</div>
</div>
<!--Form3  -->
<div class="row">
<div class="col-md-12">
    <div class="m-portlet">
      <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
          <div class="m-portlet__head-title">
            <span class="m-portlet__head-icon">
              <i class="la la-user-plus"></i>
            </span>
            <h3 class="m-portlet__head-text">
               Data Non Akademik
      </h3>
          </div>
        </div>
      </div>
      
      <div class="m-portlet__body">
        <div class="tab-content">
          <div class="tab-pane active" id="indonesia_content">
            <div class="row">
              <div class="col-xl-10 offset-xl-1">
                <div class="m-form__section m--margin-0">
                  <div class="m-form__heading">
                    <h3 class="m-form__heading-title"> Data Non Akademik </h3>
                  </div>
                  <!-- Body Input -->
                  <form class="m-form m-form--state m-form--label-align-left" action="/nonakademik/{{auth::user()->data->id}}" method="post">
                    @method('patch')    
                    @csrf
                  <!-- Nisn -->
                  <div class="form-group m-form__group row">
                    <label class="form-control-label col-lg-3 mt-4">Nama Instansi</label>
                    <div class="col-lg-9 mt-4">
                      <input type="text" class="form-control m-input" placeholder="tempat kuliah,kerja,wirausaha" value="{{auth::user()->data->instansi}}" name="instansi">
                      <!-- <span class="m-form__help">Silahkan Masukkan Nisn Anda</span> -->
                    </div>
                    <label class="form-control-label col-lg-3 mt-4">Divisi / Bagian / Jurusan</label>
                    <div class="col-lg-9 mt-4">
                      <input type="text" class="form-control m-input" placeholder="Divisi / Bagian / Jurusan" value="{{auth::user()->data->bagian}}" name="bagian">
                      <!-- <span class="m-form__help">Silahkan Masukkan Nis Anda</span> -->
                    </div>
                    <label class="form-control-label col-lg-3 mt-4">Durasi Kontrak Kerja</label>
                    <div class="col-lg-9 mt-4">
                      <input type="text" class="form-control m-input" placeholder="Durasi Kontrak Kerja" value="{{auth::user()->data->kontrak}}" name="kontrak">
                      <!-- <span class="m-form__help">Silahkan Masukkan Nis Anda</span> -->
                    </div>
                    <label class="form-control-label col-lg-3 mt-4">Penghasilan Perbulan</label>
                    <div class="col-lg-9 mt-4">
                      <input type="text" class="form-control m-input" placeholder="Penghasilan Perbulan" value="{{auth::user()->data->penghasilan}}" name="penghasilan">
                      <!-- <span class="m-form__help">Silahkan Masukkan Nis Anda</span> -->
                    </div>
              </div>
              <!-- Submit -->
      <div class="m-portlet__foot m-portlet__foot--fit">
        <div class="m-form__actions m-form__actions--solid">
          <div class="row">
            <div class="col-xl-10 offset-xl-1">
              <div class="row">
                <div class="col-lg-3 col-sm-12"></div>
                <div class="col-lg-9">
                  <div class="input-group file-input">
                    <button type="submit" class="btn btn-danger btn-sm m-btn--pill m-btn--air m-btn--wide">Submit</button>		
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
       <!-- End Submit -->
    </div>
  </form>
  <!--Penutup Col-->
</div>
<!-- Penutup Content -->
</div>
<!-- Penutup Fatal -->
</div>
</div>
</div>
<!-- Penutup fatal2 -->
</div>
</div>
{{-- Change Password --}}
<div class="col-md-12"> 
    <form class="m-form m-form--state m-form--label-align-left">
      <div class="m-portlet">
        <div class="m-portlet__head">
          <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
              <span class="m-portlet__head-icon">
                <i class="la la-user-plus"></i>
              </span>
              <h3 class="m-portlet__head-text">
                 Ubah Password
        </h3>
            </div>
          </div>
        </div>
        
        <div class="m-portlet__body">
          <div class="tab-content">
            <div class="tab-pane active" id="indonesia_content">
              <div class="row">
                <div class="col-xl-10 offset-xl-1">
                  <div class="m-form__section m--margin-0">
                    <div class="m-form__heading">
                      <h3 class="m-form__heading-title"> Ubah Password </h3>
                    </div>
                    <!-- Body Input -->
                    <!-- Nisn -->
                    <div class="form-group m-form__group row">
                      <label class="form-control-label col-lg-3 mt-4">Password Lama</label>
                      <div class="col-lg-9 mt-4">
                        <input type="text" class="form-control m-input" placeholder="Password Lama">
                        <!-- <span class="m-form__help">Silahkan Masukkan Nisn Anda</span> -->
                      </div>
                      <label class="form-control-label col-lg-3 mt-4">Password Baru</label>
                      <div class="col-lg-9 mt-4">
                        <input type="text" class="form-control m-input" placeholder="Password Baru">
                        <!-- <span class="m-form__help">Silahkan Masukkan Nis Anda</span> -->
                      </div>
                </div>
                <!-- Submit -->
        <div class="m-portlet__foot m-portlet__foot--fit">
          <div class="m-form__actions m-form__actions--solid">
            <div class="row">
              <div class="col-xl-10 offset-xl-1">
                <div class="row">
                  <div class="col-lg-3 col-sm-12"></div>
                  <div class="col-lg-9">
                    <div class="input-group file-input">
                      <button type="submit" class="btn btn-danger btn-sm m-btn--pill m-btn--air m-btn--wide">Submit</button>		
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
         <!-- End Submit -->
      </div>
    </form>
    <!--Penutup Col-->
  </div>
{{-- End Change Password --}}
<!-- End Form -->
      <!-- begin::Footer -->
      <!-- <footer class="m-grid__item	m-footer ">
          <div class="m-container m-container--fluid m-container--full-height m-page__container">
              <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                  <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
                      <span class="m-footer__copyright">
                          2019 &copy; Devloped by <a href="https://www.4visionmedia.com" class="m-link">4 Vision Media</a>
                      </span>
                  </div>
                  <div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
                      <ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
                          <li class="m-nav__item">
                              <a href="#" class="m-nav__link">
                                  <span class="m-nav__link-text">About</span>
                              </a>
                          </li>
                          <li class="m-nav__item">
                              <a href="#" class="m-nav__link">
                                  <span class="m-nav__link-text">Privacy</span>
                              </a>
                          </li>
                          <li class="m-nav__item">
                              <a href="#" class="m-nav__link">
                                  <span class="m-nav__link-text">T&C</span>
                              </a>
                          </li>
                          <li class="m-nav__item">
                              <a href="#" class="m-nav__link">
                                  <span class="m-nav__link-text">Purchase</span>
                              </a>
                          </li>
                          <li class="m-nav__item m-nav__item">
                              <a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
                                  <i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </footer> -->

      <!-- end::Footer -->
  <!-- </div> -->

@endsection