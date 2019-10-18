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
              <div class="col-xl-6">
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
                          <select
                            href="#"
                            class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand"
                          >
                          <div class="m-dropdown__wrapper">
                              <span
                                class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"
                                style="left: auto; right: 36.5px;"
                              ></span>
                              <div class="m-dropdown__inner">
                                <div class="m-dropdown__body">
                                  <div class="m-dropdown__content">
                                    <ul class="m-nav">
                                            <option value="1">Seluruh Jurusan</option>
                                            <option value="2">Rekayasa Perangkat Lunak</option>
                                            <option value="3">Teknik Komputer dan Jaringan</option>
                                            <option value="4">Multimedia</option>
                                            <option value="5">Otomatisasi Teknis Kegiatan Perkantoran</option>
                                            <option value="6">Bisnis Daring dan Pemasaran</option>
                                            <option value="7">Perhotelan</option>
                                            <option value="8">Tataboga</option>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </select>

                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="m-portlet__body">
                    <!--begin::Widget5-->
                    <div class="m-widget4">
                      <div
                        class="m-widget4__chart m-portlet-fit--sides m--margin-top-10 m--margin-top-20"
                        style="height:260px;"
                      >
                        <canvas id="m_chart_trends_stats"></canvas>
                      </div>
                      <div class="m-widget4__item">
                        <div class="m-widget4__img m-widget4__img--logo">
                          <img
                            src="assets/app/media/img/client-logos/logo3.png"
                            alt=""
                          />
                        </div>
                        <div class="m-widget4__info">
                          <span class="m-widget4__title">
                            Kerja </span
                          ><br />
                          <span class="m-widget4__sub">
                            Alumni yang Melanjutkan Untuk Kerja
                          </span>
                        </div>
                        <span class="m-widget4__ext">
                          <span class="m-widget4__number m--font-danger"
                            >120</span
                          >
                        </span>
                      </div>
                      <div class="m-widget4__item">
                        <div class="m-widget4__img m-widget4__img--logo">
                          <img
                            src="assets/app/media/img/client-logos/logo1.png"
                            alt=""
                          />
                        </div>
                        <div class="m-widget4__info">
                          <span class="m-widget4__title">
                            Kuliah </span
                          ><br />
                          <span class="m-widget4__sub">
                              Alumni yang Melanjutkan Untuk Kuliah
                          </span>
                        </div>
                        <span class="m-widget4__ext">
                          <span class="m-widget4__number m--font-danger"
                            >200</span
                          >
                        </span>
                      </div>

                      <div class="m-widget4__item">
                        <div class="m-widget4__img m-widget4__img--logo">
                          <img
                            src="assets/app/media/img/client-logos/logo2.png"
                            alt=""
                          />
                        </div>
                        <div class="m-widget4__info">
                          <span class="m-widget4__title">
                            Pengusaha </span
                          ><br />
                          <span class="m-widget4__sub">
                            Alumni Yang Melanjutkan Untuk Buka Usaha
                          </span>
                        </div>
                        <span class="m-widget4__ext">
                          <span class="m-widget4__number m--font-danger"
                            >20</span
                          >
                        </span>
                      </div>

                      <div class="m-widget4__item">
                          <div class="m-widget4__img m-widget4__img--logo">
                            <img
                              src="assets/app/media/img/client-logos/logo1.png"
                              alt=""
                            />
                          </div>
                          <div class="m-widget4__info">
                            <span class="m-widget4__title">
                              Penggangguran / Belum Input Data </span
                            ><br />
                            <span class="m-widget4__sub">
                                Alumni yang menjadi pengangguran / belum input data
                            </span>
                          </div>
                          <span class="m-widget4__ext">
                            <span class="m-widget4__number m--font-danger"
                              >5</span
                            >
                          </span>
                        </div>

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
                          Data
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
                                    <li
                                      class="m-nav__section m-nav__section--first"
                                    >
                                      <span class="m-nav__section-text"
                                        >Quick Actions</span
                                      >
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon flaticon-share"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >Activity</span
                                        >
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon flaticon-chat-1"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >Messages</span
                                        >
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon flaticon-info"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >FAQ</span
                                        >
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon flaticon-lifebuoy"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >Support</span
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
                          <canvas id="m_chart_activities"></canvas>
                        </div>
                      </div>
                      <div class="m-widget17__stats">
                        <div class="m-widget17__items m-widget17__items-col1">
                          <div class="m-widget17__item">
                            <span class="m-widget17__icon">
                              <i class="flaticon-truck m--font-brand"></i>
                            </span>
                            <span class="m-widget17__subtitle">
                              Delivered
                            </span>
                            <span class="m-widget17__desc">
                              15 New Paskages
                            </span>
                          </div>
                          <div class="m-widget17__item">
                            <span class="m-widget17__icon">
                              <i class="flaticon-paper-plane m--font-info"></i>
                            </span>
                            <span class="m-widget17__subtitle">
                              Reporeted
                            </span>
                            <span class="m-widget17__desc">
                              72 Support Cases
                            </span>
                          </div>
                        </div>
                        <div class="m-widget17__items m-widget17__items-col2">
                          <div class="m-widget17__item">
                            <span class="m-widget17__icon">
                              <i class="flaticon-pie-chart m--font-success"></i>
                            </span>
                            <span class="m-widget17__subtitle">
                              Ordered
                            </span>
                            <span class="m-widget17__desc">
                              72 New Items
                            </span>
                          </div>
                          <div class="m-widget17__item">
                            <span class="m-widget17__icon">
                              <i class="flaticon-time m--font-danger"></i>
                            </span>
                            <span class="m-widget17__subtitle">
                              Arrived
                            </span>
                            <span class="m-widget17__desc">
                              34 Upgraded Boxes
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

            <!--Begin::Section-->
            <div class="m-portlet">
              <div class="m-portlet__body  m-portlet__body--no-padding">
                <div class="row m-row--no-padding m-row--col-separator-xl">
                  <div class="col-xl-4">
                    <!--begin:: Widgets/Stats2-1 -->
                    <div class="m-widget1">
                      <div class="m-widget1__item">
                        <div class="row m-row--no-padding align-items-center">
                          <div class="col">
                            <h3 class="m-widget1__title">Member Profit</h3>
                            <span class="m-widget1__desc"
                              >Awerage Weekly Profit</span
                            >
                          </div>
                          <div class="col m--align-right">
                            <span class="m-widget1__number m--font-brand"
                              >+$17,800</span
                            >
                          </div>
                        </div>
                      </div>
                      <div class="m-widget1__item">
                        <div class="row m-row--no-padding align-items-center">
                          <div class="col">
                            <h3 class="m-widget1__title">Orders</h3>
                            <span class="m-widget1__desc"
                              >Weekly Customer Orders</span
                            >
                          </div>
                          <div class="col m--align-right">
                            <span class="m-widget1__number m--font-danger"
                              >+1,800</span
                            >
                          </div>
                        </div>
                      </div>
                      <div class="m-widget1__item">
                        <div class="row m-row--no-padding align-items-center">
                          <div class="col">
                            <h3 class="m-widget1__title">Issue Reports</h3>
                            <span class="m-widget1__desc"
                              >System bugs and issues</span
                            >
                          </div>
                          <div class="col m--align-right">
                            <span class="m-widget1__number m--font-success"
                              >-27,49%</span
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
                          Daily Sales
                        </h3>
                        <span class="m-widget14__desc">
                          Check out each collumn for more details
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
                          Profit Share
                        </h3>
                        <span class="m-widget14__desc">
                          Profit Share between customers
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
                                >37% Sport Tickets</span
                              >
                            </div>
                            <div class="m-widget14__legend">
                              <span
                                class="m-widget14__legend-bullet m--bg-warning"
                              ></span>
                              <span class="m-widget14__legend-text"
                                >47% Business Events</span
                              >
                            </div>
                            <div class="m-widget14__legend">
                              <span
                                class="m-widget14__legend-bullet m--bg-brand"
                              ></span>
                              <span class="m-widget14__legend-text"
                                >19% Others</span
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

            <!--End::Section-->

            <!--Begin::Section-->
            <div class="row">
              <div class="col-xl-4">
                <!--begin:: Widgets/Blog-->
                <div
                  class="m-portlet m-portlet--head-overlay m-portlet--full-height  m-portlet--rounded-force"
                >
                  <div class="m-portlet__head m-portlet__head--fit-">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text m--font-light">
                          Personal Income
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
                            class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill m-btn btn-outline-light m-btn--hover-light"
                          >
                            2018
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
                                        >Orders</span
                                      >
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon flaticon-share"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >Pending</span
                                        >
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon flaticon-chat-1"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >Delivered</span
                                        >
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon flaticon-info"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >Canceled</span
                                        >
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon flaticon-lifebuoy"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >Approved</span
                                        >
                                      </a>
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
                    <div class="m-widget27 m-portlet-fit--sides">
                      <div class="m-widget27__pic">
                        <img src="assets/app/media/img//bg/bg-4.jpg" alt="" />
                        <h3 class="m-widget27__title m--font-light">
                          <span><span>$</span>256,100</span>
                        </h3>
                        <div class="m-widget27__btn">
                          <button
                            type="button"
                            class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--bolder"
                          >
                            Inclusive All Earnings
                          </button>
                        </div>
                      </div>
                      <div class="m-widget27__container">
                        <!-- begin::Nav pills -->
                        <ul
                          class="m-widget27__nav-items nav nav-pills nav-fill"
                          role="tablist"
                        >
                          <li class="m-widget27__nav-item nav-item">
                            <a
                              class="nav-link active"
                              data-toggle="pill"
                              href="#m_personal_income_quater_1"
                              >Quater 1</a
                            >
                          </li>
                          <li class="m-widget27__nav-item nav-item">
                            <a
                              class="nav-link"
                              data-toggle="pill"
                              href="#m_personal_income_quater_2"
                              >Quater 2</a
                            >
                          </li>
                          <li class="m-widget27__nav-item nav-item">
                            <a
                              class="nav-link"
                              data-toggle="pill"
                              href="#m_personal_income_quater_3"
                              >Quater 3</a
                            >
                          </li>
                          <li class="m-widget27__nav-item nav-item">
                            <a
                              class="nav-link"
                              data-toggle="pill"
                              href="#m_personal_income_quater_4"
                              >Quater 4</a
                            >
                          </li>
                        </ul>

                        <!-- end::Nav pills -->

                        <!-- begin::Tab Content -->
                        <div
                          class="m-widget27__tab tab-content m-widget27--no-padding"
                        >
                          <div
                            id="m_personal_income_quater_1"
                            class="tab-pane active"
                          >
                            <div class="row  align-items-center">
                              <div class="col">
                                <div
                                  id="m_chart_personal_income_quater_1"
                                  class="m-widget27__chart"
                                  style="height: 160px"
                                >
                                  <div class="m-widget27__stat">37</div>
                                </div>
                              </div>
                              <div class="col">
                                <div class="m-widget27__legends">
                                  <div class="m-widget27__legend">
                                    <span
                                      class="m-widget27__legend-bullet m--bg-accent"
                                    ></span>
                                    <span class="m-widget27__legend-text"
                                      >37% Case</span
                                    >
                                  </div>
                                  <div class="m-widget27__legend">
                                    <span
                                      class="m-widget27__legend-bullet m--bg-warning"
                                    ></span>
                                    <span class="m-widget27__legend-text"
                                      >42% Events</span
                                    >
                                  </div>
                                  <div class="m-widget27__legend">
                                    <span
                                      class="m-widget27__legend-bullet m--bg-brand"
                                    ></span>
                                    <span class="m-widget27__legend-text"
                                      >19% Others</span
                                    >
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div
                            id="m_personal_income_quater_2"
                            class="tab-pane fade"
                          >
                            <div class="row  align-items-center">
                              <div class="col">
                                <div
                                  id="m_chart_personal_income_quater_2"
                                  class="m-widget27__chart"
                                  style="height: 160px"
                                >
                                  <div class="m-widget27__stat">70</div>
                                </div>
                              </div>
                              <div class="col">
                                <div class="m-widget27__legends">
                                  <div class="m-widget27__legend">
                                    <span
                                      class="m-widget27__legend-bullet m--bg-focus"
                                    ></span>
                                    <span class="m-widget27__legend-text"
                                      >57% Case</span
                                    >
                                  </div>
                                  <div class="m-widget27__legend">
                                    <span
                                      class="m-widget27__legend-bullet m--bg-success"
                                    ></span>
                                    <span class="m-widget27__legend-text"
                                      >20% Events</span
                                    >
                                  </div>
                                  <div class="m-widget27__legend">
                                    <span
                                      class="m-widget27__legend-bullet m--bg-danger"
                                    ></span>
                                    <span class="m-widget27__legend-text"
                                      >19% Others</span
                                    >
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div
                            id="m_personal_income_quater_3"
                            class="tab-pane fade"
                          >
                            <div class="row  align-items-center">
                              <div class="col">
                                <div
                                  id="m_chart_personal_income_quater_3"
                                  class="m-widget27__chart"
                                  style="height: 160px"
                                >
                                  <div class="m-widget27__stat">67</div>
                                </div>
                              </div>
                              <div class="col">
                                <div class="m-widget27__legends">
                                  <div class="m-widget27__legend">
                                    <span
                                      class="m-widget27__legend-bullet m--bg-info"
                                    ></span>
                                    <span class="m-widget27__legend-text"
                                      >47% Case</span
                                    >
                                  </div>
                                  <div class="m-widget27__legend">
                                    <span
                                      class="m-widget27__legend-bullet m--bg-danger"
                                    ></span>
                                    <span class="m-widget27__legend-text"
                                      >55% Events</span
                                    >
                                  </div>
                                  <div class="m-widget27__legend">
                                    <span
                                      class="m-widget27__legend-bullet m--bg-brand"
                                    ></span>
                                    <span class="m-widget27__legend-text"
                                      >27% Others</span
                                    >
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div
                            id="m_personal_income_quater_4"
                            class="tab-pane fade"
                          >
                            <div class="row  align-items-center">
                              <div class="col">
                                <div
                                  id="m_chart_personal_income_quater_4"
                                  class="m-widget27__chart"
                                  style="height: 160px"
                                >
                                  <div class="m-widget27__stat">77</div>
                                </div>
                              </div>
                              <div class="col">
                                <div class="m-widget27__legends">
                                  <div class="m-widget27__legend">
                                    <span
                                      class="m-widget27__legend-bullet m--bg-warning"
                                    ></span>
                                    <span class="m-widget27__legend-text"
                                      >37% Case</span
                                    >
                                  </div>
                                  <div class="m-widget27__legend">
                                    <span
                                      class="m-widget27__legend-bullet m--bg-primary"
                                    ></span>
                                    <span class="m-widget27__legend-text"
                                      >65% Events</span
                                    >
                                  </div>
                                  <div class="m-widget27__legend">
                                    <span
                                      class="m-widget27__legend-bullet m--bg-danger"
                                    ></span>
                                    <span class="m-widget27__legend-text"
                                      >33% Others</span
                                    >
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- end::Tab Content -->
                      </div>
                    </div>
                  </div>
                </div>

                <!--end:: Widgets/Blog-->
              </div>
              <div class="col-xl-4">
                <!--begin:: Widgets/Blog-->
                <div
                  class="m-portlet m-portlet--head-overlay m-portlet--full-height   m-portlet--rounded-force"
                >
                  <div class="m-portlet__head m-portlet__head--fit">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text m--font-light">
                          Finance Stats
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
                            class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill m-btn btn-outline-light m-btn--hover-light"
                          >
                            2018
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
                                        >Reports</span
                                      >
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon flaticon-share"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >Activity</span
                                        >
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon flaticon-chat-1"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >Messages</span
                                        >
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon flaticon-info"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >FAQ</span
                                        >
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon flaticon-lifebuoy"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >Support</span
                                        >
                                      </a>
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
                    <div class="m-widget28">
                      <div class="m-widget28__pic m-portlet-fit--sides"></div>
                      <div class="m-widget28__container">
                        <!-- begin::Nav pills -->
                        <ul
                          class="m-widget28__nav-items nav nav-pills nav-fill"
                          role="tablist"
                        >
                          <li class="m-widget28__nav-item nav-item">
                            <a
                              class="nav-link active"
                              data-toggle="pill"
                              href="#menu11"
                              ><span><i class="fa flaticon-pie-chart"></i></span
                              ><span>GMI Taxes</span></a
                            >
                          </li>
                          <li class="m-widget28__nav-item nav-item">
                            <a
                              class="nav-link"
                              data-toggle="pill"
                              href="#menu21"
                              ><span><i class="fa flaticon-file-1"></i></span
                              ><span>IMT Invoice</span></a
                            >
                          </li>
                          <li class="m-widget28__nav-item nav-item">
                            <a
                              class="nav-link"
                              data-toggle="pill"
                              href="#menu31"
                              ><span><i class="fa flaticon-clipboard"></i></span
                              ><span>Main Notes</span></a
                            >
                          </li>
                        </ul>

                        <!-- end::Nav pills -->

                        <!-- begin::Tab Content -->
                        <div class="m-widget28__tab tab-content">
                          <div
                            id="menu11"
                            class="m-widget28__tab-container tab-pane active"
                          >
                            <div class="m-widget28__tab-items">
                              <div class="m-widget28__tab-item">
                                <span>Company Name</span>
                                <span>SLT Back-end Solutions</span>
                              </div>
                              <div class="m-widget28__tab-item">
                                <span>INE Number</span>
                                <span>D330-1234562546</span>
                              </div>
                              <div class="m-widget28__tab-item">
                                <span>Total Charges</span>
                                <span>USD 1,250.000</span>
                              </div>
                              <div class="m-widget28__tab-item">
                                <span>Project Description</span>
                                <span>Creating Back-end Components</span>
                              </div>
                            </div>
                          </div>
                          <div
                            id="menu21"
                            class="m-widget28__tab-container tab-pane fade"
                          >
                            <div class="m-widget28__tab-items">
                              <div class="m-widget28__tab-item">
                                <span>Project Description</span>
                                <span>Back-End Web Architecture</span>
                              </div>
                              <div class="m-widget28__tab-item">
                                <span>Total Charges</span>
                                <span>USD 2,170.000</span>
                              </div>
                              <div class="m-widget28__tab-item">
                                <span>INE Number</span>
                                <span>D110-1234562546</span>
                              </div>
                              <div class="m-widget28__tab-item">
                                <span>Company Name</span>
                                <span>SLT Back-end Solutions</span>
                              </div>
                            </div>
                          </div>
                          <div
                            id="menu31"
                            class="m-widget28__tab-container tab-pane fade"
                          >
                            <div class="m-widget28__tab-items">
                              <div class="m-widget28__tab-item">
                                <span>Total Charges</span>
                                <span>USD 3,450.000</span>
                              </div>
                              <div class="m-widget28__tab-item">
                                <span>Project Description</span>
                                <span>Creating Back-end Components</span>
                              </div>
                              <div class="m-widget28__tab-item">
                                <span>Company Name</span>
                                <span>SLT Back-end Solutions</span>
                              </div>
                              <div class="m-widget28__tab-item">
                                <span>INE Number</span>
                                <span>D510-7431562548</span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- end::Tab Content -->
                      </div>
                    </div>
                  </div>
                </div>

                <!--end:: Widgets/Blog-->
              </div>
              <div class="col-xl-4">
                <!--begin:: Packages-->
                <div
                  class="m-portlet m--bg-warning m-portlet--bordered-semi m-portlet--full-height "
                >
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text m--font-light">
                          Packages
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
                            class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill m-btn btn-outline-light m-btn--hover-light"
                          >
                            2018
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
                                        >Reports</span
                                      >
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon flaticon-share"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >Activity</span
                                        >
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon flaticon-chat-1"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >Messages</span
                                        >
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon flaticon-info"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >FAQ</span
                                        >
                                      </a>
                                    </li>
                                    <li
                                      class="m-nav__section m-nav__section--first"
                                    >
                                      <span class="m-nav__section-text"
                                        >Export</span
                                      >
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon flaticon-lifebuoy"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >PDF</span
                                        >
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon flaticon-lifebuoy"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >Excel</span
                                        >
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon flaticon-lifebuoy"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >CSV</span
                                        >
                                      </a>
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
                    <!--begin::Widget 29-->
                    <div class="m-widget29">
                      <div class="m-widget_content">
                        <h3 class="m-widget_content-title">Monthly Income</h3>
                        <div class="m-widget_content-items">
                          <div class="m-widget_content-item">
                            <span>Total</span>
                            <span class="m--font-accent">$680</span>
                          </div>
                          <div class="m-widget_content-item">
                            <span>Change</span>
                            <span class="m--font-brand">+15%</span>
                          </div>
                          <div class="m-widget_content-item">
                            <span>Licenses</span>
                            <span>29</span>
                          </div>
                        </div>
                      </div>
                      <div class="m-widget_content">
                        <h3 class="m-widget_content-title">Taxes info</h3>
                        <div class="m-widget_content-items">
                          <div class="m-widget_content-item">
                            <span>Total</span>
                            <span class="m--font-accent">22.50</span>
                          </div>
                          <div class="m-widget_content-item">
                            <span>Change</span>
                            <span class="m--font-brand">+15%</span>
                          </div>
                          <div class="m-widget_content-item">
                            <span>Count</span>
                            <span>701</span>
                          </div>
                        </div>
                      </div>
                      <div class="m-widget_content">
                        <h3 class="m-widget_content-title">Partners Sale</h3>
                        <div class="m-widget_content-items">
                          <div class="m-widget_content-item">
                            <span>Total</span>
                            <span class="m--font-accent">$680</span>
                          </div>
                          <div class="m-widget_content-item">
                            <span>Change</span>
                            <span class="m--font-brand">+15%</span>
                          </div>
                          <div class="m-widget_content-item">
                            <span>Licenses</span>
                            <span>29</span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!--end::Widget 29-->
                  </div>
                </div>

                <!--end:: Packages-->
              </div>
            </div>

            <!--End::Section-->

            <!--Begin::Section-->
            <div class="row">
              <div class="col-xl-6">
                <!--begin:: Widgets/Tasks -->
                <div class="m-portlet m-portlet--full-height ">
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                          Tasks
                        </h3>
                      </div>
                    </div>
                    <div class="m-portlet__head-tools">
                      <ul
                        class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm"
                        role="tablist"
                      >
                        <li class="nav-item m-tabs__item">
                          <a
                            class="nav-link m-tabs__link active"
                            data-toggle="tab"
                            href="#m_widget2_tab1_content"
                            role="tab"
                          >
                            Today
                          </a>
                        </li>
                        <li class="nav-item m-tabs__item">
                          <a
                            class="nav-link m-tabs__link"
                            data-toggle="tab"
                            href="#m_widget2_tab2_content1"
                            role="tab"
                          >
                            Week
                          </a>
                        </li>
                        <li class="nav-item m-tabs__item">
                          <a
                            class="nav-link m-tabs__link"
                            data-toggle="tab"
                            href="#m_widget2_tab3_content1"
                            role="tab"
                          >
                            Month
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="m-portlet__body">
                    <div class="tab-content">
                      <div class="tab-pane active" id="m_widget2_tab1_content">
                        <div class="m-widget2">
                          <div class="m-widget2__item m-widget2__item--primary">
                            <div class="m-widget2__checkbox">
                              <label
                                class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand"
                              >
                                <input type="checkbox" />
                                <span></span>
                              </label>
                            </div>
                            <div class="m-widget2__desc">
                              <span class="m-widget2__text">
                                Make Metronic Great Again.Lorem Ipsum Amet </span
                              ><br />
                              <span class="m-widget2__user-name">
                                <a href="#" class="m-widget2__link">
                                  By Bob
                                </a>
                              </span>
                            </div>
                            <div class="m-widget2__actions">
                              <div class="m-widget2__actions-nav">
                                <div
                                  class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                  m-dropdown-toggle="hover"
                                >
                                  <a href="#" class="m-dropdown__toggle">
                                    <i class="la la-ellipsis-h"></i>
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
                                                  class="m-nav__link-icon flaticon-share"
                                                ></i>
                                                <span class="m-nav__link-text"
                                                  >Activity</span
                                                >
                                              </a>
                                            </li>
                                            <li class="m-nav__item">
                                              <a href="" class="m-nav__link">
                                                <i
                                                  class="m-nav__link-icon flaticon-chat-1"
                                                ></i>
                                                <span class="m-nav__link-text"
                                                  >Messages</span
                                                >
                                              </a>
                                            </li>
                                            <li class="m-nav__item">
                                              <a href="" class="m-nav__link">
                                                <i
                                                  class="m-nav__link-icon flaticon-info"
                                                ></i>
                                                <span class="m-nav__link-text"
                                                  >FAQ</span
                                                >
                                              </a>
                                            </li>
                                            <li class="m-nav__item">
                                              <a href="" class="m-nav__link">
                                                <i
                                                  class="m-nav__link-icon flaticon-lifebuoy"
                                                ></i>
                                                <span class="m-nav__link-text"
                                                  >Support</span
                                                >
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="m-widget2__item m-widget2__item--warning">
                            <div class="m-widget2__checkbox">
                              <label
                                class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand"
                              >
                                <input type="checkbox" />
                                <span></span>
                              </label>
                            </div>
                            <div class="m-widget2__desc">
                              <span class="m-widget2__text">
                                Prepare Docs For Metting On Monday </span
                              ><br />
                              <span class="m-widget2__user-name">
                                <a href="#" class="m-widget2__link">
                                  By Sean
                                </a>
                              </span>
                            </div>
                            <div class="m-widget2__actions">
                              <div class="m-widget2__actions-nav">
                                <div
                                  class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                  m-dropdown-toggle="hover"
                                >
                                  <a href="#" class="m-dropdown__toggle">
                                    <i class="la la-ellipsis-h"></i>
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
                                                  class="m-nav__link-icon flaticon-share"
                                                ></i>
                                                <span class="m-nav__link-text"
                                                  >Activity</span
                                                >
                                              </a>
                                            </li>
                                            <li class="m-nav__item">
                                              <a href="" class="m-nav__link">
                                                <i
                                                  class="m-nav__link-icon flaticon-chat-1"
                                                ></i>
                                                <span class="m-nav__link-text"
                                                  >Messages</span
                                                >
                                              </a>
                                            </li>
                                            <li class="m-nav__item">
                                              <a href="" class="m-nav__link">
                                                <i
                                                  class="m-nav__link-icon flaticon-info"
                                                ></i>
                                                <span class="m-nav__link-text"
                                                  >FAQ</span
                                                >
                                              </a>
                                            </li>
                                            <li class="m-nav__item">
                                              <a href="" class="m-nav__link">
                                                <i
                                                  class="m-nav__link-icon flaticon-lifebuoy"
                                                ></i>
                                                <span class="m-nav__link-text"
                                                  >Support</span
                                                >
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="m-widget2__item m-widget2__item--brand">
                            <div class="m-widget2__checkbox">
                              <label
                                class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand"
                              >
                                <input type="checkbox" />
                                <span></span>
                              </label>
                            </div>
                            <div class="m-widget2__desc">
                              <span class="m-widget2__text">
                                Make Widgets Great Again.Estudiat Communy Elit </span
                              ><br />
                              <span class="m-widget2__user-name">
                                <a href="#" class="m-widget2__link">
                                  By Aziko
                                </a>
                              </span>
                            </div>
                            <div class="m-widget2__actions">
                              <div class="m-widget2__actions-nav">
                                <div
                                  class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                  m-dropdown-toggle="hover"
                                >
                                  <a href="#" class="m-dropdown__toggle">
                                    <i class="la la-ellipsis-h"></i>
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
                                                  class="m-nav__link-icon flaticon-share"
                                                ></i>
                                                <span class="m-nav__link-text"
                                                  >Activity</span
                                                >
                                              </a>
                                            </li>
                                            <li class="m-nav__item">
                                              <a href="" class="m-nav__link">
                                                <i
                                                  class="m-nav__link-icon flaticon-chat-1"
                                                ></i>
                                                <span class="m-nav__link-text"
                                                  >Messages</span
                                                >
                                              </a>
                                            </li>
                                            <li class="m-nav__item">
                                              <a href="" class="m-nav__link">
                                                <i
                                                  class="m-nav__link-icon flaticon-info"
                                                ></i>
                                                <span class="m-nav__link-text"
                                                  >FAQ</span
                                                >
                                              </a>
                                            </li>
                                            <li class="m-nav__item">
                                              <a href="" class="m-nav__link">
                                                <i
                                                  class="m-nav__link-icon flaticon-lifebuoy"
                                                ></i>
                                                <span class="m-nav__link-text"
                                                  >Support</span
                                                >
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="m-widget2__item m-widget2__item--success">
                            <div class="m-widget2__checkbox">
                              <label
                                class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand"
                              >
                                <input type="checkbox" />
                                <span></span>
                              </label>
                            </div>
                            <div class="m-widget2__desc">
                              <span class="m-widget2__text">
                                Make Metronic Great Again.Lorem Ipsum </span
                              ><br />
                              <span class="m-widget2__user-name">
                                <a href="#" class="m-widget2__link">
                                  By James
                                </a>
                              </span>
                            </div>
                            <div class="m-widget2__actions">
                              <div class="m-widget2__actions-nav">
                                <div
                                  class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                  m-dropdown-toggle="hover"
                                >
                                  <a href="#" class="m-dropdown__toggle">
                                    <i class="la la-ellipsis-h"></i>
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
                                                  class="m-nav__link-icon flaticon-share"
                                                ></i>
                                                <span class="m-nav__link-text"
                                                  >Activity</span
                                                >
                                              </a>
                                            </li>
                                            <li class="m-nav__item">
                                              <a href="" class="m-nav__link">
                                                <i
                                                  class="m-nav__link-icon flaticon-chat-1"
                                                ></i>
                                                <span class="m-nav__link-text"
                                                  >Messages</span
                                                >
                                              </a>
                                            </li>
                                            <li class="m-nav__item">
                                              <a href="" class="m-nav__link">
                                                <i
                                                  class="m-nav__link-icon flaticon-info"
                                                ></i>
                                                <span class="m-nav__link-text"
                                                  >FAQ</span
                                                >
                                              </a>
                                            </li>
                                            <li class="m-nav__item">
                                              <a href="" class="m-nav__link">
                                                <i
                                                  class="m-nav__link-icon flaticon-lifebuoy"
                                                ></i>
                                                <span class="m-nav__link-text"
                                                  >Support</span
                                                >
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="m-widget2__item m-widget2__item--danger">
                            <div class="m-widget2__checkbox">
                              <label
                                class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand"
                              >
                                <input type="checkbox" />
                                <span></span>
                              </label>
                            </div>
                            <div class="m-widget2__desc">
                              <span class="m-widget2__text">
                                Completa Financial Report For Emirates Airlines </span
                              ><br />
                              <span class="m-widget2__user-name">
                                <a href="#" class="m-widget2__link">
                                  By Bob
                                </a>
                              </span>
                            </div>
                            <div class="m-widget2__actions">
                              <div class="m-widget2__actions-nav">
                                <div
                                  class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                  m-dropdown-toggle="hover"
                                >
                                  <a href="#" class="m-dropdown__toggle">
                                    <i class="la la-ellipsis-h"></i>
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
                                                  class="m-nav__link-icon flaticon-share"
                                                ></i>
                                                <span class="m-nav__link-text"
                                                  >Activity</span
                                                >
                                              </a>
                                            </li>
                                            <li class="m-nav__item">
                                              <a href="" class="m-nav__link">
                                                <i
                                                  class="m-nav__link-icon flaticon-chat-1"
                                                ></i>
                                                <span class="m-nav__link-text"
                                                  >Messages</span
                                                >
                                              </a>
                                            </li>
                                            <li class="m-nav__item">
                                              <a href="" class="m-nav__link">
                                                <i
                                                  class="m-nav__link-icon flaticon-info"
                                                ></i>
                                                <span class="m-nav__link-text"
                                                  >FAQ</span
                                                >
                                              </a>
                                            </li>
                                            <li class="m-nav__item">
                                              <a href="" class="m-nav__link">
                                                <i
                                                  class="m-nav__link-icon flaticon-lifebuoy"
                                                ></i>
                                                <span class="m-nav__link-text"
                                                  >Support</span
                                                >
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="m-widget2__item m-widget2__item--info">
                            <div class="m-widget2__checkbox">
                              <label
                                class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand"
                              >
                                <input type="checkbox" />
                                <span></span>
                              </label>
                            </div>
                            <div class="m-widget2__desc">
                              <span class="m-widget2__text">
                                Completa Financial Report For Emirates Airlines </span
                              ><br />
                              <span class="m-widget2__user-name">
                                <a href="#" class="m-widget2__link">
                                  By Sean
                                </a>
                              </span>
                            </div>
                            <div class="m-widget2__actions">
                              <div class="m-widget2__actions-nav">
                                <div
                                  class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                  m-dropdown-toggle="hover"
                                >
                                  <a href="#" class="m-dropdown__toggle">
                                    <i class="la la-ellipsis-h"></i>
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
                                                  class="m-nav__link-icon flaticon-share"
                                                ></i>
                                                <span class="m-nav__link-text"
                                                  >Activity</span
                                                >
                                              </a>
                                            </li>
                                            <li class="m-nav__item">
                                              <a href="" class="m-nav__link">
                                                <i
                                                  class="m-nav__link-icon flaticon-chat-1"
                                                ></i>
                                                <span class="m-nav__link-text"
                                                  >Messages</span
                                                >
                                              </a>
                                            </li>
                                            <li class="m-nav__item">
                                              <a href="" class="m-nav__link">
                                                <i
                                                  class="m-nav__link-icon flaticon-info"
                                                ></i>
                                                <span class="m-nav__link-text"
                                                  >FAQ</span
                                                >
                                              </a>
                                            </li>
                                            <li class="m-nav__item">
                                              <a href="" class="m-nav__link">
                                                <i
                                                  class="m-nav__link-icon flaticon-lifebuoy"
                                                ></i>
                                                <span class="m-nav__link-text"
                                                  >Support</span
                                                >
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="m_widget2_tab2_content"></div>
                      <div class="tab-pane" id="m_widget2_tab3_content"></div>
                    </div>
                  </div>
                </div>

                <!--end:: Widgets/Tasks -->
              </div>
              <div class="col-xl-6">
                <!--begin:: Widgets/Support Tickets -->
                <div class="m-portlet m-portlet--full-height ">
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                          Support Tickets
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
                          <a
                            href="#"
                            class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle"
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
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon flaticon-share"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >Activity</span
                                        >
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon flaticon-chat-1"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >Messages</span
                                        >
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon flaticon-info"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >FAQ</span
                                        >
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon flaticon-lifebuoy"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >Support</span
                                        >
                                      </a>
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
                    <div class="m-widget3">
                      <div class="m-widget3__item">
                        <div class="m-widget3__header">
                          <div class="m-widget3__user-img">
                            <img
                              class="m-widget3__img"
                              src="assets/app/media/img/users/user1.jpg"
                              alt=""
                            />
                          </div>
                          <div class="m-widget3__info">
                            <span class="m-widget3__username">
                              Melania Trump </span
                            ><br />
                            <span class="m-widget3__time">
                              2 day ago
                            </span>
                          </div>
                          <span class="m-widget3__status m--font-info">
                            Pending
                          </span>
                        </div>
                        <div class="m-widget3__body">
                          <p class="m-widget3__text">
                            Lorem ipsum dolor sit amet,consectetuer edipiscing
                            elit,sed diam nonummy nibh euismod tinciduntut
                            laoreet doloremagna aliquam erat volutpat.
                          </p>
                        </div>
                      </div>
                      <div class="m-widget3__item">
                        <div class="m-widget3__header">
                          <div class="m-widget3__user-img">
                            <img
                              class="m-widget3__img"
                              src="assets/app/media/img/users/user4.jpg"
                              alt=""
                            />
                          </div>
                          <div class="m-widget3__info">
                            <span class="m-widget3__username">
                              Lebron King James </span
                            ><br />
                            <span class="m-widget3__time">
                              1 day ago
                            </span>
                          </div>
                          <span class="m-widget3__status m--font-brand">
                            Open
                          </span>
                        </div>
                        <div class="m-widget3__body">
                          <p class="m-widget3__text">
                            Lorem ipsum dolor sit amet,consectetuer edipiscing
                            elit,sed diam nonummy nibh euismod tinciduntut
                            laoreet doloremagna aliquam erat volutpat.Ut wisi
                            enim ad minim veniam,quis nostrud exerci tation
                            ullamcorper.
                          </p>
                        </div>
                      </div>
                      <div class="m-widget3__item">
                        <div class="m-widget3__header">
                          <div class="m-widget3__user-img">
                            <img
                              class="m-widget3__img"
                              src="assets/app/media/img/users/user5.jpg"
                              alt=""
                            />
                          </div>
                          <div class="m-widget3__info">
                            <span class="m-widget3__username">
                              Deb Gibson </span
                            ><br />
                            <span class="m-widget3__time">
                              3 weeks ago
                            </span>
                          </div>
                          <span class="m-widget3__status m--font-success">
                            Closed
                          </span>
                        </div>
                        <div class="m-widget3__body">
                          <p class="m-widget3__text">
                            Lorem ipsum dolor sit amet,consectetuer edipiscing
                            elit,sed diam nonummy nibh euismod tinciduntut
                            laoreet doloremagna aliquam erat volutpat.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!--end:: Widgets/Support Tickets -->
              </div>
            </div>

            <!--End::Section-->

            <!--Begin::Section-->
            <div class="row">
              <div class="col-xl-6 col-lg-12">
                <!--Begin::Portlet-->
                <div class="m-portlet  m-portlet--full-height ">
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                          Recent Activities
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
                          <a
                            href="#"
                            class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle"
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
                                        >Quick Actions</span
                                      >
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon flaticon-share"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >Activity</span
                                        >
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon flaticon-chat-1"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >Messages</span
                                        >
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon flaticon-info"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >FAQ</span
                                        >
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon flaticon-lifebuoy"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >Support</span
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
                    <div
                      class="m-scrollable"
                      data-scrollable="true"
                      data-height="380"
                      data-mobile-height="300"
                    >
                      <!--Begin::Timeline 2 -->
                      <div class="m-timeline-2">
                        <div
                          class="m-timeline-2__items  m--padding-top-25 m--padding-bottom-30"
                        >
                          <div class="m-timeline-2__item">
                            <span class="m-timeline-2__item-time">10:00</span>
                            <div class="m-timeline-2__item-cricle">
                              <i class="fa fa-genderless m--font-danger"></i>
                            </div>
                            <div
                              class="m-timeline-2__item-text  m--padding-top-5"
                            >
                              Lorem ipsum dolor sit amit,consectetur eiusmdd
                              tempor<br />
                              incididunt ut labore et dolore magna
                            </div>
                          </div>
                          <div class="m-timeline-2__item m--margin-top-30">
                            <span class="m-timeline-2__item-time">12:45</span>
                            <div class="m-timeline-2__item-cricle">
                              <i class="fa fa-genderless m--font-success"></i>
                            </div>
                            <div
                              class="m-timeline-2__item-text m-timeline-2__item-text--bold"
                            >
                              AEOL Meeting With
                            </div>
                            <div
                              class="m-list-pics m-list-pics--sm m--padding-left-20"
                            >
                              <a href="#"
                                ><img
                                  src="assets/app/media/img/users/100_4.jpg"
                                  title=""
                              /></a>
                              <a href="#"
                                ><img
                                  src="assets/app/media/img/users/100_13.jpg"
                                  title=""
                              /></a>
                              <a href="#"
                                ><img
                                  src="assets/app/media/img/users/100_11.jpg"
                                  title=""
                              /></a>
                              <a href="#"
                                ><img
                                  src="assets/app/media/img/users/100_14.jpg"
                                  title=""
                              /></a>
                            </div>
                          </div>
                          <div class="m-timeline-2__item m--margin-top-30">
                            <span class="m-timeline-2__item-time">14:00</span>
                            <div class="m-timeline-2__item-cricle">
                              <i class="fa fa-genderless m--font-brand"></i>
                            </div>
                            <div
                              class="m-timeline-2__item-text m--padding-top-5"
                            >
                              Make Deposit
                              <a
                                href="#"
                                class="m-link m-link--brand m--font-bolder"
                                >USD 700</a
                              >
                              To ESL.
                            </div>
                          </div>
                          <div class="m-timeline-2__item m--margin-top-30">
                            <span class="m-timeline-2__item-time">16:00</span>
                            <div class="m-timeline-2__item-cricle">
                              <i class="fa fa-genderless m--font-warning"></i>
                            </div>
                            <div
                              class="m-timeline-2__item-text m--padding-top-5"
                            >
                              Lorem ipsum dolor sit amit,consectetur eiusmdd
                              tempor<br />
                              incididunt ut labore et dolore magna elit enim at
                              minim<br />
                              veniam quis nostrud
                            </div>
                          </div>
                          <div class="m-timeline-2__item m--margin-top-30">
                            <span class="m-timeline-2__item-time">17:00</span>
                            <div class="m-timeline-2__item-cricle">
                              <i class="fa fa-genderless m--font-info"></i>
                            </div>
                            <div
                              class="m-timeline-2__item-text m--padding-top-5"
                            >
                              Placed a new order in
                              <a
                                href="#"
                                class="m-link m-link--brand m--font-bolder"
                                >SIGNATURE MOBILE</a
                              >
                              marketplace.
                            </div>
                          </div>
                          <div class="m-timeline-2__item m--margin-top-30">
                            <span class="m-timeline-2__item-time">16:00</span>
                            <div class="m-timeline-2__item-cricle">
                              <i class="fa fa-genderless m--font-brand"></i>
                            </div>
                            <div
                              class="m-timeline-2__item-text m--padding-top-5"
                            >
                              Lorem ipsum dolor sit amit,consectetur eiusmdd
                              tempor<br />
                              incididunt ut labore et dolore magna elit enim at
                              minim<br />
                              veniam quis nostrud
                            </div>
                          </div>
                          <div class="m-timeline-2__item m--margin-top-30">
                            <span class="m-timeline-2__item-time">17:00</span>
                            <div class="m-timeline-2__item-cricle">
                              <i class="fa fa-genderless m--font-danger"></i>
                            </div>
                            <div
                              class="m-timeline-2__item-text m--padding-top-5"
                            >
                              Received a new feedback on
                              <a
                                href="#"
                                class="m-link m-link--brand m--font-bolder"
                                >FinancePro App</a
                              >
                              product.
                            </div>
                          </div>
                        </div>
                      </div>

                      <!--End::Timeline 2 -->
                    </div>
                  </div>
                </div>

                <!--End::Portlet-->
              </div>
              <div class="col-xl-6 col-lg-12">
                <!--Begin::Portlet-->
                <div class="m-portlet m-portlet--full-height ">
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                          Recent Notifications
                        </h3>
                      </div>
                    </div>
                    <div class="m-portlet__head-tools">
                      <ul
                        class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm"
                        role="tablist"
                      >
                        <li class="nav-item m-tabs__item">
                          <a
                            class="nav-link m-tabs__link active"
                            data-toggle="tab"
                            href="#m_widget2_tab1_content"
                            role="tab"
                          >
                            Today
                          </a>
                        </li>
                        <li class="nav-item m-tabs__item">
                          <a
                            class="nav-link m-tabs__link"
                            data-toggle="tab"
                            href="#m_widget2_tab2_content"
                            role="tab"
                          >
                            Month
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="m-portlet__body">
                    <div class="tab-content">
                      <div class="tab-pane active" id="m_widget2_tab1_content">
                        <!--Begin::Timeline 3 -->
                        <div class="m-timeline-3">
                          <div class="m-timeline-3__items">
                            <div
                              class="m-timeline-3__item m-timeline-3__item--info"
                            >
                              <span class="m-timeline-3__item-time">09:00</span>
                              <div class="m-timeline-3__item-desc">
                                <span class="m-timeline-3__item-text">
                                  Lorem ipsum dolor sit amit,consectetur eiusmdd
                                  tempor </span
                                ><br />
                                <span class="m-timeline-3__item-user-name">
                                  <a
                                    href="#"
                                    class="m-link m-link--metal m-timeline-3__item-link"
                                  >
                                    By Bob
                                  </a>
                                </span>
                              </div>
                            </div>
                            <div
                              class="m-timeline-3__item m-timeline-3__item--warning"
                            >
                              <span class="m-timeline-3__item-time">10:00</span>
                              <div class="m-timeline-3__item-desc">
                                <span class="m-timeline-3__item-text">
                                  Lorem ipsum dolor sit amit </span
                                ><br />
                                <span class="m-timeline-3__item-user-name">
                                  <a
                                    href="#"
                                    class="m-link m-link--metal m-timeline-3__item-link"
                                  >
                                    By Sean
                                  </a>
                                </span>
                              </div>
                            </div>
                            <div
                              class="m-timeline-3__item m-timeline-3__item--brand"
                            >
                              <span class="m-timeline-3__item-time">11:00</span>
                              <div class="m-timeline-3__item-desc">
                                <span class="m-timeline-3__item-text">
                                  Lorem ipsum dolor sit amit eiusmdd tempor </span
                                ><br />
                                <span class="m-timeline-3__item-user-name">
                                  <a
                                    href="#"
                                    class="m-link m-link--metal m-timeline-3__item-link"
                                  >
                                    By James
                                  </a>
                                </span>
                              </div>
                            </div>
                            <div
                              class="m-timeline-3__item m-timeline-3__item--success"
                            >
                              <span class="m-timeline-3__item-time">12:00</span>
                              <div class="m-timeline-3__item-desc">
                                <span class="m-timeline-3__item-text">
                                  Lorem ipsum dolor </span
                                ><br />
                                <span class="m-timeline-3__item-user-name">
                                  <a
                                    href="#"
                                    class="m-link m-link--metal m-timeline-3__item-link"
                                  >
                                    By James
                                  </a>
                                </span>
                              </div>
                            </div>
                            <div
                              class="m-timeline-3__item m-timeline-3__item--danger"
                            >
                              <span class="m-timeline-3__item-time">14:00</span>
                              <div class="m-timeline-3__item-desc">
                                <span class="m-timeline-3__item-text">
                                  Lorem ipsum dolor sit amit,consectetur eiusmdd </span
                                ><br />
                                <span class="m-timeline-3__item-user-name">
                                  <a
                                    href="#"
                                    class="m-link m-link--metal m-timeline-3__item-link"
                                  >
                                    By Derrick
                                  </a>
                                </span>
                              </div>
                            </div>
                            <div
                              class="m-timeline-3__item m-timeline-3__item--info"
                            >
                              <span class="m-timeline-3__item-time">15:00</span>
                              <div class="m-timeline-3__item-desc">
                                <span class="m-timeline-3__item-text">
                                  Lorem ipsum dolor sit amit,consectetur </span
                                ><br />
                                <span class="m-timeline-3__item-user-name">
                                  <a
                                    href="#"
                                    class="m-link m-link--metal m-timeline-3__item-link"
                                  >
                                    By Iman
                                  </a>
                                </span>
                              </div>
                            </div>
                            <div
                              class="m-timeline-3__item m-timeline-3__item--brand"
                            >
                              <span class="m-timeline-3__item-time">17:00</span>
                              <div class="m-timeline-3__item-desc">
                                <span class="m-timeline-3__item-text">
                                  Lorem ipsum dolor sit consectetur eiusmdd
                                  tempor </span
                                ><br />
                                <span class="m-timeline-3__item-user-name">
                                  <a
                                    href="#"
                                    class="m-link m-link--metal m-timeline-3__item-link"
                                  >
                                    By Aziko
                                  </a>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!--End::Timeline 3 -->
                      </div>
                      <div class="tab-pane" id="m_widget2_tab2_content">
                        <!--Begin::Timeline 3 -->
                        <div class="m-timeline-3">
                          <div class="m-timeline-3__items">
                            <div
                              class="m-timeline-3__item m-timeline-3__item--info"
                            >
                              <span
                                class="m-timeline-3__item-time m--font-focus"
                                >09:00</span
                              >
                              <div class="m-timeline-3__item-desc">
                                <span class="m-timeline-3__item-text">
                                  Contrary to popular belief, Lorem Ipsum is not
                                  simply random text. </span
                                ><br />
                                <span class="m-timeline-3__item-user-name">
                                  <a
                                    href="#"
                                    class="m-link m-link--metal m-timeline-3__item-link"
                                  >
                                    By Bob
                                  </a>
                                </span>
                              </div>
                            </div>
                            <div
                              class="m-timeline-3__item m-timeline-3__item--warning"
                            >
                              <span
                                class="m-timeline-3__item-time m--font-warning"
                                >10:00</span
                              >
                              <div class="m-timeline-3__item-desc">
                                <span class="m-timeline-3__item-text">
                                  There are many variations of passages of Lorem
                                  Ipsum available. </span
                                ><br />
                                <span class="m-timeline-3__item-user-name">
                                  <a
                                    href="#"
                                    class="m-link m-link--metal m-timeline-3__item-link"
                                  >
                                    By Sean
                                  </a>
                                </span>
                              </div>
                            </div>
                            <div
                              class="m-timeline-3__item m-timeline-3__item--brand"
                            >
                              <span
                                class="m-timeline-3__item-time m--font-primary"
                                >11:00</span
                              >
                              <div class="m-timeline-3__item-desc">
                                <span class="m-timeline-3__item-text">
                                  Contrary to popular belief, Lorem Ipsum is not
                                  simply random text. </span
                                ><br />
                                <span class="m-timeline-3__item-user-name">
                                  <a
                                    href="#"
                                    class="m-link m-link--metal m-timeline-3__item-link"
                                  >
                                    By James
                                  </a>
                                </span>
                              </div>
                            </div>
                            <div
                              class="m-timeline-3__item m-timeline-3__item--success"
                            >
                              <span
                                class="m-timeline-3__item-time m--font-success"
                                >12:00</span
                              >
                              <div class="m-timeline-3__item-desc">
                                <span class="m-timeline-3__item-text">
                                  The standard chunk of Lorem Ipsum used since
                                  the 1500s is reproduced. </span
                                ><br />
                                <span class="m-timeline-3__item-user-name">
                                  <a
                                    href="#"
                                    class="m-link m-link--metal m-timeline-3__item-link"
                                  >
                                    By James
                                  </a>
                                </span>
                              </div>
                            </div>
                            <div
                              class="m-timeline-3__item m-timeline-3__item--danger"
                            >
                              <span
                                class="m-timeline-3__item-time m--font-warning"
                                >14:00</span
                              >
                              <div class="m-timeline-3__item-desc">
                                <span class="m-timeline-3__item-text">
                                  Latin words, combined with a handful of model
                                  sentence structures. </span
                                ><br />
                                <span class="m-timeline-3__item-user-name">
                                  <a
                                    href="#"
                                    class="m-link m-link--metal m-timeline-3__item-link"
                                  >
                                    By Derrick
                                  </a>
                                </span>
                              </div>
                            </div>
                            <div
                              class="m-timeline-3__item m-timeline-3__item--info"
                            >
                              <span class="m-timeline-3__item-time m--font-info"
                                >15:00</span
                              >
                              <div class="m-timeline-3__item-desc">
                                <span class="m-timeline-3__item-text">
                                  Contrary to popular belief, Lorem Ipsum is not
                                  simply random text. </span
                                ><br />
                                <span class="m-timeline-3__item-user-name">
                                  <a
                                    href="#"
                                    class="m-link m-link--metal m-timeline-3__item-link"
                                  >
                                    By Iman
                                  </a>
                                </span>
                              </div>
                            </div>
                            <div
                              class="m-timeline-3__item m-timeline-3__item--brand"
                            >
                              <span
                                class="m-timeline-3__item-time m--font-danger"
                                >17:00</span
                              >
                              <div class="m-timeline-3__item-desc">
                                <span class="m-timeline-3__item-text">
                                  Lorem Ipsum is therefore always free from
                                  repetition, injected humour. </span
                                ><br />
                                <span class="m-timeline-3__item-user-name">
                                  <a
                                    href="#"
                                    class="m-link m-link--metal m-timeline-3__item-link"
                                  >
                                    By Aziko
                                  </a>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!--End::Timeline 3 -->
                      </div>
                    </div>
                  </div>
                </div>

                <!--End::Portlet-->
              </div>
            </div>

            <!--End::Section-->

            <!--Begin::Section-->
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
                                          >Quick Actions</span
                                        >
                                      </li>
                                      <li class="m-nav__item">
                                        <a href="" class="m-nav__link">
                                          <i
                                            class="m-nav__link-icon flaticon-share"
                                          ></i>
                                          <span class="m-nav__link-text"
                                            >Tambah Data Alumni</span
                                          >
                                        </a>
                                      </li>
                                      <li class="m-nav__item">
                                        <a href="" class="m-nav__link">
                                          <i
                                            class="m-nav__link-icon flaticon-chat-1"
                                          ></i>
                                          <span class="m-nav__link-text"
                                            >Import Data Alumni</span
                                          >
                                        </a>
                                      </li>
                                      <li class="m-nav__item">
                                        <a href="" class="m-nav__link">
                                          <i
                                            class="m-nav__link-icon flaticon-multimedia-2"
                                          ></i>
                                          <span class="m-nav__link-text"
                                            >Export Data Alumni</span
                                          >
                                        </a>
                                      </li>
                                      <li class="m-nav__section">
                                        <span class="m-nav__section-text"
                                          >Shortcut Links</span
                                        >
                                      </li>
                                      <li class="m-nav__item">
                                        <a href="" class="m-nav__link">
                                          <i
                                            class="m-nav__link-icon flaticon-info"
                                          ></i>
                                          <span class="m-nav__link-text"
                                            >Data Alumni</span
                                          >
                                        </a>
                                      </li>

                                      <li
                                        class="m-nav__separator m-nav__separator--fit m--hide"
                                      ></li>
                                      <li class="m-nav__item m--hide">
                                        <a
                                          href="#"
                                          class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm"
                                          >Submit</a
                                        >
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
                    <div class="m_datatable" id="m_datatable_latest_orders"></div>

                    <!--end: Datatable -->
                  </div>
                </div>
              </div>

            </div>

            <!--End::Section-->

            <!--Begin::Section-->
            <div class="row">
              <div class="col-xl-8">
                <!--begin:: Widgets/Best Sellers-->
                <div class="m-portlet m-portlet--full-height ">
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                          Best Sellers
                        </h3>
                      </div>
                    </div>
                    <div class="m-portlet__head-tools">
                      <ul
                        class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm"
                        role="tablist"
                      >
                        <li class="nav-item m-tabs__item">
                          <a
                            class="nav-link m-tabs__link active"
                            data-toggle="tab"
                            href="#m_widget5_tab1_content"
                            role="tab"
                          >
                            Last Month
                          </a>
                        </li>
                        <li class="nav-item m-tabs__item">
                          <a
                            class="nav-link m-tabs__link"
                            data-toggle="tab"
                            href="#m_widget5_tab2_content"
                            role="tab"
                          >
                            last Year
                          </a>
                        </li>
                        <li class="nav-item m-tabs__item">
                          <a
                            class="nav-link m-tabs__link"
                            data-toggle="tab"
                            href="#m_widget5_tab3_content"
                            role="tab"
                          >
                            All time
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="m-portlet__body">
                    <!--begin::Content-->
                    <div class="tab-content">
                      <div
                        class="tab-pane active"
                        id="m_widget5_tab1_content"
                        aria-expanded="true"
                      >
                        <!--begin::m-widget5-->
                        <div class="m-widget5">
                          <div class="m-widget5__item">
                            <div class="m-widget5__content">
                              <div class="m-widget5__pic">
                                <img
                                  class="m-widget7__img"
                                  src="assets/app/media/img//products/product6.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="m-widget5__section">
                                <h4 class="m-widget5__title">
                                  Great Logo Designn
                                </h4>
                                <span class="m-widget5__desc">
                                  Make Metronic Great Again.Lorem Ipsum Amet
                                </span>
                                <div class="m-widget5__info">
                                  <span class="m-widget5__author">
                                    Author:
                                  </span>
                                  <span class="m-widget5__info-label">
                                    author:
                                  </span>
                                  <span class="m-widget5__info-author-name">
                                    Fly themes
                                  </span>
                                  <span class="m-widget5__info-label">
                                    Released:
                                  </span>
                                  <span
                                    class="m-widget5__info-date m--font-info"
                                  >
                                    23.08.17
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="m-widget5__content">
                              <div class="m-widget5__stats1">
                                <span class="m-widget5__number">19,200</span
                                ><br />
                                <span class="m-widget5__sales">sales</span>
                              </div>
                              <div class="m-widget5__stats2">
                                <span class="m-widget5__number">1046</span
                                ><br />
                                <span class="m-widget5__votes">votes</span>
                              </div>
                            </div>
                          </div>
                          <div class="m-widget5__item">
                            <div class="m-widget5__content">
                              <div class="m-widget5__pic">
                                <img
                                  class="m-widget7__img"
                                  src="assets/app/media/img//products/product10.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="m-widget5__section">
                                <h4 class="m-widget5__title">
                                  Branding Mockup
                                </h4>
                                <span class="m-widget5__desc">
                                  Make Metronic Great Again.Lorem Ipsum Amet
                                </span>
                                <div class="m-widget5__info">
                                  <span class="m-widget5__author">
                                    Author:
                                  </span>
                                  <span
                                    class="m-widget5__info-author m--font-info"
                                  >
                                    Fly themes
                                  </span>
                                  <span class="m-widget5__info-label">
                                    Released:
                                  </span>
                                  <span
                                    class="m-widget5__info-date m--font-info"
                                  >
                                    23.08.17
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="m-widget5__content">
                              <div class="m-widget5__stats1">
                                <span class="m-widget5__number">24,583</span
                                ><br />
                                <span class="m-widget5__sales">sales</span>
                              </div>
                              <div class="m-widget5__stats2">
                                <span class="m-widget5__number">3809</span
                                ><br />
                                <span class="m-widget5__votes">votes</span>
                              </div>
                            </div>
                          </div>
                          <div class="m-widget5__item">
                            <div class="m-widget5__content">
                              <div class="m-widget5__pic">
                                <img
                                  class="m-widget7__img"
                                  src="assets/app/media/img//products/product11.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="m-widget5__section">
                                <h4 class="m-widget5__title">
                                  Awesome Mobile App
                                </h4>
                                <span class="m-widget5__desc">
                                  Make Metronic Great Again.Lorem Ipsum Amet
                                </span>
                                <div class="m-widget5__info">
                                  <span class="m-widget5__author">
                                    Author:
                                  </span>
                                  <span
                                    class="m-widget5__info-author m--font-info"
                                  >
                                    Fly themes
                                  </span>
                                  <span class="m-widget5__info-label">
                                    Released:
                                  </span>
                                  <span
                                    class="m-widget5__info-date m--font-info"
                                  >
                                    23.08.17
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="m-widget5__content">
                              <div class="m-widget5__stats1">
                                <span class="m-widget5__number">10,054</span
                                ><br />
                                <span class="m-widget5__sales">sales</span>
                              </div>
                              <div class="m-widget5__stats2">
                                <span class="m-widget5__number">1103</span
                                ><br />
                                <span class="m-widget5__votes">votes</span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!--end::m-widget5-->
                      </div>
                      <div
                        class="tab-pane"
                        id="m_widget5_tab2_content"
                        aria-expanded="false"
                      >
                        <!--begin::m-widget5-->
                        <div class="m-widget5">
                          <div class="m-widget5__item">
                            <div class="m-widget5__content">
                              <div class="m-widget5__pic">
                                <img
                                  class="m-widget7__img"
                                  src="assets/app/media/img//products/product11.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="m-widget5__section">
                                <h4 class="m-widget5__title">
                                  Branding Mockup
                                </h4>
                                <span class="m-widget5__desc">
                                  Make Metronic Great Again.Lorem Ipsum Amet
                                </span>
                                <div class="m-widget5__info">
                                  <span class="m-widget5__author">
                                    Author:
                                  </span>
                                  <span
                                    class="m-widget5__info-author m--font-info"
                                  >
                                    Fly themes
                                  </span>
                                  <span class="m-widget5__info-label">
                                    Released:
                                  </span>
                                  <span
                                    class="m-widget5__info-date m--font-info"
                                  >
                                    23.08.17
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="m-widget5__content">
                              <div class="m-widget5__stats1">
                                <span class="m-widget5__number">24,583</span
                                ><br />
                                <span class="m-widget5__sales">sales</span>
                              </div>
                              <div class="m-widget5__stats2">
                                <span class="m-widget5__number">3809</span
                                ><br />
                                <span class="m-widget5__votes">votes</span>
                              </div>
                            </div>
                          </div>
                          <div class="m-widget5__item">
                            <div class="m-widget5__content">
                              <div class="m-widget5__pic">
                                <img
                                  class="m-widget7__img"
                                  src="assets/app/media/img//products/product6.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="m-widget5__section">
                                <h4 class="m-widget5__title">
                                  Great Logo Designn
                                </h4>
                                <span class="m-widget5__desc">
                                  Make Metronic Great Again.Lorem Ipsum Amet
                                </span>
                                <div class="m-widget5__info">
                                  <span class="m-widget5__author">
                                    Author:
                                  </span>
                                  <span
                                    class="m-widget5__info-author m--font-info"
                                  >
                                    Fly themes
                                  </span>
                                  <span class="m-widget5__info-label">
                                    Released:
                                  </span>
                                  <span
                                    class="m-widget5__info-date m--font-info"
                                  >
                                    23.08.17
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="m-widget5__content">
                              <div class="m-widget5__stats1">
                                <span class="m-widget5__number">19,200</span
                                ><br />
                                <span class="m-widget5__sales">sales</span>
                              </div>
                              <div class="m-widget5__stats2">
                                <span class="m-widget5__number">1046</span
                                ><br />
                                <span class="m-widget5__votes">votes</span>
                              </div>
                            </div>
                          </div>
                          <div class="m-widget5__item">
                            <div class="m-widget5__content">
                              <div class="m-widget5__pic">
                                <img
                                  class="m-widget7__img"
                                  src="assets/app/media/img//products/product10.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="m-widget5__section">
                                <h4 class="m-widget5__title">
                                  Awesome Mobile App
                                </h4>
                                <span class="m-widget5__desc">
                                  Make Metronic Great Again.Lorem Ipsum Amet
                                </span>
                                <div class="m-widget5__info">
                                  <span class="m-widget5__author">
                                    Author:
                                  </span>
                                  <span
                                    class="m-widget5__info-author m--font-info"
                                  >
                                    Fly themes
                                  </span>
                                  <span class="m-widget5__info-label">
                                    Released:
                                  </span>
                                  <span
                                    class="m-widget5__info-date m--font-info"
                                  >
                                    23.08.17
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="m-widget5__content">
                              <div class="m-widget5__stats1">
                                <span class="m-widget5__number">10,054</span
                                ><br />
                                <span class="m-widget5__sales">sales</span>
                              </div>
                              <div class="m-widget5__stats2">
                                <span class="m-widget5__number">1103</span
                                ><br />
                                <span class="m-widget5__votes">votes</span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!--end::m-widget5-->
                      </div>
                      <div
                        class="tab-pane"
                        id="m_widget5_tab3_content"
                        aria-expanded="false"
                      >
                        <!--begin::m-widget5-->
                        <div class="m-widget5">
                          <div class="m-widget5__item">
                            <div class="m-widget5__content">
                              <div class="m-widget5__pic">
                                <img
                                  class="m-widget7__img"
                                  src="assets/app/media/img//products/product10.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="m-widget5__section">
                                <h4 class="m-widget5__title">
                                  Branding Mockup
                                </h4>
                                <span class="m-widget5__desc">
                                  Make Metronic Great Again.Lorem Ipsum Amet
                                </span>
                                <div class="m-widget5__info">
                                  <span class="m-widget5__author">
                                    Author:
                                  </span>
                                  <span
                                    class="m-widget5__info-author m--font-info"
                                  >
                                    Fly themes
                                  </span>
                                  <span class="m-widget5__info-label">
                                    Released:
                                  </span>
                                  <span
                                    class="m-widget5__info-date m--font-info"
                                  >
                                    23.08.17
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="m-widget5__content">
                              <div class="m-widget5__stats1">
                                <span class="m-widget5__number">10.054</span
                                ><br />
                                <span class="m-widget5__sales">sales</span>
                              </div>
                              <div class="m-widget5__stats2">
                                <span class="m-widget5__number">1103</span
                                ><br />
                                <span class="m-widget5__votes">votes</span>
                              </div>
                            </div>
                          </div>
                          <div class="m-widget5__item">
                            <div class="m-widget5__content">
                              <div class="m-widget5__pic">
                                <img
                                  class="m-widget7__img"
                                  src="assets/app/media/img//products/product11.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="m-widget5__section">
                                <h4 class="m-widget5__title">
                                  Great Logo Designn
                                </h4>
                                <span class="m-widget5__desc">
                                  Make Metronic Great Again.Lorem Ipsum Amet
                                </span>
                                <div class="m-widget5__info">
                                  <span class="m-widget5__author">
                                    Author:
                                  </span>
                                  <span
                                    class="m-widget5__info-author m--font-info"
                                  >
                                    Fly themes
                                  </span>
                                  <span class="m-widget5__info-label">
                                    Released:
                                  </span>
                                  <span
                                    class="m-widget5__info-date m--font-info"
                                  >
                                    23.08.17
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="m-widget5__content">
                              <div class="m-widget5__stats1">
                                <span class="m-widget5__number">24,583</span
                                ><br />
                                <span class="m-widget5__sales">sales</span>
                              </div>
                              <div class="m-widget5__stats2">
                                <span class="m-widget5__number">3809</span
                                ><br />
                                <span class="m-widget5__votes">votes</span>
                              </div>
                            </div>
                          </div>
                          <div class="m-widget5__item">
                            <div class="m-widget5__content">
                              <div class="m-widget5__pic">
                                <img
                                  class="m-widget7__img"
                                  src="assets/app/media/img//products/product6.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="m-widget5__section">
                                <h4 class="m-widget5__title">
                                  Awesome Mobile App
                                </h4>
                                <span class="m-widget5__desc">
                                  Make Metronic Great Again.Lorem Ipsum Amet
                                </span>
                                <div class="m-widget5__info">
                                  <span class="m-widget5__author">
                                    Author:
                                  </span>
                                  <span
                                    class="m-widget5__info-author m--font-info"
                                  >
                                    Fly themes
                                  </span>
                                  <span class="m-widget5__info-label">
                                    Released:
                                  </span>
                                  <span
                                    class="m-widget5__info-date m--font-info"
                                  >
                                    23.08.17
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="m-widget5__content">
                              <div class="m-widget5__stats1">
                                <span class="m-widget5__number">19,200</span
                                ><br />
                                <span class="m-widget5__sales">1046</span>
                              </div>
                              <div class="m-widget5__stats2">
                                <span class="m-widget5__number">1046</span
                                ><br />
                                <span class="m-widget5__votes">votes</span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!--end::m-widget5-->
                      </div>
                    </div>

                    <!--end::Content-->
                  </div>
                </div>

                <!--end:: Widgets/Best Sellers-->
              </div>
              <div class="col-xl-4">
                <!--begin:: Widgets/Authors Profit-->
                <div
                  class="m-portlet m-portlet--bordered-semi m-portlet--full-height "
                >
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                          Authors Profit
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
                            class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand"
                          >
                            All
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
                                        >Quick Actions</span
                                      >
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon flaticon-share"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >Activity</span
                                        >
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon flaticon-chat-1"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >Messages</span
                                        >
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon flaticon-info"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >FAQ</span
                                        >
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i
                                          class="m-nav__link-icon flaticon-lifebuoy"
                                        ></i>
                                        <span class="m-nav__link-text"
                                          >Support</span
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
                    <div class="m-widget4">
                      <div class="m-widget4__item">
                        <div class="m-widget4__img m-widget4__img--logo">
                          <img
                            src="assets/app/media/img/client-logos/logo5.png"
                            alt=""
                          />
                        </div>
                        <div class="m-widget4__info">
                          <span class="m-widget4__title">
                            Trump Themes </span
                          ><br />
                          <span class="m-widget4__sub">
                            Make Metronic Great Again
                          </span>
                        </div>
                        <span class="m-widget4__ext">
                          <span class="m-widget4__number m--font-brand"
                            >+$2500</span
                          >
                        </span>
                      </div>
                      <div class="m-widget4__item">
                        <div class="m-widget4__img m-widget4__img--logo">
                          <img
                            src="assets/app/media/img/client-logos/logo4.png"
                            alt=""
                          />
                        </div>
                        <div class="m-widget4__info">
                          <span class="m-widget4__title">
                            StarBucks </span
                          ><br />
                          <span class="m-widget4__sub">
                            Good Coffee & Snacks
                          </span>
                        </div>
                        <span class="m-widget4__ext">
                          <span class="m-widget4__number m--font-brand"
                            >-$290</span
                          >
                        </span>
                      </div>
                      <div class="m-widget4__item">
                        <div class="m-widget4__img m-widget4__img--logo">
                          <img
                            src="assets/app/media/img/client-logos/logo3.png"
                            alt=""
                          />
                        </div>
                        <div class="m-widget4__info">
                          <span class="m-widget4__title">
                            Phyton </span
                          ><br />
                          <span class="m-widget4__sub">
                            A Programming Language
                          </span>
                        </div>
                        <span class="m-widget4__ext">
                          <span class="m-widget4__number m--font-brand"
                            >+$17</span
                          >
                        </span>
                      </div>
                      <div class="m-widget4__item">
                        <div class="m-widget4__img m-widget4__img--logo">
                          <img
                            src="assets/app/media/img/client-logos/logo2.png"
                            alt=""
                          />
                        </div>
                        <div class="m-widget4__info">
                          <span class="m-widget4__title">
                            GreenMakers </span
                          ><br />
                          <span class="m-widget4__sub">
                            Make Green Great Again
                          </span>
                        </div>
                        <span class="m-widget4__ext">
                          <span class="m-widget4__number m--font-brand"
                            >-$2.50</span
                          >
                        </span>
                      </div>
                      <div class="m-widget4__item">
                        <div class="m-widget4__img m-widget4__img--logo">
                          <img
                            src="assets/app/media/img/client-logos/logo1.png"
                            alt=""
                          />
                        </div>
                        <div class="m-widget4__info">
                          <span class="m-widget4__title">
                            FlyThemes </span
                          ><br />
                          <span class="m-widget4__sub">
                            A Let's Fly Fast Again Language
                          </span>
                        </div>
                        <span class="m-widget4__ext">
                          <span class="m-widget4__number m--font-brand"
                            >+$200</span
                          >
                        </span>
                      </div>
                    </div>
                  </div>
                </div>

                <!--end:: Widgets/Authors Profit-->
              </div>
            </div>

            <!--End::Section-->
          </div>
        </div>
      </div>

      <!-- end:: Body -->
@endsection
