@extends('layouts.cms')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- END: Left Aside -->
<div class="m-grid__item m-grid__item--fluid m-wrapper">
  <!-- BEGIN: Subheader -->
  <div class="m-subheader">
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
    <div class="btn {{$preset->buttonClass}}" id="open-modal">Masukkan Data Alumni</div>
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
  <table id="table" class="display">
    <thead>
      <tr>
        <th>No</th>
        <th>NISN</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Rayon</th>
        <th>Jenis Kelamin</th>
        <th>Tahun Masuk</th>
        <th>Tahun Lulus</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>No Telepon</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

    </tbody>
  </table>
  <!--end: Datatable -->
</div>
</div>
</div>

</div>
</div>
<!-- Modal -->
<div class="modal fade " id="modal-alumni"  tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-alumniTitle">Data Alumni</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Body Input -->
        <!-- Nisn -->
        <form id="formalumni" class="form-horizontal">
        <div class="form-group m-form__group row">
          <label class="form-control-label col-lg-3 mt-4">NIS</label>
          <div class="col-lg-9 mt-4">
            <input type="text" name="nis" class="form-control m-input" placeholder="">
          </div>
          <label class="form-control-label col-lg-3 mt-4">NISN</label>
          <div class="col-lg-9 mt-4">
            <input type="text" name="nisn" class="form-control m-input" placeholder="">
          </div>

          <!-- Nama -->
          <label class="form-control-label col-lg-3 mt-4">Nama</label>
          <div class="col-lg-9 mt-4">
            <input type="text" name="nama" class="form-control m-input" placeholder="">
          </div>
          <!-- Jurusan -->
          <label class="form-control-label col-lg-3 mt-4">Jurusan</label>
          <div class="col-lg-9 mt-4">
            <div class="m-form__control">
              <select name="jurusan" class="form-control">
                  <option>----Pilih Jurusan-----</option>
                @foreach($jurusan as $j)
                  <option value="{{$j->id}}">{{$j->jurusan}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <!-- Rayon -->
          <label class="form-control-label col-lg-3 mt-4">Rayon</label>
          <div class="col-lg-9 mt-4">
            <div class="m-form__control">
              <select name="rayon" class="form-control">
                <option>----Pilih Rayon-----</option>
                @foreach($rayon as $r)
                  <option value="{{$r->id}}">{{$r->rayon}}</option>
                @endforeach
              </select>
            </div>
          </div>

          <!-- JK -->

          <label class="form-control-label col-lg-3 mt-4">Jenis Kelamin</label>
          <div class="col-lg-9 mt-4">
            <div class="m-radio-inline">
              <label class="m-radio m-radio--solid m-radio--primary">
                <input type="radio" name="jk" value="male" checked>Laki-Laki
                <span></span>
              </label>
              <label class="m-radio m-radio--solid m-radio--primary">
                <input type="radio" name="jk" value="female"> Perempuan
                <span></span>
              </label>
            </div>
          </div>

          <!-- Tgl Masuk -->
          <label class="form-control-label col-lg-3 mt-4">Tahun Masuk</label>
          <div class="col-lg-9 mt-4">
            <div class="input-group m-input-group">
              <input type="number" name="masuk" class="form-control" id="" placeholder="" />
            </div>
          </div>
          <!-- Tgl Keluar -->
          <label class="form-control-label col-lg-3 mt-4">Tahun Lulus</label>
          <div class="col-lg-9 mt-4">
            <div class="input-group m-input-group">
              <input type="number" name="lulus" class="form-control" id="" placeholder="" />
            </div>
          </div>
          <!-- Alamat -->

          <label class="form-control-label col-lg-3 mt-4">Alamat</label>
          <div class="col-lg-9 mt-4">
            <textarea name="alamat" class="form-control m-input"></textarea>
          </div>
          <!-- Email -->  

          <label class="form-control-label col-lg-3 mt-4">Email</label>
          <div class="col-lg-9 mt-4">
            <input type="email" name="email" class="form-control m-input" placeholder="">
          </div>

          <!-- Nao telp -->
          <label class="form-control-label col-lg-3 mt-4">Nomor Telepon</label>
          <div class="col-lg-9 mt-4">
            <input type="number" name="telp" class="form-control m-input" placeholder="">
          </div>

          <!-- stat -->
          <label class="form-control-label col-lg-3 mt-4">Status</label>
          <div class="col-lg-9 mt-4">
            <div class="m-form__control">
              <select name="status" class="form-control">
                <option>----Pilih Status-----</option>
                @foreach($status as $s)
                  <option>{{$s->status}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="saveBtn" class="btn {{$preset->buttonClass}}">Save Data</button>
      </div>
    </div>
  </div>
</div>
<!--End::Section-->
<!--End::Section-->

</div>
</div>
</div>

<script type="text/javascript">

$("#open-modal").click(function(){
    $('#formalumni').trigger("reset");
    $('#modal-alumni').modal('show');
  });

var table = $('#table').DataTable({
    processing: true,
    serverSide: true,
    scrollX: true,
    scrollY: false,
    ajax: "json/alumni",
    "order": [[ 1, 'asc' ]],
    columns: [
    { "data": null,"sortable": false, 
    render: function (data, type, row, meta) {
      return meta.row + meta.settings._iDisplayStart + 1;
    }  
  },
  {data: 'nisn'},
  {data: 'nis'},
  {data: 'name'},
  {data: 'jurusan'},
  {data: 'rayon'},
  {data: 'jk'},
  {data: 'masuk'},
  {data: 'lulus'},
  {data: 'alamat'},
  {data: 'email'},
  {data: 'telp'},
  {data: 'status'},
  {data: "user_id",
  "searchable": false,
  "sortable": false,
  render: function (id, type, full, meta) {
    return '<div class="btn-group"><a href="javascript:void(0)" data-toggle="tooltip" id="detail" data-id="'+id+'" data-original-title="Delete" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a> <a href="javascript:void(0)" data-toggle="tooltip" id="edit"  data-id="'+id+'" data-original-title="Delete" class="btn btn-warning btn-sm"><i class="fa fa-edit" style="color:white;"></i></a>  <a href="javascript:void(0)" data-toggle="tooltip" id="delete"  data-id="'+id+'" data-original-title="Delete" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></div>';
  },
},
],
});

$("#saveBtn").click(function (e) {
    $.ajaxSetup({ 
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }   
    })
    e.preventDefault();

    $.ajax({
      data: $('#formalumni').serialize(),
      url: "{{ route('inputalumni.store') }}",
      type: "POST",
      dataType: 'json',
      success: function (data) {
        $('#formalumni').trigger("reset");
        $('#modal-alumni').modal('hide');
        table.draw();
      },
      error: function (data) {
        console.log('Error:', data);
      }
    });
  });

$(document).on('click','#delete',function(){
  var id = $(this).data("id");
  var token = $("meta[name='csrf-token']").attr("content");
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
  })
  $.ajax({
    type: "DELETE",
    url: "inputalumni/delete/"+id,
    data: {
      "id": id,
      "_token": token,
    },
    success: function (data) {
      table.draw();
    },
    error: function (data) {
      console.log('Error:', data);
    }
  });
});
</script>


@endsection