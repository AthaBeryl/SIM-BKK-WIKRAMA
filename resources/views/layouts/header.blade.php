<!DOCTYPE html>
<html lang="en">
  <!-- begin::Head -->
  <head>
    <meta charset="utf-8" />
    <title>CMS</title>
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
      href="assets/vendors/base/vendors.bundle.css"
      rel="stylesheet"
      type="text/css"
    />

    <!--RTL version:<link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
    <link
      href="assets/demo/default/base/style.bundle.css"
      rel="stylesheet"
      type="text/css"
    />

    <!--RTL version:<link href="assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--end::Global Theme Styles -->

    <!--begin::Page Vendors Styles -->
    <link
      href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.css"
      rel="stylesheet"
      type="text/css"
    />

    <!--RTL version:<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--end::Page Vendors Styles -->
    <link
      rel="shortcut icon"
      href="assets/demo/default/media/img/logo/favicon.ico"
    />

    <!--begin::Customize Css -->
    <link href="assets/customize.css" rel="stylesheet" type="text/css" />
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
                      src="assets/demo/default/media/img/logo/logo.svg"
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
                        <span class=" m-menu__link-text">View Frontend</span>
                        <i class="m-menu__link-icon la la-external-link"></i>
                      </a>
                    </li>
                    <li
                      id="avatar"
                      class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
                      m-dropdown-toggle="click"
                    >
                      <a href="#" class="m-nav__link m-dropdown__toggle">
                        <span class="m-topbar__username">Administrator</span>
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
                            style="background: url(assets/app/media/img/bg/bg-9.jpg); background-size: cover;"
                          >
                            <div class="m-card-user m-card-user--skin-light">
                              <div class="m-card-user__pic">
                                <img
                                  src="assets/app/media/img/users/user4.jpg"
                                  class="m--img-rounded m--marginless"
                                  alt=""
                                />
                              </div>
                              <div class="m-card-user__details">
                                <span
                                  class="m-card-user__name m--font-weight-500"
                                  >Administrator</span
                                >
                                <a href="" class="m-card-user__email m-link"
                                  >admin@4visionmedia.com</a
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
                                  <a href="#!" class="m-nav__link">
                                    <i class="m-nav__link-icon la la-user"></i>
                                    <span class="m-nav__link-text"
                                      >My Profile</span
                                    >
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="#!" class="m-nav__link">
                                    <i
                                      class="m-nav__link-icon la la-share-alt"
                                    ></i>
                                    <span class="m-nav__link-title">
                                      <span class="m-nav__link-wrap">
                                        <span class="m-nav__link-text"
                                          >Activity</span
                                        >
                                        <span class="m-nav__link-badge"
                                          ><span
                                            class="m-badge m-badge--success"
                                            >2</span
                                          ></span
                                        >
                                      </span>
                                    </span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="#!" class="m-nav__link">
                                    <i
                                      class="m-nav__link-icon la la-comments"
                                    ></i>
                                    <span class="m-nav__link-text"
                                      >Messages</span
                                    >
                                  </a>
                                </li>
                                <li
                                  class="m-nav__separator m-nav__separator--fit"
                                ></li>
                                <li class="m-nav__item">
                                  <a href="#!" class="m-nav__link">
                                    <i
                                      class="m-nav__link-icon la la-question-circle"
                                    ></i>
                                    <span class="m-nav__link-text">FAQ</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="#!" class="m-nav__link">
                                    <i
                                      class="m-nav__link-icon la la-life-bouy"
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
                                  <a href="login.html" class="m-nav__link">
                                    <i
                                      class="m-nav__link-icon la la-sign-out"
                                    ></i>
                                    <span class="m-nav__link-text">Logout</span>
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
                <a href="index.html" class="m-menu__link "
                  ><i class="m-menu__link-icon la la-dashboard"></i
                  ><span class="m-menu__link-title"
                    ><span class="m-menu__link-wrap">
                      <span class="m-menu__link-text">Dashboard</span
                      ><span class="m-menu__link-badge"
                        ><span class="m-badge m-badge--danger">2</span></span
                      ></span
                    ></span
                  ></a
                >
              </li>
              <li class="m-menu__section ">
                <h4 class="m-menu__section-text">Module</h4>
                <i class="m-menu__section-icon flaticon-more-v2"></i>
              </li>
              <li class="m-menu__item" aria-haspopup="true">
                <a href="list.html" class="m-menu__link m-menu__toggle"
                  ><i class="m-menu__link-icon la la-tags"></i
                  ><span class="m-menu__link-text">Page</span></a
                >
              </li>
              <li class="m-menu__item" aria-haspopup="true">
                <a href="javascript:;" class="m-menu__link m-menu__toggle"
                  ><i class="m-menu__link-icon la la-file-text "></i
                  ><span class="m-menu__link-text">Article</span></a
                >
              </li>
              <li class="m-menu__item" aria-haspopup="true">
                <a href="javascript:;" class="m-menu__link m-menu__toggle"
                  ><i class="m-menu__link-icon la la-film"></i
                  ><span class="m-menu__link-text">Gallery</span></a
                >
              </li>
              <li class="m-menu__item" aria-haspopup="true">
                <a href="javascript:;" class="m-menu__link m-menu__toggle"
                  ><i class="m-menu__link-icon la la-envelope-o"></i
                  ><span class="m-menu__link-text">Inquiry</span></a
                >
              </li>
              <li class="m-menu__item" aria-haspopup="true">
                <a href="javascript:;" class="m-menu__link m-menu__toggle"
                  ><i class="m-menu__link-icon la la-image"></i
                  ><span class="m-menu__link-text">Banner</span></a
                >
              </li>
              <li class="m-menu__section ">
                <h4 class="m-menu__section-text">Template</h4>
                <i class="m-menu__section-icon flaticon-more-v2"></i>
              </li>
              <li class="m-menu__item" aria-haspopup="true">
                <a href="javascript:;" class="m-menu__link m-menu__toggle"
                  ><i class="m-menu__link-icon la la-language"></i
                  ><span class="m-menu__link-text">Language File</span></a
                >
              </li>
              <li class="m-menu__item" aria-haspopup="true">
                <a href="javascript:;" class="m-menu__link m-menu__toggle"
                  ><i class="m-menu__link-icon la la-gears"></i
                  ><span class="m-menu__link-text">Widget</span></a
                >
              </li>
              <li class="m-menu__item" aria-haspopup="true">
                <a href="javascript:;" class="m-menu__link m-menu__toggle"
                  ><i class="m-menu__link-icon la la-flag-o"></i
                  ><span class="m-menu__link-text">Template Preference</span></a
                >
              </li>
              <li class="m-menu__section ">
                <h4 class="m-menu__section-text">Settings</h4>
                <i class="m-menu__section-icon flaticon-more-v2"></i>
              </li>
              <li class="m-menu__item" aria-haspopup="true">
                <a href="javascript:;" class="m-menu__link m-menu__toggle"
                  ><i class="m-menu__link-icon la la-sliders"></i
                  ><span class="m-menu__link-text">System Preference</span></a
                >
              </li>
              <li class="m-menu__item" aria-haspopup="true">
                <a href="javascript:;" class="m-menu__link m-menu__toggle"
                  ><i class="m-menu__link-icon la la-folder-open"></i
                  ><span class="m-menu__link-text">File Manager</span></a
                >
              </li>
              <li class="m-menu__item" aria-haspopup="true">
                <a href="javascript:;" class="m-menu__link m-menu__toggle"
                  ><i class="m-menu__link-icon la la-users"></i
                  ><span class="m-menu__link-text">User Manager</span></a
                >
              </li>
              <li class="m-menu__section ">
                <h4 class="m-menu__section-text">Optional</h4>
                <i class="m-menu__section-icon flaticon-more-v2"></i>
              </li>
              <li
                class="m-menu__item  m-menu__item--submenu"
                aria-haspopup="true"
                m-menu-submenu-toggle="hover"
              >
                <a href="javascript:;" class="m-menu__link m-menu__toggle"
                  ><i class="m-menu__link-icon la la-list"></i
                  ><span class="m-menu__link-text">Dropdown Menu</span
                  ><i class="m-menu__ver-arrow la la-angle-right"></i
                ></a>
                <div class="m-menu__submenu ">
                  <span class="m-menu__arrow"></span>
                  <ul class="m-menu__subnav">
                    <li
                      class="m-menu__item  m-menu__item--parent"
                      aria-haspopup="true"
                    >
                      <span class="m-menu__link"
                        ><span class="m-menu__link-text"
                          >Custom Pages</span
                        ></span
                      >
                    </li>
                    <li
                      class="m-menu__item  m-menu__item--submenu"
                      aria-haspopup="true"
                      m-menu-submenu-toggle="hover"
                    >
                      <a href="javascript:;" class="m-menu__link m-menu__toggle"
                        ><i class="m-menu__link-bullet m-menu__link-bullet--dot"
                          ><span></span></i
                        ><span class="m-menu__link-text">Dropdown</span
                        ><i class="m-menu__ver-arrow la la-angle-right"></i
                      ></a>
                      <div class="m-menu__submenu ">
                        <span class="m-menu__arrow"></span>
                        <ul class="m-menu__subnav">
                          <li class="m-menu__item " aria-haspopup="true">
                            <a
                              target="_blank"
                              href="javascript:;"
                              class="m-menu__link "
                              ><i
                                class="m-menu__link-bullet m-menu__link-bullet--dot"
                                ><span></span></i
                              ><span class="m-menu__link-text"
                                >Sub Dropdown - 1</span
                              ></a
                            >
                          </li>
                          <li class="m-menu__item " aria-haspopup="true">
                            <a
                              target="_blank"
                              href="javascript:;"
                              class="m-menu__link "
                              ><i
                                class="m-menu__link-bullet m-menu__link-bullet--dot"
                                ><span></span></i
                              ><span class="m-menu__link-text"
                                >Sub Dropdown - 2</span
                              ></a
                            >
                          </li>
                          <li class="m-menu__item " aria-haspopup="true">
                            <a
                              target="_blank"
                              href="javascript:;"
                              class="m-menu__link "
                              ><i
                                class="m-menu__link-bullet m-menu__link-bullet--dot"
                                ><span></span></i
                              ><span class="m-menu__link-text"
                                >Sub Dropdown - 3</span
                              ></a
                            >
                          </li>
                          <li class="m-menu__item " aria-haspopup="true">
                            <a
                              target="_blank"
                              href="javascript:;"
                              class="m-menu__link "
                              ><i
                                class="m-menu__link-bullet m-menu__link-bullet--dot"
                                ><span></span></i
                              ><span class="m-menu__link-text"
                                >Sub Dropdown - 4</span
                              ></a
                            >
                          </li>
                          <li class="m-menu__item " aria-haspopup="true">
                            <a
                              target="_blank"
                              href="javascript:;"
                              class="m-menu__link "
                              ><i
                                class="m-menu__link-bullet m-menu__link-bullet--dot"
                                ><span></span></i
                              ><span class="m-menu__link-text"
                                >Sub Dropdown - 5</span
                              ></a
                            >
                          </li>
                          <li class="m-menu__item " aria-haspopup="true">
                            <a
                              target="_blank"
                              href="javascript:;"
                              class="m-menu__link "
                              ><i
                                class="m-menu__link-bullet m-menu__link-bullet--dot"
                                ><span></span></i
                              ><span class="m-menu__link-text"
                                >Sub Dropdown - 6</span
                              ></a
                            >
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li
                      class="m-menu__item  m-menu__item--submenu"
                      aria-haspopup="true"
                      m-menu-submenu-toggle="hover"
                    >
                      <a href="javascript:;" class="m-menu__link m-menu__toggle"
                        ><i class="m-menu__link-bullet m-menu__link-bullet--dot"
                          ><span></span></i
                        ><span class="m-menu__link-text">Dropdown</span
                        ><i class="m-menu__ver-arrow la la-angle-right"></i
                      ></a>
                      <div class="m-menu__submenu ">
                        <span class="m-menu__arrow"></span>
                        <ul class="m-menu__subnav">
                          <li class="m-menu__item " aria-haspopup="true">
                            <a
                              target="_blank"
                              href="javascript:;"
                              class="m-menu__link "
                              ><i
                                class="m-menu__link-bullet m-menu__link-bullet--dot"
                                ><span></span></i
                              ><span class="m-menu__link-text"
                                >Sub Dropdown - 1</span
                              ></a
                            >
                          </li>
                          <li class="m-menu__item " aria-haspopup="true">
                            <a
                              target="_blank"
                              href="javascript:;"
                              class="m-menu__link "
                              ><i
                                class="m-menu__link-bullet m-menu__link-bullet--dot"
                                ><span></span></i
                              ><span class="m-menu__link-text"
                                >Sub Dropdown - 2</span
                              ></a
                            >
                          </li>
                          <li class="m-menu__item " aria-haspopup="true">
                            <a
                              target="_blank"
                              href="javascript:;"
                              class="m-menu__link "
                              ><i
                                class="m-menu__link-bullet m-menu__link-bullet--dot"
                                ><span></span></i
                              ><span class="m-menu__link-text"
                                >Sub Dropdown - 3</span
                              ></a
                            >
                          </li>
                          <li class="m-menu__item " aria-haspopup="true">
                            <a
                              target="_blank"
                              href="javascript:;"
                              class="m-menu__link "
                              ><i
                                class="m-menu__link-bullet m-menu__link-bullet--dot"
                                ><span></span></i
                              ><span class="m-menu__link-text"
                                >Sub Dropdown - 4</span
                              ></a
                            >
                          </li>
                          <li class="m-menu__item " aria-haspopup="true">
                            <a
                              target="_blank"
                              href="javascript:;"
                              class="m-menu__link "
                              ><i
                                class="m-menu__link-bullet m-menu__link-bullet--dot"
                                ><span></span></i
                              ><span class="m-menu__link-text"
                                >Sub Dropdown - 5</span
                              ></a
                            >
                          </li>
                          <li class="m-menu__item " aria-haspopup="true">
                            <a
                              target="_blank"
                              href="javascript:;"
                              class="m-menu__link "
                              ><i
                                class="m-menu__link-bullet m-menu__link-bullet--dot"
                                ><span></span></i
                              ><span class="m-menu__link-text"
                                >Sub Dropdown - 6</span
                              ></a
                            >
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>

          <!-- END: Aside Menu -->
        </div>
