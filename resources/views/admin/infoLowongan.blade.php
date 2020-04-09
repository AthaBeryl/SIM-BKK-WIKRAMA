@extends('layouts.header')
@section('infolowongan','m-menu__item--active')
@section('title','SIMBKK | Info Lowongan')
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
        <h3 class="m-subheader__title ">Info Lowongan</h3>
      </div>
    </div>
  </div>
  <!-- Begin Body -->
  <!--Begin::Section-->
  <br>
  <div class="container">
    <div class="row">
      <div class="col-xl-12 mb-4">
        <a href="/inputinfolowongan"><div class="btn {{$preset->buttonClass}}" >Masukkan Info Lowongan</div></a>
      </div>

      <div class="col-xl-12">
        <div class="m-portlet m-portlet--mobile ">
          <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
              <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                  Info Lowongan
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
                  <th>Judul</th>
                  <th style="width:300px">Isi</th>
                  <th style="width:100px">Foto</th>
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
<script type="text/javascript">

  var table = $('#table').DataTable({
    processing: true,
    serverSide: true,
    ajax: "json/infolowongan",
    "order": [[ 1, 'asc' ]],
    columns: [
    { "data": null,"sortable": false, 
    render: function (data, type, row, meta) {
      return meta.row + meta.settings._iDisplayStart + 1;
    }  
  },
  {data: 'judul'},
  {data: "isi",
  "searchable": false,
  "sortable": false,
  render: function (id, type, full, meta) {
    return '<div class="isi">'+id+'</div>';
  },
},
  {data: "foto",
  "searchable": false,
  "sortable": false,
  render: function (id, type, full, meta) {
    return '<img src="/image/infolowongan/'+id+'" alt="'+id+'" height="100" width="100">';
  },
},
  {data: 'status'},
  {data: "id",
  "searchable": false,
  "sortable": false,
  render: function (id, type, full, meta) {
    return '<div class="btn-group"><a href="javascript:void(0)" data-toggle="tooltip" id="active"  data-id="'+id+'" class="btn btn-success btn-sm"><i class="fa fa-check" style="color:white;"></i></a><a href="javascript:void(0)" data-toggle="tooltip" id="deactive"  data-id="'+id+'" class="btn btn-danger btn-sm"><i class="fa fa-times" style="color:white;"></i></a>&nbsp&nbsp</div><div class="btn-group"><a href="/editinfolowongan/'+id+'" data-toggle="tooltip" id="edit"  data-id="'+id+'" class="btn btn-warning btn-sm"><i class="fa fa-edit" style="color:white;"></i></a>  <a href="javascript:void(0)" data-toggle="tooltip" id="delete"  data-id="'+id+'" data-original-title="Delete" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></div>';
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
      url: "/infolowongan/active/"+id,
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
      url: "/infolowongan/deactive/"+id,
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
    url: "infolowongan/delete/"+id,
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
