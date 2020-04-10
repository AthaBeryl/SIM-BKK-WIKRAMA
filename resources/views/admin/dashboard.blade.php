<!-- END: Left Aside -->
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
      <div class="d-flex align-items-center">
        <div class="mr-auto">
          <h3 class="m-subheader__title ">Dashboard</h3>
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

          

            <div class="m-portlet__body">
              
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
