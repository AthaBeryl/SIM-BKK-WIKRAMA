@extends('layouts.landing')
@section('title','SMK WIKRAMA BOGOR')
@section('content')
<div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 single-content">
            <h1 class="mb-4">
                Dibutuhkan Sekretaris professional berpengalaman
                </h1>
          <p class="mb-5">
            <img src="landing/images/invent.jpg" alt="Image" class="img-fluid">
          </p>  
          <div class="post-meta d-flex mb-5">
            <div class="vcard">
              <span class="d-block"><a href="#">PT maju jaya sejahtera</a></span>
              <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
            </div>
          </div>

          <p>JOB DESCRIPTIONS</p>
          <ul>
               <li> •Melakukan tugas-tugas administrasi</li>
                <li>•Melakukan tugas-tugas sekretaris</li>
                <li>•Menyiapkan laporan faktur pajak dan input ke sistem e-faktur serta laporan-laporan lain yang dibutuhkan</li>
          </ul>
          <div class="row">
                {{-- requirements --}}
              <div class="col-md-6 mt-4">
                    <div class="card">
                            <h5 class="card-header">persyaratan : </h5>
                          <div class="card-body">
                                  <ul class="list-group list-group-flush">
                                          <li class="list-group-item">Umur 25-30 tahun</li>
                                          <li class="list-group-item">SMK / D3 / S1 diutamakan akuntansi</li>
                                          <li class="list-group-item">Pengalaman minimal 3 tahun, diutamakan yang memiliki pengalaman di percetakan</li>
                                          <li class="list-group-item">Paham sistem e-faktur</li>
                                        </ul>
                          </div>
                        </div>
              </div>
              {{-- End requirements --}}
              {{-- Kontak perusahaan --}}
              <div class="col-md-6 mt-4">
                    <div class="card">
                            <h5 class="card-header">kontak : </h5>
                          <div class="card-body">
                              <ul class="list-group list-group-flush">
                                  <li class="list-group-item">PT Maju Jaya</li>
                                  <li class="list-group-item">Jl Senopati Arga 12 Bogor</li>
                                  <li class="list-group-item">MajuJayaCorps@gmail.com</li>
                                  <li class="list-group-item">081267197393</li>
                                </ul>
                          </div>
                        </div>
              </div>
              {{-- End Kontak perusahaan --}}
            <a href="{{url('/')}}" class= "btn btn-outline-primary mt-2 " style="border-radius:10px!IMPORTANT;">Kembali<a>
          </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection