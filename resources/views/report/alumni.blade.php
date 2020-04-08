<table>
   <thead>
       <tr>
       <td>NISN</td>
       <td>NIS</td>
       <td>Nama</td>
       <td>Jenis Kelamin</td>
       <td>Jurusan</td>
       <td>Rayon</td>
       <td>Masuk</td>
       <td>Lulus</td>
       <td>Alamat</td>
       <td>Telepon</td>
       <td>Email</td>
       <td>Status</td>
       <td>Nama Instansi</td>
    </tr>
   </thead>
   @foreach($siswas as $siswa)
    <tr>

    <td>{{$siswa->nisn}}</td>
    <td>{{$siswa->nis}}</td>
    <td>{{$siswa->name}}</td>
    <td>{{$siswa->jk}}</td>
    <td>{{$siswa->jurusan}}</td>
    <td>{{$siswa->rayon}}</td>
    <td>{{$siswa->masuk}}</td>
    <td>{{$siswa->lulus}}</td>
    <td>{{$siswa->alamat}}</td>
    <td>{{$siswa->telp}}</td>
    <td>{{$siswa->email}}</td>
    <td>{{$siswa->status}}</td>
    <td>{{$status->where('user_id',$siswa->user_id)->first()->nama}}</td>
    @endforeach
    </tr>
</table>

<table>
    <thead>
    <tr>
        <td>Jumlah Kerja</td>
        <td>Jumlah Wirausaha</td>
        <td>Jumlah Kuliah</td>
        <td>Jurusan</td>
    </tr>
    </thead>
    @foreach($jurusan as $j)
    <tr>
    <td>{{$siswas->where('status','Kerja')->where('jurusan_id',$j->id)->count()}}</td>
    <td>{{$siswas->where('status','Wirausaha')->where('jurusan_id',$j->id)->count()}}</td>
    <td>{{$siswas->where('status','Kuliah')->where('jurusan_id',$j->id)->count()}}</td>
    <td>{{$j->jurusan}}</td>
    @endforeach
    </tr>
</table>
