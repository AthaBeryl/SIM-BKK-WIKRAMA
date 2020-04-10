@extends('layouts.header')
@section('pesan','m-menu__item--active')
@section('title','SIMBKK | Pesan')
@section('content')
<style>
.display{
    table-layout:fixed;
}

.isi{
  display: -webkit-box;
  -webkit-line-clamp: 4;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
}
</style>
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- END: Left Aside -->
<div class="m-grid__item m-grid__item--fluid m-wrapper">
  <div class="m-subheader ">
    <div class="d-flex align-items-center">
      <div class="mr-auto">
        <h3 class="m-subheader__title ">Info Sekolah</h3>
      </div>
    </div>
  </div>
  <!-- Begin Body -->
  <!--Begin::Section-->
  <br>
  <div class="container">
    <div class="row">
      <div class="col-xl-12 mb-4">
        <a href="/inputinfosekolah"><div class="btn {{$preset->buttonClass}}" >Masukkan Info Sekolah</div></a>
      </div>

      <div class="col-xl-12">
        <div class="m-portlet m-portlet--mobile ">
          <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
              <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                  Info Sekolah
                </h3>
              </div>
            </div>

          </div>
          <div class="m-portlet__body">
            <!--begin: Datatable -->
            <table id="table" class="display">
              <thead>
                <tr>
                  <th style="width:10px">No</th>
                  <th style="width:70px">NIS</th>
                  <th>Nama</th>
                  <th style="width:300px">Pesan</th>
                  <th style="width:100px">Status</th>
                  <th style="width:140px">Action</th>
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

<div class="modal fade" id="modal-detail" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Pesan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-borderless">
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td id="nis"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td id="nama"></td>
            </tr>
            <tr>
                <td>Pesan</td>
                <td>:</td>
                <td id="isi"></td>
            </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

  var table = $('#table').DataTable({
    processing: true,
    serverSide: true,
    ajax: "json/pesan",
    "order": [[ 1, 'asc' ]],
    columns: [
    { "data": null,"sortable": false, 
    render: function (data, type, row, meta) {
      return meta.row + meta.settings._iDisplayStart + 1;
    }  
  },
  {data: 'nis'},
  {data: 'name'},
  {data: "pesan",
  "searchable": false,
  "sortable": false,
  render: function (id, type, full, meta) {
    return '<div class="isi">'+id+'</div>';
  },
},
  {data: 'status'},
  {data: "id",
  "searchable": false,
  "sortable": false,
  render: function (id, type, full, meta) {
    return '<div class="btn-group"><a href="javascript:void(0)" data-toggle="tooltip" id="active"  data-id="'+id+'" class="btn btn-success btn-sm"><i class="fa fa-check" style="color:white;"></i></a><a href="javascript:void(0)" data-toggle="tooltip" id="deactive"  data-id="'+id+'" class="btn btn-danger btn-sm"><i class="fa fa-times" style="color:white;"></i></a>&nbsp&nbsp</div><div class="btn-group"><a href="javascript:void(0)" data-toggle="tooltip" id="detail"  data-id="'+id+'" class="btn btn-info btn-sm"><i class="fa fa-eye" style="color:white;"></i></a>  <a href="javascript:void(0)" data-toggle="tooltip" id="delete"  data-id="'+id+'" data-original-title="Delete" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></div>';
  },
},
],
});

  $(document).on('click','#active',function(){
    var id = $(this).data("id");
    $.ajaxSetup({ 
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }   
    })

    $.ajax({
      data: {"id": id},
      url: "/pesan/active/"+id,
      type: "POST",
      dataType: 'json',
      success: function (data) {
        table.draw();
        swal({
          title: 'Aktif!',
          type: 'success',
          showConfirmButton: false,
          timer: 1500,
        })
      },
      error: function (data) {
        console.log('Error:', data);
      }
    });
  });

  $(document).on('click','#deactive',function(){
    var id = $(this).data("id");
    $.ajaxSetup({ 
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }   
    })

    $.ajax({
      data: {"id": id},
      url: "/pesan/deactive/"+id,
      type: "POST",
      dataType: 'json',
      success: function (data) {
        table.draw();
        swal({
          title: 'Tidak Aktif!',
          type: 'error',
          showConfirmButton: false,
          timer: 1500,
        })
      },
      error: function (data) {
        console.log('Error:', data);
      }
    });
  });

  $(document).on('click','#detail',function(){
    var id = $(this).data("id");
    $.get('pesan/detail/' + id , function (data) {
        $('#nis').html(data[0].nis);
        $('#nama').html(data[0].name);
        $('#isi').html(data[0].pesan);
        $('#modal-detail').modal('show');
    })
  });

  $(document).on('click','#delete',function(){
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
    url: "pesan/delete/"+id,
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
