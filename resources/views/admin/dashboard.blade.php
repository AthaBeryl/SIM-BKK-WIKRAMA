@extends('layouts.cms')
@section('content')
        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
          <!-- BEGIN: Subheader -->
          <div class="m-subheader ">
            <div class="d-flex align-items-center">
              <div class="mr-auto">
                <h3 class="m-subheader__title ">Dashboard</h3>
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
          <div class="m-content">
            <!--Begin::Section-->
            <div class="row">
              <div class="col-xl-12">
                <!--begin:: Widgets/Top Products-->
                <div
                  class="m-portlet m-portlet--bordered-semi m-portlet--full-height "
                >
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                          Jejak Alumni
                        </h3>
                      </div>
                    </div>
                    <div class="m-portlet__head-tools">
                      <ul class="m-portlet__nav">
                        <li
                          class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                          m-dropdown-toggle="hover"
                          aria-expanded="true"
                        >

                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="m-portlet__body">
                    <!--begin::Widget5-->
                    <div class="m-widget4">
                      <div
                        class="m-widget4__chart m-portlet-fit--sides m--margin-top-10 m--margin-top-20"
                      >
                      <!-- begin charts -->
              
                      {!!$jejakJurusan->container()!!}
                   
                      <!-- end charts -->
                      </div>
                      @foreach($jurusan as $j)
                      <div class="m-widget4__item">
                         <div class="m-widget4__img m-widget4" style="">
                          <img
                            src="images-assets/kerja.ico"
                            alt=""
                          />
                        </div>
                      
                        <div class="m-widget4__info">
                          <span class="m-widget4__title">
                            {{$j->jurusan}} </span
                          ><br />
                          <span class="m-widget4__sub">
                           Jumlah Alumni
                          </span>
                        </div>
                        <span class="m-widget4__ext">
                          <span class="m-widget4__number m--font-danger"
                            >{{$siswa->where('jurusan',$j->short)->count()}}</span
                          >
                        </span>
                      </div>
                      @endforeach

                    </div>

                    <!--end::Widget 5-->
                  </div>
                </div>

                <!--end:: Widgets/Top Products-->
              </div>
              <div class="col-xl-6">
                <!--begin:: Widgets/Activity-->
                <div
                  class="m-portlet m-portlet--bordered-semi m-portlet--widget-fit m-portlet--full-height m-portlet--skin-light  m-portlet--rounded-force"
                >
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text m--font-light">
                          Jejak Alumni
                        </h3>
                      </div>
                    </div>
                    <div class="m-portlet__head-tools">
                      <ul class="m-portlet__nav">
                        <li
                          class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                          m-dropdown-toggle="hover"
                        >
                          <a
                            href="#"
                            class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl"
                          >
                            <i class="fa fa-genderless m--font-light"></i>
                          </a>
                          <div class="m-dropdown__wrapper">
                            <span
                              class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"
                            ></span>
                            <div class="m-dropdown__inner">
                              <div class="m-dropdown__body">
                                <div class="m-dropdown__content">
                                  <ul class="m-nav">
                              
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon la la-close"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >Remove Data</span
                                        >
                                      </a>
                                    </li>
                                  
                                    <li
                                      class="m-nav__separator m-nav__separator--fit"
                                    ></li>
                                    <li class="m-nav__item">
                                      <a
                                        href="#"
                                        class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm"
                                        >Cancel</a
                                      >
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="m-portlet__body">
                    <div class="m-widget17">
                      <div
                        class="m-widget17__visual m-widget17__visual--chart m-portlet-fit--top m-portlet-fit--sides m--bg-danger"
                      >
                        <div class="m-widget17__chart" style="height:320px;">
                          <!-- begin chart -->
                          {!!$jejakAlumni->container()!!}
                          <!-- end chart -->
                        </div>
                        
                      </div>
                      <div class="m-widget17__stats">
                        <div class="m-widget17__items m-widget17__items-col1">
                          <div class="m-widget17__item">
                            <span class="m-widget17__icon">
                              <i class="flaticon-truck m--font-brand"></i>
                            </span>
                            <span class="m-widget17__subtitle">
                              Wirausaha
                            </span>
                            <span class="m-widget17__desc">
                              {{$wirausaha}} Alumni Berwirausaha
                            </span>
                          </div>
                          <div class="m-widget17__item">
                            <span class="m-widget17__icon">
                              <i class="flaticon-paper-plane m--font-info"></i>
                            </span>
                            <span class="m-widget17__subtitle">
                              Kerja
                            </span>
                            <span class="m-widget17__desc">
                              {{$kerja}} Alumni Bekerja
                            </span>
                          </div>
                        </div>
                        <div class="m-widget17__items m-widget17__items-col2">
                          <div class="m-widget17__item">
                            <span class="m-widget17__icon">
                              <i class="flaticon-pie-chart m--font-success"></i>
                            </span>
                            <span class="m-widget17__subtitle">
                              Kuliah
                            </span>
                            <span class="m-widget17__desc">
                              {{$kuliah}} Alumni Kuliah
                            </span>
                          </div>
                          <div class="m-widget17__item">
                            <span class="m-widget17__icon">
                              <i class="flaticon-time m--font-danger"></i>
                            </span>
                            <span class="m-widget17__subtitle">
                              Belum Input
                            </span>
                            <span class="m-widget17__desc">
                             {{$belumInput}} Alumni Belum Input
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!--end:: Widgets/Activity-->
              </div>
                          </div>

            <!--End::Section-->
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
                                        <a href="{{route('export.siswa')}}" class="m-nav__link">
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
                    {{-- <div class="m_datatable" id="m_datatable_latest_orders"></div> --}}
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
                    <!--end: Datatable -->
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
        </div>
{!!$jejakAlumni->script()!!}
{!!$jejakJurusan->script()!!}
@endsection