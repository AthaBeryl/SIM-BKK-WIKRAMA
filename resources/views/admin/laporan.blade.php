@extends('layouts.header')
@section('laporan','m-menu__item--active')
@section('title','SIMBKK | Laporan')
@section('content')
        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
          <!-- BEGIN: Subheader -->
          <div class="m-subheader ">
            <div class="d-flex align-items-center">
              <div class="mr-auto">
                <h3 class="m-subheader__title ">Laporan</h3>

              </div>
              <div>
              <form action="{{route('laporan.filter')}}">
                    <div class="row">
                        <div class="col-md-5">
                            <select class="form-control" name="tahunLulus">
                                <option selected value="'--' or 1=1">Seluruh Lulusan</option>
                                @foreach($tahunLulus as $lulusan)
                                <option value="{{$lulusan->lulus}}">{{$lulusan->lulus}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-5">
                            <select class="form-control" name="jurusan">
                                <option selected value="'--' or 1=1">Seluruh Jurusan</option>
                                @foreach($jurusan as $j)
                            <option value="{{$j->id}}">{{$j->jurusan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </form>
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
                            >{{$siswa->where('jurusan_id',$j->id)->count()}}</span
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
                                        <a href="{{route('export.siswa')}}" class="m-nav__link">
                                            <i
                                              class="m-nav__link-icon la la-download"
                                            ></i>
                                            <span class="m-nav__link-text"
                                              >Export Data Alumni</span
                                            >
                                          </a>
                                    </li>

                                    <li
                                      class="m-nav__separator m-nav__separator--fit"
                                    ></li>

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
              <div class="col-xl-6">
                <!--begin:: Widgets/Top Products-->
                <div
                  class="m-portlet m-portlet--bordered-semi m-portlet--full-height "
                >
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                          Jabatan Populer Alumni
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

                        {!!$jabatan->container()!!}

                      <!-- end charts -->
                      </div>
                    </div>

                    <!--end::Widget 5-->
                  </div>

                </div>
                          </div>
                          <div class="col-xl-12">
                            <!--begin:: Widgets/Top Products-->
                            <div
                              class="m-portlet m-portlet--bordered-semi m-portlet--full-height "
                            >
                              <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                  <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                      Penyebaran Tempat Kerja Alumni
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

                                    {!!$chartKerja->container()!!}

                                  <!-- end charts -->
                                  </div>

                                  {{-- @foreach($jurusan as $j)
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
                                  @endforeach --}}
                                  <div class="m-widget4__item">


                                   <div class="m-widget4__info">
                                    <table>
                                        <tr>
                                            <td>asd</td>
                                            <td>asd</td>
                                            <td>asd</td>
                                            <td>asd</td>
                                        </tr>
                                    </table>
                                   </div>

                                 </div>

                                </div>

                                <!--end::Widget 5-->
                              </div>



                            </div>



                                      </div>
                                      <div class="col-xl-12">
                                        <!--begin:: Widgets/Top Products-->
                                        <div
                                          class="m-portlet m-portlet--bordered-semi m-portlet--full-height "
                                        >
                                          <div class="m-portlet__head">
                                            <div class="m-portlet__head-caption">
                                              <div class="m-portlet__head-title">
                                                <h3 class="m-portlet__head-text">
                                                  Penyebaran Tempat Kuliah Alumni
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

                                                {!!$chartKuliah->container()!!}

                                              <!-- end charts -->
                                              </div>

                                              {{-- @foreach($jurusan as $j)
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
                                              @endforeach --}}
                                              <div class="m-widget4__item">


                                               <div class="m-widget4__info">
                                                <table>
                                                    <tr>
                                                        <td>asd</td>
                                                        <td>asd</td>
                                                        <td>asd</td>
                                                        <td>asd</td>
                                                    </tr>
                                                </table>
                                               </div>

                                             </div>

                                            </div>

                                            <!--end::Widget 5-->
                                          </div>



                                        </div>



                                                  </div>
                                                  {{-- paste here --}}
                                                  <div class="col-xl-6">
                                                    <!--begin:: Widgets/Top Products-->
                                                    <div
                                                      class="m-portlet m-portlet--bordered-semi m-portlet--full-height "
                                                    >
                                                      <div class="m-portlet__head">
                                                        <div class="m-portlet__head-caption">
                                                          <div class="m-portlet__head-title">
                                                            <h3 class="m-portlet__head-text">
                                                              Jurusan Populer Alumni
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

                                                            {!!$jurusanKuliah->container()!!}

                                                          <!-- end charts -->
                                                          </div>
                                                        </div>

                                                        <!--end::Widget 5-->
                                                      </div>

                                                    </div>
                                                              </div>
                                                               <div class="col-xl-6">
                <!--begin:: Widgets/Top Products-->
                <div
                  class="m-portlet m-portlet--bordered-semi m-portlet--full-height "
                >
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                          Rasio Pendapatan Alumni
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

                        {!!$pendapatan->container()!!}

                      <!-- end charts -->
                      </div>
                    </div>

                    <!--end::Widget 5-->
                  </div>

                </div>
                          </div>

            <!--End::Section-->
            <div class="row">



                </div>
              </div>
            </div>

          </div>
        </div>
        </div>
{!!$jejakAlumni->script()!!}
{!!$jejakJurusan->script()!!}
{!!$jabatan->script()!!}
{!!$chartKerja->script()!!}
{!!$chartKuliah->script()!!}
{!!$jurusanKuliah->script()!!}
{!!$pendapatan->script()!!}
@include('layouts.footer')
@endsection

