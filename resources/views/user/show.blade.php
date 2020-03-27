@extends('layouts.user')
@section('title','Sistem Informasi Bursa Kerja Khusus')
@section('container')
<div class="m-content">
    <div class="container">
            <div class="m-content">
                <div class="row">
                    <div class="col-xl-6">
                    {{-- <a href="{{$pengguna->id}}/edit" class="btn btn-outline-primary mb-4">Input Data</a> --}}
                      </div>
      <div class="col-xl-7 ">
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-xl-4">
              <img src="assets/images-assets/alumni.JPG " class="card-img mt-4 responsive" alt="...">
            </div>
            <div class="col-xl-6" style="margin:10px;" >
              <div class="card-body">
                {{-- Perulangan --}}
              <h4 class="card-title">{{$pengguna->nis}}</h4>
                <p class="card-text">Alamat : </p>
                <p class="card-text">Email : </p>
                <p class="card-text">No Telepon : </p>
                <p class="card-text">Jenis Kelamin : </p>
                <p class="card-text">Rombel : </p>
                <p class="card-text">Status : </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                {{-- Penutup Perulangan --}}
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Akademik -->
      <div class="col-xl-5">
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-xl-7" style="margin:10px;" >
              <div class="card-body">
                {{-- Perulangan --}}
                <h4 class="card-title">Akademik</h4>
                <p class="card-text">NISN : </p>
                <p class="card-text">NIS : </p>
                <p class="card-text">Jurusan : </p>
                <p class="card-text">Rayon : </p>
                <p class="card-text">Tahun Masuk : </p>
                <p class="card-text">Tahun Lulus : </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                {{-- Penutup Perulangan --}}
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Non Akademik -->
      <div class="col-xl-12 ketengah">
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-xl-7" style="margin:10px;" >
              <div class="card-body">
                {{-- Perulangan --}}
                <h4 class="card-title">Non  Akademik</h4>
                <p class="card-text">Nama Instansi : </p>
                <p class="card-text">Divisi / Bagian / Jurusan : </p>
                <p class="card-text">Durasi Kontrak Kerja : </p>
                <p class="card-text">Penghasilan PerBulan : </p>
                <p class="card-text">Alamat Instansi : </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                {{-- Penutup Perulangan --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
@endsection