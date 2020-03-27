<!DOCTYPE html>
<html lang="en">
  <!-- begin::Head -->
  <head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="description" content="Latest updates and statistic charts" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"
    />

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
      WebFont.load({
        google: {
          families: [
            "Poppins:300,400,500,600,700",
            "Roboto:300,400,500,600,700"
          ]
        },
        active: function() {
          sessionStorage.fonts = true;
        }
      });
    </script>

    <!--end::Web font -->

    <!--begin::Global Theme Styles -->

    <link
      href="/assets/vendors/base/vendors.bundle.css"
      rel="stylesheet"
      type="text/css"
    />

    <!--RTL version:<link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
    <link
      href="/assets/demo/default/base/style.bundle.css"
      rel="stylesheet"
      type="text/css"
    />

    <!--RTL version:<link href="assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--end::Global Theme Styles -->

    <!--begin::Page Vendors Styles -->
    <link
      href="/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css"
      rel="stylesheet"
      type="text/css"
    />

    <!--RTL version:<link href="/assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--end::Page Vendors Styles -->
    <link
      rel="shortcut icon"
      href="/assets/demo/default/media/img/logo/favicon.ico"
    />

    <!--begin::Customize Css -->
    <link href="/assets/customize.css" rel="stylesheet" type="text/css" />
  </head>

  <!-- end::Head -->

  <!-- begin::Body -->
  <body
    class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"
  >
    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">
      <!-- BEGIN: Header -->
      <header
        id="m_header"
        class="m-grid__item    m-header "
        m-minimize-offset="200"
        m-minimize-mobile-offset="200"
      >
        <div class="m-container m-container--fluid m-container--full-height">
          <div class="m-stack m-stack--ver m-stack--desktop">
            <!-- BEGIN: Brand -->
            <div class="m-stack__item m-brand  m-brand--skin-light ">
              <div class="m-stack m-stack--ver m-stack--general">
                <div class="m-stack__item m-stack__item--middle m-brand__logo">
                  <a href="index.html" class="m-brand__logo-wrapper">
                    <img
                      alt=""
                      src="/assets/demo/default/media/img/logo/logo.svg"
                    />
                  </a>
                </div>
                <div class="m-stack__item m-stack__item--middle m-brand__tools">
                  <!-- BEGIN: Left Aside Minimize Toggle -->
                  
                  <a
                    href="javascript:;"
                    id="m_aside_left_minimize_toggle"
                    class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  "
                  >
                    <span></span>
                  </a>

                  <!-- END -->

                  <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                  <a
                    href="javascript:;"
                    id="m_aside_left_offcanvas_toggle"
                    class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block"
                  >
                    <span></span>
                  </a>

                  <!-- END -->

                  <!-- BEGIN: Responsive Header Menu Toggler -->
                  <!--<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>-->

                  <!-- END -->

                  <!-- BEGIN: Topbar Toggler -->
                  <a
                    id="m_aside_header_topbar_mobile_toggle"
                    href="javascript:;"
                    class="m-brand__icon m--visible-tablet-and-mobile-inline-block"
                  >
                    <i class="la la-ellipsis-v "></i>
                  </a>

                  <!-- BEGIN: Topbar Toggler -->
                </div>
              </div>
            </div>

            <!-- END: Brand -->
            <div
              class="m-stack__item m-stack__item--fluid m-header-head"
              id="m_header_nav"
            >
              <!-- BEGIN: Topbar -->
              <div
                id="m_header_topbar"
                class="m-topbar m-stack m-stack--ver m-stack--general m-stack--fluid"
              >
                <div class="m-stack__item m-topbar__nav-wrapper">
                  <ul class="m-topbar__nav m-nav m-nav--inline flex">
                    <li id="view-frontend" class="m-nav__item">
                      <a href="#" class="m-menu__link">
                        <!-- <span class=" m-menu__link-text">View Frontend</span> -->
                        <!-- <i class="m-menu__link-icon la la-external-link"></i> -->
                      </a>
                    </li>
                    <li
                      id="avatar"
                      class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
                      m-dropdown-toggle="click"
                    >
                      <a href="#" class="m-nav__link m-dropdown__toggle">
                        <span class="m-topbar__username">{{ Auth::user()->name }}</span>
                        <span class="m-topbar__userpic">
                          <img
                            src="assets/app/media/img/users/user4.jpg"
                            class="m--img-rounded m--marginless"
                            alt=""
                          />
                        </span>
                      </a>
                      <div class="m-dropdown__wrapper">
                        <span
                          class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"
                        ></span>
                        <div class="m-dropdown__inner">
                          <div
                            class="m-dropdown__header m--align-center"
                            style="background: url(/assets/app/media/img/bg/bg-9.jpg); background-size: cover;"
                          >
                            <div class="m-card-user m-card-user--skin-light">
                              <div class="m-card-user__pic">
                                <img
                                  
                                  class="m--img-rounded m--marginless"
                                  alt=""
                                />
                              </div>
                              <div class="m-card-user__details">
                                <span
                                  class="m-card-user__name m--font-weight-500"
                              >{{ Auth::user()->name }}</span
                                >
                                <a href="" class="m-card-user__email m-link"
                                  >{{ Auth::user()->username}}</a
                                >
                              </div>
                            </div>
                          </div>
                          <div class="m-dropdown__body">
                            <div class="m-dropdown__content">
                              <ul class="m-nav m-nav--skin-light">
                                <li class="m-nav__section m--hide">
                                  <span class="m-nav__section-text"
                                    >Section</span
                                  >
                                </li>
                                <li class="m-nav__item">
                                <a href="{{url('user/profile')}}" class="m-nav__link">
                                    <i class="m-nav__link-icon la la-user"></i>
                                    <span class="m-nav__link-text"
                                      >My Profile</span
                                    >
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="!#" class="m-nav__link">
                                    <i
                                      class="m-nav__link-icon la la-settings-alt"
                                    ></i>
                                    <span class="m-nav__link-title">
                                      <span class="m-nav__link-wrap">
                                        <span class="m-nav__link-text"
                                          >Change Password</span
                                        >
                                        <!-- <span class="m-nav__link-badge"
                                          ><span
                                            class="m-badge m-badge--success"
                                            >2</span
                                          ></span
                                        > -->
                                      </span>
                                    </span>
                                  </a>
                                </li>
                                <!-- <li class="m-nav__item">
                                  <a href="#!" class="m-nav__link">
                                    <i
                                      class="m-nav__link-icon la la-comments"
                                    ></i>
                                    <span class="m-nav__link-text"
                                      >Messages</span
                                    >
                                  </a>
                                </li> -->
                                <!-- <li
                                  class="m-nav__separator m-nav__separator--fit"
                                ></li> -->
                                <!-- <li class="m-nav__item">
                                  <a href="#!" class="m-nav__link">
                                    <i
                                      class="m-nav__link-icon la la-question-circle"
                                    ></i>
                                    <span class="m-nav__link-text">FAQ</span>
                                  </a>
                                </li> -->
                                <!-- <li class="m-nav__item">
                                  <a href="#!" class="m-nav__link">
                                    <i
                                      class="m-nav__link-icon la la-life-bouy"
                                    ></i>
                                    <span class="m-nav__link-text"
                                      >Support</span
                                    >
                                  </a>
                                </li> -->
                                <li
                                  class="m-nav__separator m-nav__separator--fit"
                                ></li>
                                <li class="m-nav__item">
                                    <a href="{{route('logout')}}" class="m-nav__link"
                                    onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            
                                        <i
                                          class="m-nav__link-icon la la-sign-out"
                                        ></i>
                                        <span class="m-nav__link-text">Logout</span>
                                        
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
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

              <!-- END: Topbar -->
            </div>
          </div>
        </div>
      </header>

      <!-- END: Header -->

      <!-- begin::Body -->
      <div
        class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body"
      >
        <!-- BEGIN: Left Aside -->
        <button
          class="m-aside-left-close  m-aside-left-close--skin-light "
          id="m_aside_left_close_btn"
        >
          <i class="la la-close"></i>
        </button>
        <div
          id="m_aside_left"
          class="m-grid__item	m-aside-left  m-aside-left--skin-light "
        >
          <!-- BEGIN: Aside Menu -->
          
          <div
            id="m_ver_menu"
            class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light "
            m-menu-vertical="1"
            m-menu-scrollable="1"
            m-menu-dropdown-timeout="500"
            style="position: relative;"
          >
          
            <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                
              <li
                class="m-menu__item  m-menu__item--active"
                aria-haspopup="true"
              >
              
                <a href="{{url('user')}}" class="m-menu__link "
                  ><i class="m-menu__link-icon la la-dashboard"></i
                  ><span class="m-menu__link-title"
                    ><span class="m-menu__link-wrap">
                      <span class="m-menu__link-text">Dashboard</span
                      ><span class="m-menu__link-badge"
                        ></span>       
                      </span>
                      </span>
                  </a>
              </li>
              {{-- <li class="m-menu__item" aria-haspopup="true">
              <a href="" class="m-menu__link m-menu__toggle"
                  ><i class="m-menu__link-icon la la-bar-chart"></i
                  ><span class="m-menu__link-text">Input Data</span></a
                >
              </li> --}}
        </div>
          <!-- END: Aside Menu -->
        </div>

        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
          <!-- BEGIN: Subheader -->
          <div class="m-subheader ">
            <div class="d-flex align-items-center">
              <div class="mr-auto">
                <h3 class="m-subheader__title ">Dashboard</h3>
              </div>
              <div>
                <span class="m-subheader__daterange"id="m_dashboard_daterangepicker">
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
          @yield('container')
          	<!-- end:: Page -->
		<!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>

		<!-- end::Scroll Top -->

		<!--begin::Global Theme Bundle -->
		<script src="/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts -->
		<script src="/assets/customize.js" type="text/javascript"></script>
		<script src="/assets/demo/default/custom/crud/forms/widgets/autosize.js" type="text/javascript"></script>
		<script src="/assets/demo/default/custom/crud/forms/widgets/select2.js" type="text/javascript"></script>
		<script src="/assets/demo/default/custom/crud/forms/widgets/summernote.js" type="text/javascript"></script>
		<script src="/assets/demo/default/custom/crud/forms/widgets/bootstrap-select.js" type="text/javascript"></script>
		<script src="/assets/demo/default/custom/crud/forms/widgets/bootstrap-datetimepicker.js" type="text/javascript"></script>
		<script src="/assets/demo/default/custom/crud/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
		<script src="/assets/demo/default/custom/crud/forms/widgets/bootstrap-daterangepicker.js" type="text/javascript"></script>
		<script src="/assets/demo/default/custom/components/base/sweetalert2.js" type="text/javascript"></script>
		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>