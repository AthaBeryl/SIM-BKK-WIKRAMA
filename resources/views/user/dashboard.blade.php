<div class="container">
    <br>
<h3>Selamat Datang {{auth::user()->name}}</h3>
{{-- <a href=" user/{{auth::user()->data->id}}/edit/" class="btn {{$preset->buttonClass}} mb-4">Edit Data Belum Lengkap</a>   --}}
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <a href="#" style="font-size : medium"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Data Pribadi
        </a>
      </h2>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      {{-- Perulangan --}}
      <div class="card-body">
          <div class="row ">
              <div class="col-xl-12 ">
                <div class="card mb-3">
                  <div class="row no-gutters">
                    {{-- <div class="col-xl-4">
                      <div class="card-image">
                      <img src="images-assets/alumni.jpg " style="width:100%;margin-right:300px;height:20%;" class="card-img responsive" alt="alumni-foto-sistem-informasi-Bursa-kerja-Khusus">
                    </div>
                    </div> --}}

                    <div class="col-xl-7 " style="margin:10px;" >
                    <form action="{{route('profile.update')}}" method="post">
                    @csrf
                    <input type="hidden" name="method" value="put">
                      <div class="card-body">
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                <label for="">Nama</label>
                              <input placeholder="Nama" name="nama" class="form-control" value="{{auth::user()->name}}">
                              </div>
                                  </div>
                        <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3">{{auth::user()->data->alamat}}</textarea>
                      </div>
                          </div>
                          <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Email</label>
                         <input placeholder="Email" name="email" class="form-control" value="{{auth::user()->email}}">
                      </div>
                          </div>
                          <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Telepon</label>
                         <input placeholder="telepon" name="telp" class="form-control" value="{{auth::user()->data->telp}}">
                      </div>
                          </div>
                      {{-- End Row --}}
                      </div>
                      {{-- End --}}
                      <div class="row kanan-row2">
                        <div class="col-md-12">
                    <label for="">Jenis Kelamin</label>
                  <div class="m-radio-inline">
                  <label class="m-radio m-radio--solid m-radio--primary">
                    <input type="radio" name="jk" value="male" @if(auth::user()->data->jk == 'male') checked @endif>Laki-Laki
                    <span></span>
                    </label>
                    <label class="m-radio m-radio--solid m-radio--primary">
                    <input type="radio" name="jk" value="female" @if(auth::user()->data->jk == 'female') checked @endif> Perempuan
                    <span></span>
                  </label>
                  </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" name="status" id="status">
                                 @foreach($status as $s)
                                 @if(auth::user()->data->status_id == $s->id)
                                <option value="{{$s->id}}" selected>{{$s->status}}</option>
                                @else
                                <option value="{{$s->id}}">{{$s->status}}</option>
                                @endif
                                 @endforeach
                                </select>
                              </div>
                        </div>
                      {{-- End Row --}}
                      </div>
                      <button class="btn {{$preset->buttonClass}}">Update</button>
                      {{-- End --}}
                    </div>
                </form>
                    </div>

                  </div>
                </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
<div class="accordion" id="accordionExample">
<form action="{{route('akademik.update')}}" method="post">
    @csrf
    <input type="hidden" name="method" value="put">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <a href="#" style="font-size : medium" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
          Data Akademik
        </a>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <div class="row ">
           <!-- Akademik -->
      <div class="col-xl-12 ">
          <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-xl-7"style="margin:10px;" >
                <div class="card-body kanan-row1">
                  <div class="row ">
                  <h4 class="card-title">Akademik</h4>
                  <div class="col-md-12">
                      <div class="form-group">
                        <label for="">NISN</label>
                      <input placeholder="NISN" name="nisn" class="form-control" value="{{auth::user()->data->nisn}}">
                      </div>
                  </div>
                      <div class="col-md-12">
                          <div class="form-group">
                            <label for="">NIS</label>
                             <input placeholder="NIS" name="nis" class="form-control" value="{{auth::user()->data->nis}}">
                          </div>
                      </div>
                      <div class="col-md-12">
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <select class="form-control" name="jurusan" id="jurusan">
                                 @foreach($jurusan as $j)
                                 @if(auth::user()->data->jurusan_id == $j->id)
                                <option selected value="{{$j->id}}" selected>{{$j->jurusan}}</option>
                                @else
                                <option value="{{$j->id}}">{{$j->jurusan}}</option>
                                @endif
                                @endforeach
                                </select>
                              </div>
                        </div>
                        <div class="col-md-12">
                                <div class="form-group">
                                    <label for="jurusan">Rayon</label>
                                    <select class="form-control" name="rayon" id="rayon">
                                     @foreach($rayon as $r)
                                     @if(auth::user()->data->rayon_id == $r->id)
                                    <option selected value="{{$r->id}}" selected>{{$r->rayon}}</option>
                                    @else
                                    <option value="{{$r->id}}">{{$r->rayon}}</option>
                                    @endif
                                    @endforeach
                                    </select>
                                  </div>
                            </div>
                              <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="">Tahun Masuk</label>
                                     <input type="number" name="masuk" placeholder="Tahun Masuk" class="form-control" value="{{auth::user()->data->masuk}}">
                                  </div>
                              </div>
                                  <div class="col-md-12">
                                      <div class="form-group">
                                        <label for="">Tahun Lulus</label>
                                         <input type="number" name="lulus" placeholder="Tahun Lulus" class="form-control" value="{{auth::user()->data->lulus}}">
                                      </div>
                                  </div>
                  {{-- End Row --}}
                  </div>
                  <button class="btn {{$preset->buttonClass}}">Update</button>
                  {{-- End --}}
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
          </div>
  </div>
</form>
</div>
@if(auth::user()->data->status_id != 4)
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <a href="#" style="font-size : medium" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
          @if(auth::user()->data->status_id == 1)
          Data kerja
          @elseif(auth::user()->data->status_id == 2)
          Data Kuliah
          @else
          Data Wirauaha
          @endif
        </a>
      </h2>
    </div>
    <div id="collapseThree" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <div class="row ">
       <!-- Non Akademik -->
       <div class="col-xl-12 kanan-row1">
          <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-xl-7" style="margin:10px;" >
                <div class="card-body">
                  <!-- <h4 class="card-title">{{auth::user()->data->status_id}}</h4> -->
                  
                  <div class="row ">
                  <form action="{{route('edit.detail')}}" method="post">
                  @csrf
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">{{$formNon[0]}} </label>
                           <select name="nama" id="" class="form-control" required>
                           <option disabled>{{$formNon[0]}}</option>
                           @foreach($company as $c)
                           <option value="{{$c->id}}"@if($c->nama == auth::user()->latestData->nama) selected @endif>{{$c->nama}}</option>
                           @endforeach
                           </select>
                           <!-- <span>Tidak Menemukan {{$formNon[0]}} ? <a href="#" id="open-modal">Masukan Disini</a></span> -->
                          </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">{{$formNon[1]}}</label>
                             <input type="text" name="jabatan" placeholder="{{$formNon[1]}}" class="form-control" value="{{auth::user()->latestData->jabatan}}">
                          </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">{{$formNon[2]}}</label>
                             <input type="text" name="kontrak" placeholder="{{$formNon[2]}}" class="form-control" value="{{auth::user()->latestData->durasi_kontrak}}">
                          </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">{{$formNon[3]}}</label>
                             <input type="number" name="pendapatan" placeholder="{{$formNon[3]}}" class="form-control" value="{{auth::user()->latestData->pendapatan}}">
                          </div>

                          <button class="btn {{$preset->buttonClass}}">Update</button>
                    </div>

                    </form>

                      <!-- Modal -->
  <div class="modal fade" id="modal-instansi" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-instansiTitle">Data Instansi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Body Input -->
          <form id="forminstansi" class="form-horizontal">
            <div class="form-group m-form__group row">
              <input type="hidden" name="id" id="id" class="form-control m-input">

              <label id="nama" class="form-control-label col-lg-3 mt-4">Nama</label>
              <div class="col-lg-9 mt-4">
                <input type="text" name="nama" id="nama" class="form-control m-input" placeholder="Masukkan Nama">
              </div>

              <label class="form-control-label col-lg-3 mt-4">Alamat</label>
              <div class="col-lg-9 mt-4">
                <textarea name="alamat" id="alamat" class="form-control m-input" placeholder="Masukkan Alamat"></textarea>
              </div>

              <label id="kota" class="form-control-label col-lg-3 mt-4">Kota</label>
              <div class="col-lg-9 mt-4">
                <input type="text" name="kota" id="kota" class="form-control m-input" placeholder="Masukkan Kota">
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
                   
                    <!-- <div class="col-md-12">
                        <div class="form-group">
                            <label for="">{{$formNon[4]}}</label>
                            <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3">{{auth::user()->latestData->alamat}}</textarea>
                          </div>
                    </div> -->
                    
                  {{-- End Row --}}
                  </div>
                  {{-- End --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      </div>
    </div>
@endif
  </div>
</div>
</div>
<script type="text/javascript">
  $("#open-modal").click(function(){
    $('#forminstansi').trigger("reset"); 
    $('#modal-instansi').modal('show');
  });
  </script>