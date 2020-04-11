@extends('layouts.header')
@section('RiwayatStatus','m-menu__item--active')
@section('title','SIMBKK | Riwayat Status')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- END: Left Aside -->
<div class="m-grid__item m-grid__item--fluid m-wrapper">
  <div class="m-subheader ">
    <div class="d-flex align-items-center">
      <div class="mr-auto">
        <h3 class="m-subheader__title ">Riwayat Status</h3>
      </div>
    </div>
  </div>
  <!-- Begin Body -->
  <!--Begin::Section-->
  <br>
  <div class="container">
    <div class="row">


      <div class="col-xl-12">
        <div class="m-portlet m-portlet--mobile ">
          <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
              <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                  Riwayat Status
                </h3>
              </div>
            </div>

          </div>
          <div class="m-portlet__body">
            <!--begin: Datatable -->
            <table id="table" class="display">
              <thead>
                <tr>
                  <th>No</th>
                  <th style="width:120px">created_at</th>
                  <th>Status</th>
                  <th>Nama</th>
                  <th>Jenis</th>
                  <th>Alamat</th>
                  <th>Kota</th>
                  <th>Durasi</th>
                  <th>Action</th>
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
  

    <!--End::Section-->
  </div>
</div>
</div>
<script type="text/javascript">
  var table = $('#table').DataTable({
    processing: true,
    serverSide: true,
    ajax: "json/statusDetail",
    "order": [[ 1, 'asc' ]],
    columns: [
      { "data": null,"sortable": false, 
    render: function (data, type, row, meta) {
      return meta.row + meta.settings._iDisplayStart + 1;
    }  
  },
  { data: 'created_at', name: 'created_at' },
  { data: 'status', name: 'status'},
  { data: 'nama', name: 'nama' },
  { data: 'jabatan', name: 'jabatan' },
  { data: 'alamat', name: 'alamat' },
  { data: 'kota', name: 'kota' },
  { data: 'durasi_kontrak', name: 'durasi_kontrak'},
  {data: "id",
  "searchable": false,
  "sortable": false,
  render: function (id, type, full, meta) {
    return '<div class="btn-group"><a href="javascript:void(0)" data-toggle="tooltip" id="delete"  data-id="'+id+'" data-original-title="Delete" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></div>';
  },
},
],
});

  $(document).on('click','#delete',function(){
    var id = $(this).data("id");
    console.log(id);
  swal({
  title: 'Apakah Anda yakin?',
  type: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Ya',
  cancelButtonText: 'Tidak'
}).then((result) => {
  if (result.value) {
    var id = $(this).data("id");
  var token = $("meta[name='csrf-token']").attr("content");
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
  })
  $.ajax({
    type: "DELETE",
    url: "riwayatStatus/delete/"+id,
    data: {
      "id": id,
      "_token": token,
    },
    success: function (data) {
      table.draw();
      swal({
          title: 'Data Terhapus!',
          type: 'success',
          showConfirmButton: false,
          timer: 1500,
      })
    },
    error: function (data) {
      console.log('Error:', data);
    }
  });
  }
});
});
</script>
@include('layouts.footer')
@endsection

