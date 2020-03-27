@extends('layouts.header')
@section('dataAlumni','m-menu__item--active')
@section('title','SIMBKK | Manajemen Data Alumni')
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
</div>
</div>
<!-- end:: Page -->
<!-- Begin Body -->

<!--Begin::Section-->
<br>
<div class="container">
 <div class="row">
   <div class="col-xl-12 mb-4">
    {{-- <div class="btn btn-primary" id="open-modal">Masukkan Data Alumni</div> --}}
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
                    <a href="{{route('export.siswa')}}" class="m-nav__link">
                        <i
                        class="m-nav__link-icon la la-download"
                        ></i>
                        <span class="m-nav__link-text"
                        >Export Data Alumni</span
                        >
                      </a>
                    </li>
                    <li class="m-nav__item">
                      <a href="#" class="m-nav__link" id="import">
                        <i
                        class="m-nav__link-icon la la-upload"
                        ></i>
                        <span class="m-nav__link-text"
                        >Import Data Alumni</span
                        >
                      </a>
                    </li>
                    <li class="m-nav__item">
                      <a href="{{url('/trash')}}" class="m-nav__link">
                        <i
                        class="m-nav__link-icon la la-trash"
                        ></i>
                        <span class="m-nav__link-text"
                        >Recycle Bin</span
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
  <div class="table-responsive">
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
</div>
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
        <button type="button" class="btn {{$preset->buttonClass}}" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end -->
<div id="uploadFile" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body">
        <form action="{{route('import.siswa')}}" method="post" enctype="multipart/form-data">
            @csrf
            <p>Dibawah Ini Adalah Format Untuk Import Excel <b>Pastikan Anda Mengikuti nya</b></p>
        <img src="{{asset('image/config/format.png')}}" alt="" style="max-width:100%;max-height:100%">
            <br>
            <p>Masukan File Import <b>(.csv,.xlx,.xlxs)</b></p>
            <input type="file" name="file" class="form-control" id="">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button class="btn {{$preset->buttonClass}}">Simpan</button>
        </form>
        </div>
      </div>
  
    </div>
  </div>
    </form>
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
          <input type="hidden" name="user_id" class="form-control m-input">
          <label class="form-control-label col-lg-3 mt-4">NIS</label>
          <div class="col-lg-9 mt-4">
            <input type="text" name="nis" class="form-control m-input" placeholder="Masukkan NIS">
          </div>
          <label class="form-control-label col-lg-3 mt-4">NISN</label>
          <div class="col-lg-9 mt-4">
            <input type="text" name="nisn" class="form-control m-input" placeholder="Masukkan NISN">
          </div>

          <!-- Nama -->
          <label class="form-control-label col-lg-3 mt-4">Nama</label>
          <div class="col-lg-9 mt-4">
            <input type="text" name="nama" class="form-control m-input" placeholder="Masukkan Nama">
          </div>
          <!-- Jurusan -->
          <label class="form-control-label col-lg-3 mt-4">Jurusan</label>
          <div class="col-lg-9 mt-4">
            <div class="m-form__control">
              <select name="jurusan" id="jurusan" class="form-control">
                  <option disabled selected style="display: none">----Pilih Jurusan-----</option>
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
              <select name="rayon" id="rayon" class="form-control">
                <option disabled selected style="display: none">----Pilih Rayon-----</option>
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
                <input type="radio" name="jk" id="male" value="Laki-Laki" checked>Laki-Laki
                <span></span>
              </label>
              <label class="m-radio m-radio--solid m-radio--primary">
                <input type="radio" name="jk" id="female" value="Perempuan"> Perempuan
                <span></span>
              </label>
            </div>
          </div>

          <!-- Tgl Masuk -->
          <label class="form-control-label col-lg-3 mt-4">Tahun Masuk</label>
          <div class="col-lg-9 mt-4">
            <div class="input-group m-input-group">
              <input type="number" name="masuk" class="form-control" id="masuk" placeholder="Masukkan Tahun Masuk" />
            </div>
          </div>
          <!-- Tgl Keluar -->
          <label class="form-control-label col-lg-3 mt-4">Tahun Lulus</label>
          <div class="col-lg-9 mt-4">
            <div class="input-group m-input-group">
              <input type="number" name="lulus" class="form-control" id="lulus" placeholder="Masukkan Tahun Lulus" />
            </div>
          </div>
          <!-- Alamat -->

          <label class="form-control-label col-lg-3 mt-4">Alamat</label>
          <div class="col-lg-9 mt-4">
            <textarea name="alamat" id="alamat" class="form-control m-input" placeholder="Masukkan Alamat"></textarea>
          </div>
          <!-- Email -->  

          <label class="form-control-label col-lg-3 mt-4">Email</label>
          <div class="col-lg-9 mt-4">
            <input type="email" name="email" class="form-control m-input" placeholder="Masukkan Email">
          </div>

          <!-- Nao telp -->
          <label class="form-control-label col-lg-3 mt-4">Nomor Telepon</label>
          <div class="col-lg-9 mt-4">
            <input type="number" name="telp" class="form-control m-input" placeholder="Masukkan Nomor Telepon">
          </div>

          <!-- stat -->
          <!-- <label class="form-control-label col-lg-3 mt-4">Status</label>
          <div class="col-lg-9 mt-4">
            <div class="m-form__control">
              <select name="status" id="status" class="form-control">
                <option selected style="display: none">----Pilih Status-----</option>
                @foreach($status as $s)
                  <option value="{{$s->id}}">{{$s->status}}</option>
                @endforeach
              </select>
            </div>
          </div> -->
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="saveBtn" class="btn {{$preset->buttonClass}}">Save Data</button>
      </div>
    </div>
<!-- Modal -->

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
  
  $("#import").click(function(){
    $('#uploadFile').modal('show');
  });
var table = $('#table').DataTable({
    responsive: true,
    processing: true,
    serverSide: true,
    ajax: "json/alumni",
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
    return '<div class="btn-group"><a href="javascript:void(0)" data-toggle="tooltip" id="detail" data-id="'+id+'" data-original-title="Detail" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a> <a href="javascript:void(0)" data-toggle="tooltip" id="edit"  data-id="'+id+'" data-original-title="Edit" class="btn btn-warning btn-sm"><i class="fa fa-edit" style="color:white;"></i></a>  <a href="javascript:void(0)" data-toggle="tooltip" id="delete"  data-id="'+id+'" data-original-title="Delete" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></div>';
  },
},
],
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

$(document).on('click','#edit',function(){
    var id = $(this).data("id");
    $.get("{{ route('inputalumni.index') }}" +'/' + id +'/edit', function (data) {
      $('input[name="user_id"]').val(data.user_id);
      $('input[name="nis"]').val(data.nis);
      $('input[name="nisn"]').val(data.nisn);
      $('input[name="nama"]').val(data.name);
      $('#jurusan').val(data.jurusan_id);
      $('#rayon').val(data.rayon_id);
      if(data.jk == "Perempuan"){
        $('#female').prop('checked',true);
      }else{
        $('#male').prop('checked',true);
      }
      $('input[name="masuk"]').val(data.masuk);
      $('input[name="lulus"]').val(data.lulus);
      $('#alamat').val(data.alamat);
      $('input[name="email"]').val(data.email);
      $('input[name="telp"]').val(data.telp);
      $('#status').val(data.status_id);
      $('#modal-alumni').modal('show');
    })
  });

$(document).on('click','#saveBtn',function(e){
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
  $.ajax({
    type: "DELETE",
    url: "inputalumni/delete/"+id,
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
</script>
@include('layouts.footer')
@endsection