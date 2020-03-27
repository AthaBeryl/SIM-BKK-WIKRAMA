@extends('layouts.header')
@section('dataAlumni','m-menu__item--active')
@section('title','SIMBKK | Recycle Bin')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- END: Left Aside -->
<div class="m-grid__item m-grid__item--fluid m-wrapper">
  <!-- BEGIN: Subheader -->
  <div class="m-subheader">
    <div class="d-flex align-items-center">
      <div class="mr-auto">
        <h3 class="m-subheader__title ">Recycle Bin</h3>
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
<!--   <div class="col-xl-12 mb-4">
    <div class="btn-group">
    <div class="btn btn-warning" id="restore_all" style="color: white">Restore All</div>
    <div class="btn btn-danger" id="">Delete All</div>
  </div>
  </div> -->

  <div class="col-xl-12">
    <div class="m-portlet m-portlet--mobile ">
      <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
          <div class="m-portlet__head-title">
            <h3 class="m-portlet__head-text">
              Recycle Bin
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
        <th>NISN</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th width="60px">Rayon</th>
        <th>Jenis Kelamin</th>
        <th width="60px">Tahun</th>
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

<!-- modaldetail -->
<div class="modal fade" id="modal-alumni-detail"  tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document" style="max-width: 50% !important;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-alumniTitle">Detail Alumni</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">

            <div class="col-sm-12 mb-4">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Pribadi</h4>

                  <table class="table table-borderless">
                    <tr>
                      <td width="200px">Nama</td>
                      <td>:</td>
                      <td id="d_nama"></td>
                    </tr>
                    <tr>
                      <td>Jenis Kelamin</td>
                      <td>:</td>
                      <td id="d_jk"></td>
                    </tr>
                    <tr>
                      <td>Alamat</td>
                      <td>:</td>
                      <td id="d_alamat"></td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>:</td>
                      <td id="d_email"></td>
                    </tr>
                    <tr>
                      <td>Nomor Telepon</td>
                      <td>:</td>
                      <td id="d_telp"></td>
                    </tr>
                    <tr>
                      <td>Status</td>
                      <td>:</td>
                      <td id="d_status"></td>
                    </tr>
                  </table>

                </div>
              </div>
            </div>

            <div class="col-sm-12 mb-4">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Akademik</h4>
                  <table class="table table-borderless">
                    <tr>
                      <td width="200px">NISN</td>
                      <td>:</td>
                      <td id="d_nisn"></td>
                    </tr>
                    <tr>
                      <td>NIS</td>
                      <td>:</td>
                      <td id="d_nis"></td>
                    </tr>
                    <tr>
                      <td>Jurusan</td>
                      <td>:</td>
                      <td id="d_jurusan"></td>
                    </tr>
                    <tr>
                      <td>Rayon</td>
                      <td>:</td>
                      <td id="d_rayon"></td>
                    </tr>
                    <tr>
                      <td>Tahun</td>
                      <td>:</td>
                      <td id="d_tahun"></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>

            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Non Akademik</h4>
                  <h6 id="belum_input" class="mt-4">Belum Input</h6>
                  <table class="table table-borderless" id="non_akademik">
                    <tr>
                      <td width="200px" id="d1"></td>
                      <td>:</td>
                      <td id="d_nama_instansi"></td>
                    </tr>
                    <tr>
                      <td id="d2"></td>
                      <td>:</td>
                      <td id="d_alamat_instansi"></td>
                    </tr>
                    <tr>
                      <td id="d3"></td>
                      <td>:</td>
                      <td id="d_jabatan"></td>
                    </tr>
                    <tr>
                      <td id="d4"></td>
                      <td>:</td>
                      <td id="d_durasi_kontrak"></td>
                    </tr>
                    <tr>
                      <td id="d5"></td>
                      <td>:</td>
                      <td id="d_pendapatan"></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>

          </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end -->

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
    responsive: true,
    processing: true,
    serverSide: true,
    ajax: "json/alumni/trash",
    "order": [[ 1, 'asc' ]],
    columns: [
    { "data": null,"sortable": false, class:'dt-center',
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
  {data: "masuk",
    render: function ( data, type, row ) {
    return row.masuk + ' - ' + row.lulus;
    }
  },
  {data: 'status'},
  {data: "user_id",
  "searchable": false,
  "sortable": false,
  render: function (id, type, full, meta) {
    return '<div class="btn-group"><a href="javascript:void(0)" data-toggle="tooltip" id="detail" data-id="'+id+'" data-original-title="Detail" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a> <a href="javascript:void(0)" data-toggle="tooltip" id="restore"  data-id="'+id+'" data-original-title="Edit" class="btn btn-warning btn-sm"><i class="fa fa-undo" style="color:white;"></i></a>  <a href="javascript:void(0)" data-toggle="tooltip" id="delete"  data-id="'+id+'" data-original-title="Delete" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></div>';
  },
},
],
});

$(document).on('click','#restore',function(){
    var id = $(this).data("id");
    swal({
      title: 'Apakah Anda yakin?',
      type: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Ya',
      cancelButtonText: 'Tidak'
    }).then((result) => {
      if (result.value) {
        $.get('alumni/restore/' + id , function (data) {
          table.draw();
          swal({
            title: 'Berhasil!',
            type: 'success',
            showConfirmButton: false,
            timer: 1500,
          })
        })
      }
    });
});

$(document).on('click','#restore_all',function(){
    var id = $(this).data("id");
    swal({
      title: 'Apakah Anda yakin?',
      type: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Ya',
      cancelButtonText: 'Tidak'
    }).then((result) => {
      if (result.value) {
        $.get('alumni/restore_all' , function (data) {
          table.draw();
          swal({
            title: 'Berhasil!',
            type: 'success',
            showConfirmButton: false,
            timer: 1500,
          })
        })
      }
    });
});

$(document).on('click','#delete',function(){
  var id = $(this).data("id");
  swal({
    title: 'Apakah Anda yakin?',
    type: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Ya',
    cancelButtonText: 'Tidak'
  }).then((result) => {
    if (result.value) {
      $.ajax({
        type: "DELETE",
        url: "alumni/delete/"+id,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: "id="+ id,
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

$(document).on('click','#detail',function(){
    var id = $(this).data("id");
    var belum_input = true;
    $('#belum_input').hide();
    $('#non_akademik').show();
    $.get('alumni/detail/' + id , function (data) {
      if(data[0].status_id == '1'){
        $('#d1').html('Nama Instansi');
        $('#d2').html('Alamat Instansi');
        $('#d3').html('Divisi');
        $('#d4').html('Durasi Kontrak Kerja');
        $('#d5').html('Pendapatan Bulanan');
      }else if(data[0].status_id == '2'){
        $('#d1').html('Nama Fakultas');
        $('#d2').html('Alamat Fakultas');
        $('#d3').html('Jurusan');
        $('#d4').html('Tingkatan');
        $('#d5').html('Pendapatan Bulanan');
      }else if (data[0].status_id == '3') {
        $('#d1').html('Nama Perusahaan');
        $('#d2').html('Alamat Perusahaan');
        $('#d3').html('Jenis Perusahaan');
        $('#d4').html('Lama Berdiri');
        $('#d5').html('Pendapatan Bulanan');
      }else if (data[0].status_id == '4'){
        belum_input = false;
        $('#non_akademik').hide();
        $('#belum_input').show();
      }
      $('#d_nisn').html(data[0].nisn);
      $('#d_nis').html(data[0].nis);
      $('#d_nama').html(data[0].name);
      $('#d_jurusan').html(data[0].jurusan);
      $('#d_rayon').html(data[0].rayon);
      $('#d_jk').html(data[0].jk);
      $('#d_tahun').html(data[0].masuk +' - '+data[0].lulus);
      $('#d_alamat').html(data[0].alamat);
      $('#d_email').html(data[0].email);
      $('#d_telp').html(data[0].telp);
      $('#d_status').html(data[0].status);
      if(belum_input){
        $('#d_nama_instansi').html(data[1].nama);
        $('#d_alamat_instansi').html(data[1].alamat);
        $('#d_jabatan').html(data[1].jabatan);
        $('#d_durasi_kontrak').html(data[1].durasi_kontrak);
        $('#d_pendapatan').html(data[1].pendapatan);
      }
      $('#modal-alumni-detail').modal('show');
    })
  });
</script>
@Include('layouts.footer')
@endsection