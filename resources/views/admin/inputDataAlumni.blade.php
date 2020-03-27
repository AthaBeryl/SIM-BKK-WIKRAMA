@include('layouts.footer')@extends('layouts.header')
@section('dataAlumni','m-menu__item--active')
@section('title','SIMBKK | Data Alumni')
@section('content')

        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
          <!-- BEGIN: Subheader -->
          <div class="m-subheader ">
            <div class="d-flex align-items-center">
              <div class="mr-auto">
                <h3 class="m-subheader__title ">Data Alumni</h3>
              </div>
              <div>
                <span
                  class="m-subheader__daterange"
                  id="m_dashboard_daterangepicker"
                >
                  <span class="m-subheader__daterange-label">
                    <span class="m-subheader__daterange-title"></span>
                    <span
                      class="m-subheader__daterange-date m--font-brand"
                    ></span>
                  </span>
                  <a
                    href="#"
                    class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill"
                  >
                    <i class="la la-angle-down"></i>
                  </a>
                </span>
              </div>
            </div>
          </div>
            <!-- end:: Page -->
    <!-- Begin Body -->
    
           <!--Begin::Section-->
           <br>
           <div class="container">
           <div class="row">
               <div class="col-xl-12 mb-4">
                <div class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">Masukkan Data Alumni</div>
                </div>

                <div class="col-xl-12">
                  <div class="m-portlet m-portlet--mobile ">
                    <div class="m-portlet__head">
                      <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                          <h3 class="m-portlet__head-text">
                            Data Alumni
                          </h3>
                        </div>
                      </div>

                      <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                          <li class="m-portlet__nav-item">
                            <div
                              class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                              m-dropdown-toggle="hover"
                              aria-expanded="true"
                            >
                              <a
                                href="#"
                                class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle"
                              >
                                <i class="la la-ellipsis-h m--font-brand"></i>
                              </a>
                              <div class="m-dropdown__wrapper">
                                <span
                                  class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"
                                ></span>
                                <div class="m-dropdown__inner">
                                  <div class="m-dropdown__body">
                                    <div class="m-dropdown__content">
                                      <ul class="m-nav">
                                        <li
                                          class="m-nav__section m-nav__section--first"
                                        >
                                          <span class="m-nav__section-text"
                                            >Admin</span
                                          >
                                        </li>
                                        <!-- <li class="m-nav__item">
                                          <a href="" class="m-nav__link">
                                            <i
                                              class="m-nav__link-icon la la-user-plus"
                                            ></i>
                                            <span class="m-nav__link-text"
                                              >Tambah Data Alumni</span
                                            >
                                          </a>
                                        </li> -->
                                        <li class="m-nav__item">
                                          <a href="" class="m-nav__link">
                                            <i
                                              class="m-nav__link-icon la la-download"
                                            ></i>
                                            <span class="m-nav__link-text"
                                              >Export Data Alumni</span
                                            >
                                          </a>
                                        </li>
                                        <li class="m-nav__item">
                                          <a href="" class="m-nav__link">
                                            <i
                                              class="m-nav__link-icon la la-upload"
                                            ></i>
                                            <span class="m-nav__link-text"
                                              >import Data Alumni</span
                                            >
                                          </a>
                                        </li>
                                        <!-- <li class="m-nav__section">
                                          <span class="m-nav__section-text"
                                            >Shortcut Links</span
                                          >
                                        </li> -->
                                        <!-- <li class="m-nav__item">
                                          <a href="" class="m-nav__link">
                                            <i
                                              class="m-nav__link-icon flaticon-info"
                                            ></i>
                                            <span class="m-nav__link-text"
                                              >Data Alumni</span
                                            >
                                          </a>
                                        </li> -->
                                    
                                        <!-- <li
                                          class="m-nav__separator m-nav__separator--fit m--hide"
                                        ></li>
                                        <li class="m-nav__item m--hide">
                                          <a
                                            href="#"
                                            class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm"
                                            >Submit</a
                                          >
                                        </li> -->
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="m-portlet__body">
                      <!--begin: Datatable -->
                      <table id="table_id" class="display">
                          <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Nisn</th>
                                  <th>Nis</th>
                                  <th>Nama</th>
                                  <th>Jurusan</th>
                                  <th>Rayon</th>
                                  <th>Masuk</th>
                                  <th>Lulus</th>
                                  <th>Alamat</th>
                                  <th>Email</th>
                                  <th>No Telepon</th>
                                  <th>Status</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Null</td>
                                  <td>null</td>
                                  <td>null</td>
                                  <td>null</td>
                                  <td>null</td>
                                  <td>null</td>
                                  <td>null</td>
                                  <td>null</td>
                                  <td>null</td>
                                  <td>null</td>
                                  <td>null</td>
                              </tr>
                          </tbody>
                      </table>
  
  
                      <!--end: Datatable -->
                    </div>
                  </div>
                </div>
                
              </div>
              </div>
  <!-- Modal -->
<div class="modal fade " id="exampleModalScrollable"  tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalScrollableTitle">Data Alumni</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- Body Input -->
                                  <!-- Nisn -->
                                  <div class="form-group m-form__group row">
                                        <label class="form-control-label col-lg-3 mt-4">NIS</label>
                                        <div class="col-lg-9 mt-4">
                                          <input type="text" class="form-control m-input" placeholder="">
                                        </div>
                                        <label class="form-control-label col-lg-3 mt-4">NISN</label>
                                        <div class="col-lg-9 mt-4">
                                          <input type="text" class="form-control m-input" placeholder="">
                                        </div>
                                      
                                        <!-- Nama -->
                                        <label class="form-control-label col-lg-3 mt-4">Nama</label>
                                        <div class="col-lg-9 mt-4">
                                          <input type="text" class="form-control m-input" placeholder="">
                                        </div>
                                        <!-- Jurusan -->
                                        <label class="form-control-label col-lg-3 mt-4">Jurusan</label>
                                    <div class="col-lg-9 mt-4">
                                      <div class="m-form__control">
                                        <select class="form-control m-bootstrap-select m_selectpicker">
                                          <option>----Pilih Jurusan-----</option>
                                          <option>RPL</option>
                                          <option>MMD</option>
                                          <option>TBG</option>
                                          <option>HTL</option>
                                        </select>
                                      </div>
                                    </div>
                                        <!-- Rayon -->
                                        <label class="form-control-label col-lg-3 mt-4">Rayon</label>
                                    <div class="col-lg-9 mt-4">
                                      <div class="m-form__control">
                                        <select class="form-control m-bootstrap-select m_selectpicker">
                                          <option>----Pilih Rayon-----</option>
                                          <option>Cicurug</option>
                                          <option>Cibedug</option>
                                          <option>Cibinong</option>
                                          <option>Cisarua</option>
                                        </select>
                                      </div>
                                    </div>
                                      
                                      <!-- JK -->
                                      
                                        <label class="form-control-label col-lg-3 mt-4">Jenis Kelamin</label>
                                        <div class="col-lg-9 mt-4">
                                          <div class="m-radio-inline">
                                            <label class="m-radio m-radio--solid m-radio--primary">
                                              <input type="radio" name="status" value="1" checked>Laki-Laki
                                              <span></span>
                                            </label>
                                            <label class="m-radio m-radio--solid m-radio--primary">
                                              <input type="radio" name="status" value="2"> Perempuan
                                              <span></span>
                                            </label>
                                          </div>
                                        </div>
                                    
                                      <!-- Tgl Masuk -->
                                    <label class="form-control-label col-lg-3 mt-4">Tahun Masuk</label>
                                    <div class="col-lg-9 mt-4">
                                      <div class="input-group m-input-group">
                                        <input type="number" class="form-control" id="" placeholder="Masukkan Tahun Masuk" />
                                      </div>
                                    </div>
                                      <!-- Tgl Keluar -->
                                      <label class="form-control-label col-lg-3 mt-4">Tahun Lulus</label>
                                      <div class="col-lg-9 mt-4">
                                        <div class="input-group m-input-group">
                                          <input type="number" class="form-control" id="" placeholder="Masukkan Tahun Lulus" />
                                        </div>
                                      </div>
                                    <!-- Alamat -->
                                
                                        <label class="form-control-label col-lg-3 mt-4">Alamat</label>
                                        <div class="col-lg-9 mt-4">
                                          <input type="text" class="form-control m-input" placeholder="">
                                        </div>
                                        <!-- Email -->  
                                      
                                        <label class="form-control-label col-lg-3 mt-4">Email</label>
                                        <div class="col-lg-9 mt-4">
                                          <input type="email" class="form-control m-input" placeholder="">
                                        </div>
                                        
                                        <!-- Nao telp -->
                                        <label class="form-control-label col-lg-3 mt-4">Nomor Telepon</label>
                                        <div class="col-lg-9 mt-4">
                                          <input type="number" class="form-control m-input" placeholder="">
                                        </div>
                                        
                                        <!-- stat -->
                                        <label class="form-control-label col-lg-3 mt-4">Status</label>
                                    <div class="col-lg-9 mt-4">
                                      <div class="m-form__control">
                                        <select class="form-control m-bootstrap-select m_selectpicker">
                                          <option>----Pilih Status-----</option>
                                          <option>Bekerja</option>
                                          <option>Kuliah</option>
                                          <option>Pengangguran</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save Data</button>
            </div>
          </div>
        </div>
      </div>
              <!--End::Section-->
                  <!--End::Section-->
      
              </div>
            </div>
          </div>
@include('layouts.footer')
@endsection