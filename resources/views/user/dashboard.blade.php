<div class="container-fluid">
    <br>
    <h3>Selamat Datang {{auth::user()->name}}</h3>
    <br>
    <div class="row">
        <div class="col-md-4">
            <div class="card border-success mb-3">
                <div class="card-header bg-transparent border-success">Data Pribadi</div>
                <div class="card-body text-success">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="card-title">Nama</h5>
                            <p class="card-text">{{auth::user()->name}}</p>
                            <h5 class="card-title">Alamat</h5>
                            <p class="card-text">{{auth::user()->data->alamat}}</p>
                            <h5 class="card-title">Email</h5>
                            <p class="card-text">{{auth::user()->email}} <i><b> Verified </b></i> </p>
                        </div>
                        <div class="col-md-6">
                            <h5 class="card-title">Telepon</h5>
                            <p class="card-text">{{auth::user()->data->telp}}</p>
                            <h5 class="card-title">Jenis Kelamin</h5>
                            <p class="card-text">{{auth::user()->data->jk}}</p>
                            <h5 class="card-title">Status</h5>
                            <p class="card-text">{{auth::user()->datasiswa->status}}</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-success">Footer</div>
              </div>
        </div>
        <div class="col-md-4">
            <div class="card border-success mb-3">
                <div class="card-header bg-transparent border-success">Data Akademik</div>
                <div class="card-body text-success">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="card-title">NISN</h5>
                            <p class="card-text">{{auth::user()->data->nisn}}</p>
                            <h5 class="card-title">NIS</h5>
                            <p class="card-text">{{auth::user()->data->nis}}</p>
                            <h5 class="card-title">Jurusan</h5>
                            <p class="card-text">{{auth::user()->datasiswa->jurusan}}</p>
                        </div>

                        <div class="col-md-6">
                            <h5 class="card-title">Rayon</h5>
                            <p class="card-text">{{auth::user()->datasiswa->rayon}}</p>
                            <h5 class="card-title">Tahun Masuk</h5>
                            <p class="card-text">{{auth::user()->data->masuk}}</p>
                            <h5 class="card-title">Tahun Lulus</h5>
                            <p class="card-text">{{auth::user()->data->lulus}}</p>
                        </div>
                    </div>

                </div>
                <div class="card-footer bg-transparent border-success">Footer</div>
              </div>
        </div>
        @if(auth::user()->data->status_id != 4)
        <div class="col-md-4">
            <div class="card border-success mb-3">
                <div class="card-header bg-transparent border-success">Data {{auth::user()->datasiswa->status}}</div>
                <div class="card-body text-success">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-title">{{$formNon[0]}}</h5>
                        <p class="card-text">{{auth::user()->latestData->nama}}</p>

                        <h5 class="card-title">{{$formNon[1]}}</h5>
                        <p class="card-text">{{auth::user()->latestData->jabatan}}</p>

                        <h5 class="card-title">{{$formNon[2]}}</h5>
                        <p class="card-text">{{auth::user()->latestData->durasi_kontrak}} Tahun</p>
                    </div>
                    @if(auth::user()->data->status_id != 2)
                    <div class="col-md-6">
                        <h5 class="card-title">{{$formNon[3]}}</h5>
                  <p class="card-text">{{auth::user()->latestData->pendapatan}}</p>
                    </div>
                    @endif
                </div>
                </div>
                <div class="card-footer bg-transparent border-success">Footer</div>
              </div>
        </div>
        @else
        <div class="col-md-4">
            <div class="card border-danger mb-3">
                <div class="card-header bg-transparent border-danger">Data Non Akademik (kerja,wirausaha,kuliah)</div>
                <div class="card-body text-danger">
                    <h3 class="card-title">Pengangguran</h3>
                <p class="card-text">Silahkan Update data anda jika status anda telah berubah</p>
                </div>
                <div class="card-footer bg-transparent border-danger">Footer</div>
              </div>
        </div>
        @endif
    </div>
   
</div>
<br>

<script>


$(function () {

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var table =  $('#table').DataTable({
          processing: true,
          serverSide: true,
          ajax: '{{ url('datatables') }}',
          columns: [
                   { data: 'created_at', name: 'created_at' },
                   { data: 'status', name: 'status'},
                   { data: 'nama', name: 'nama' },
                   { data: 'jabatan', name: 'jabatan' },
                   { data: 'alamat', name: 'alamat' },
                   { data: 'kota', name: 'kota' },
                   { data: 'durasi_kontrak', name: 'durasi_kontrak'},
                   { data: 'action', name: 'action', orderable: false , searchable: false},
                ]
       });
    </script>
