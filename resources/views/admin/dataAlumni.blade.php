@extends('layouts.header')
@section('dataAlumni','m-menu__item--active')
@section('title','SIMBKK | Data Alumni')
@section('content')
 <div class="m-grid__item m-grid__item--fluid m-wrapper">
          <!-- BEGIN: Subheader -->
          <div class="m-subheader ">
            <div class="d-flex align-items-center">
              <div class="mr-auto">
                <h3 class="m-subheader__title ">Laporan</h3>
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

          <!-- END: Subheader -->
          <!-- Body -->
          
             
              <!--Begin::Section-->
              <div class="container mt-4">
            <div class="row">
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
                                            <li class="m-nav__item">
                                              <a href="" class="m-nav__link">
                                                <i
                                                  class="m-nav__link-icon la la-close"
                                                ></i>
                                                <span class="m-nav__link-text"
                                                  >Reset All Data</span
                                                >
                                              </a>
                                            </li>
                                            <li class="m-nav__item">
                                              <a href="#" data-toggle="modal" data-target="#exampleModalLong" class="m-nav__link">
                                                <i
                                                  class="m-nav__link-icon la la-close"
                                                ></i>
                                                <span class="m-nav__link-text" 
                                                  >Reset Choosen Data</span
                                                >
                                              </a>
                                            </li>
                                            
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
                          <!-- <div class="m_datatable" id="m_datatable_latest_orders"></div> -->
      <!--Begin::Section-->
      <div class="container mt-4">
            <div class="m-portlet">
                  <div class="m-portlet__body  m-portlet__body--no-padding">
                    <div class="row m-row--no-padding m-row--col-separator-xl">
                      <div class="col-xl-4">
                        <!--begin:: Widgets/Stats2-1 -->
                        <div class="m-widget1">
                          <div class="m-widget1__item">
                            <div class="row m-row--no-padding align-items-center">
                              <div class="col">
                                <h3 class="m-widget1__title">Bekerja</h3>
                                <span class="m-widget1__desc"
                                  >Alumni yang Sudah Bekerja</span
                                >
                              </div>
                              <div class="col m--align-right">
                                <span class="m-widget1__number m--font-brand"
                                  >1000</span
                                >
                              </div>
                            </div>
                          </div>
                          <div class="m-widget1__item">
                            <div class="row m-row--no-padding align-items-center">
                              <div class="col">
                                <h3 class="m-widget1__title">Kuliah</h3>
                                <span class="m-widget1__desc"
                                  >Alumni yang melanjutkan kuliah</span
                                >
                              </div>
                              <div class="col m--align-right">
                                <span class="m-widget1__number m--font-danger"
                                  >1800</span
                                >
                              </div>
                            </div>
                          </div>
                          <div class="m-widget1__item">
                            <div class="row m-row--no-padding align-items-center">
                              <div class="col">
                                <h3 class="m-widget1__title">Pengangguran / Belum Input</h3>
                                <span class="m-widget1__desc"
                                  >Alumni yang masih menganggur / belum input data</span
                                >
                              </div>
                              <div class="col m--align-right">
                                <span class="m-widget1__number m--font-success"
                                  >10</span
                                >
                              </div>
                            </div>
                          </div>
                        </div>
    
                        <!--end:: Widgets/Stats2-1 -->
                      </div>
                      <div class="col-xl-4">
                        <!--begin:: Widgets/Daily Sales-->
                        <div class="m-widget14">
                          <div class="m-widget14__header m--margin-bottom-30">
                            <h3 class="m-widget14__title">
                              Data Alumni
                            </h3>
                            <span class="m-widget14__desc">
                             Perkembangan Data Alumni Dalam diagram batang, Mulai Dari data yang sudah bekerja sampai masih menganggur
                            </span>
                          </div>
                          <div class="m-widget14__chart" style="height:120px;">
                            <canvas id="m_chart_daily_sales"></canvas>
                          </div>
                        </div>
    
                        <!--end:: Widgets/Daily Sales-->
                      </div>
                      <div class="col-xl-4">
                        <!--begin:: Widgets/Profit Share-->
                        <div class="m-widget14">
                          <div class="m-widget14__header">
                            <h3 class="m-widget14__title">
                             Data Alumni
                            </h3>
                            <span class="m-widget14__desc">
                              Perkembangan Data Alumni Dalam diagram pie , mulai dari data yang sudah bekerja sampai masih menganggur
                            </span>
                          </div>
                          <div class="row  align-items-center">
                            <div class="col">
                              <div
                                id="m_chart_profit_share"
                                class="m-widget14__chart"
                                style="height: 160px"
                              >
                                <div class="m-widget14__stat">45</div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="m-widget14__legends">
                                <div class="m-widget14__legend">
                                  <span
                                    class="m-widget14__legend-bullet m--bg-accent"
                                  ></span>
                                  <span class="m-widget14__legend-text"
                                    >Bekerja</span
                                  >
                                </div>
                                <div class="m-widget14__legend">
                                  <span
                                    class="m-widget14__legend-bullet m--bg-warning"
                                  ></span>
                                  <span class="m-widget14__legend-text"
                                    >Kuliah</span
                                  >
                                </div>
                                <div class="m-widget14__legend">
                                  <span
                                    class="m-widget14__legend-bullet m--bg-brand"
                                  ></span>
                                  <span class="m-widget14__legend-text"
                                    >Pengangguran / belum input data</span
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
    
                        <!--end:: Widgets/Profit Share-->
                      </div>
                    </div>
                  </div>
                </div>
                </div>
  
    
                          <!--end: Datatable -->
                        </div>
                      </div>
                    </div>
                    
                  </div>
      
                  <!--End::Section-->
      
              </div>
            </div>
          </div>
@include('layouts.footer')
@endsection