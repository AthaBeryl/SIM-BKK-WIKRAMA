@extends('layouts.cms')
@section('content')
        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
          <!-- BEGIN: Subheader -->
          <div class="m-subheader ">
            <div class="d-flex align-items-center">
              <div class="mr-auto">
                <h3 class="m-subheader__title ">Data Rayon</h3>
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
                <div class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">Masukkan Data Rayon</div>
                </div>

                <div class="col-xl-12">
                  <div class="m-portlet m-portlet--mobile ">
                    <div class="m-portlet__head">
                      <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                          <h3 class="m-portlet__head-text">
                            Data Rayon 
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
                                              >Export Data Rayon</span
                                            >
                                          </a>
                                        </li>
                                        <li class="m-nav__item">
                                          <a href="" class="m-nav__link">
                                            <i
                                              class="m-nav__link-icon la la-upload"
                                            ></i>
                                            <span class="m-nav__link-text"
                                              >import Data Rayon</span
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
                                  <th>Pembimbing</th>
                                  <th>Rayon</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                <td>1</td>
                                  <td>Null</td>
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
              <h5 class="modal-title" id="exampleModalScrollableTitle">Data Jurusan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- Body Input -->
                                  <!-- Pembimbing -->
                                  <div class="form-group m-form__group row">
                                        <label id="pembimbing" class="form-control-label col-lg-3 mt-4">pembimbing</label>
                                        <div class="col-lg-9 mt-4">
                                          <input type="text" name="pembimbing" id="pembimbing" class="form-control m-input" placeholder="">
                                        </div>
                                        <!-- rayon -->
                                        
                                            <label id="rayon" class="form-control-label col-lg-3 mt-4">rayon</label>
                                            <div class="col-lg-9 mt-4">
                                              <input type="text" name="rayon" id="rayon" class="form-control m-input" placeholder="">
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
@endsection