@extends('layouts.header')
@section('dataRayon','m-menu__item--active')
@section('title','SIMBKK | Data Rayon')
@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- END: Left Aside -->
<div class="m-grid__item m-grid__item--fluid m-wrapper">
  <div class="m-subheader ">
    <div class="d-flex align-items-center">
      <div class="mr-auto">
        <h3 class="m-subheader__title ">Data Rayon</h3>
      </div>
    </div>
  </div>
  <!-- Begin Body -->
  <!--Begin::Section-->
  <br>
  <div class="container">
    <div class="row">
      <div class="col-xl-12 mb-4">
        <div class="btn {{$preset->buttonClass}}" id="open-modal">Masukkan Data Rayon</div>
      </div>

      <div class="col-xl-12">
        <div class="m-portlet m-portlet--mobile ">
          <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
              <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                  Data Rayon
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
                  <th>Pembimbing</th>
                  <th>Rayon</th>
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
  <!-- Modal -->
  <div class="modal fade" id="modal-rayon" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-rayonTitle">Data Rayon</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Body Input -->
        <!-- Pembimbing -->
        <form id="formrayon" class="form-horizontal">
          <div class="form-group m-form__group row">
            <input type="hidden" name="id" id="id" class="form-control m-input">
            <label id="" class="form-control-label col-lg-3 mt-4">Pembimbing</label>
            <div class="col-lg-9 mt-4">
              <input type="text" name="pembimbing" id="pembimbing" class="form-control m-input" placeholder="Masukkan Pembimbing">
            </div>
            <!-- rayon -->

            <label id="rayon" class="form-control-label col-lg-3 mt-4">Rayon</label>
            <div class="col-lg-9 mt-4">
              <input type="text" name="rayon" id="rayon" class="form-control m-input" placeholder="Masukkan Rayon">
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" id="saveBtn" class="btn {{$preset->buttonClass}}">Save Data</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--End::Section-->

  <!--End::Section-->
</div>
</div>
</div>
<script type="text/javascript">

  $("#open-modal").click(function(){
    $('#formrayon').trigger("reset");
    $('#modal-rayon').modal('show');
  });
  
  var table = $('#table').DataTable({
    processing: true,
    serverSide: true,
    ajax: "json/rayon",
    "order": [[ 1, 'asc' ]],
    columns: [
    { "data": null,"sortable": false, 
    render: function (data, type, row, meta) {
      return meta.row + meta.settings._iDisplayStart + 1;
    }  
  },
  {data: 'pembimbing', name: 'pembimbing'},
  {data: 'rayon', name: 'rayon'},
  {data: "id",
  "searchable": false,
  "sortable": false,
  render: function (id, type, full, meta) {
    return '<div class="btn-group"><a href="javascript:void(0)" data-toggle="tooltip" id="edit"  data-id="'+id+'" data-original-title="Delete" class="btn btn-warning btn-sm"><i class="fa fa-edit" style="color:white;"></i></a>  <a href="javascript:void(0)" data-toggle="tooltip" id="delete"  data-id="'+id+'" data-original-title="Delete" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></div>';
  },
},
],
});
  $(document).on('click','#edit',function(){
    var id = $(this).data("id");
    $.get("{{ route('inputrayon.index') }}" +'/' + id +'/edit', function (data) {
      $('input[name="id"]').val(data.id);
      $('input[name="pembimbing"]').val(data.pembimbing);
      $('input[name="rayon"]').val(data.rayon);
      $('#modal-rayon').modal('show');
    })
  });

  $("#saveBtn").click(function (e) {
    $.ajaxSetup({ 
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }   
    })
    e.preventDefault();

    $.ajax({
      data: $('#formrayon').serialize(),
      url: "{{ route('inputrayon.store') }}",
      type: "POST",
      dataType: 'json',
      success: function (data) {
        $('#formrayon').trigger("reset");
        $('#modal-rayon').modal('hide');
        table.draw();
        swal({
          title: 'Data Tersimpan!',
          type: 'success',
          showConfirmButton: false,
          timer: 1500,
        })
      },
      error: function (data) {
        console.log('Error:', data);
        swal({
          title: 'Data Tidak Tersimpan!',
          type: 'error',
          showConfirmButton: false,
          timer: 1500,
        })
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
    url: "inputrayon/delete/"+id,
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
