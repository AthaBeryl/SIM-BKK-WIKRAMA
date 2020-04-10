<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Siswa;
use App\datastatus;
use App\Jurusan;
use App\Status;
use App\Preset;
use App\User;
use App\Instansi;
use App\statusDetail;
use Illuminate\Support\Facades\Auth;
use App\Charts\jejakAlumni;
use App\Charts\jejakJurusan;
use App\Exports\AlumniExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Rayon;
use Carbon\Carbon;
use DataTables;
use Response;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $kerja = Siswa::where('status_id','1')->count();
        $kuliah = Siswa::where('status_id','2')->count();
        $wirausaha = Siswa::where('status_id','3')->count();
        $belumInput = Siswa::where('status_id','4')->count();
        $jurusan = Jurusan::all();
        $siswa = Siswa::all();
        $jejakAlumni = new jejakAlumni;
        $jejakAlumni->labels(['kerja','kuliah','wirausaha','belum input']);
        $jejakAlumni->dataset('Alumni','line',[$kerja,$kuliah,$wirausaha,$belumInput])
        ->options([
            'backgroundColor' => 'rgba(190, 37, 35, 0.82)',
            ]);
        $jejakAlumni->displayAxes(false);
        $jejakAlumni->displayLegend(false);
        // Chart Jejak Alumni
        $jejakJurusan = new jejakJurusan;
        $jejakJurusan->labels(['kerja','kuliah','wirausaha','belum input']);
        foreach($jurusan as $j){
        $kerjaJurusan = Siswa::where('jurusan_id',$j->id)->where('status_id','1')->count();
        $kuliahJurusan = Siswa::where('jurusan_id',$j->id)->where('status_id','2')->count();
        $wirausahaJurusan = Siswa::where('jurusan_id',$j->id)->where('status_id','3')->count();
        $belumInputJurusan = Siswa::where('jurusan_id',$j->id)->where('status_id','4')->count();
        $jejakJurusan->dataset($j->jurusan,'area',[$kerjaJurusan,$kuliahJurusan,$wirausahaJurusan,$belumInputJurusan]);
        }
        $jejakJurusan->options([
            'tooltip' => [
                'split' => true,
                'valueSuffix' => ' Alumni'
            ]
        ]);
        $status = Status::all();
        $company = Instansi::orderby('nama','asc')->where('nama','!=',null)->get();
        $rayon = Rayon::orderby('rayon','asc')->get();
        if(auth::user()->role != 'admin'){
            switch (auth::user()->data->status_id) {
                case 1:
                    $formNon = ['Nama Instansi','Divisi','Durasi Kontrak Kerja','Pendapatan Bulanan','Alamat Instansi'];
                    break;

                case 2:
                    $formNon = ['Nama Fakultas','Jurusan','Tingkatan','Pendapatan Bulanan','Alamat Fakultas'];
                    break;
                case 3:
                    $formNon = ['Nama Perusahaan','Jenis Perusahaan','Lama Berdiri','Pendapatan Bulanan','Alamat Perusahaan'];
                    break;
                default:
                    $formNon = ['Nama Instansi','Divisi','Durasi Kontrak Kerja','Pendapatan Bulanan','Alamat Instansi'];
                    break;
            }
        }else{

            $formNon = 'admin';
        }

        $preset = preset::where('status','active')->first();
        // end chart jejak alumni
        return view('dashboard',compact('jejakAlumni','preset','company','formNon','rayon','jejakJurusan','jurusan','siswa','kerja','kuliah','wirausaha','belumInput','status'));
    }

    public function updateProfile(request $request){
        $user = User::where('id',auth::user()->id);
        $siswa = siswa::where('user_id',auth::user()->id);
        if($request->status != $siswa->first()->status_id){
        statusDetail::create([
            'nis' => auth::user()->data->nis,
            'status_id' => $request->status,
            'id_instansi' => '1',
        ]);
        }
        $user->update([
            'name' => $request->nama,
            'email' => $request->email
        ]);
        $siswa->update([
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'jk' => $request->jk,
            'status_id'=> $request->status
        ]);


        return redirect()->back()->with('success',['Data Berhasil Diupdate']);
    }

    public function updateAkademik(request $request){
        $siswa = siswa::where('user_id',auth::user()->id);
        $siswa->update([
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'masuk' => $request->masuk,
            'lulus'=> $request->lulus,
            'jurusan_id'=>$request->jurusan,
            'rayon_id'=>$request->rayon
        ]);
        return redirect()->back()->with('success',['Data Berhasil Diupdate']);
    }

    public function profiles(){
        $preset = preset::where('status','active')->first();
        return view('user.password',compact('preset'));
    }

    public function editProfiles(request $request){
    if($request->has('foto')){
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $imageName = time().'.'.$request->foto->getClientOriginalExtension();
        $request->foto->move(public_path('image/profiles'), $imageName);
    }else{
        $imageName =  auth::user()->foto;
    }
    if($request->newPassword != null ){
       $password = Hash::make($request->newPassword);
    }else{
        $password = auth::user()->password;
    }
    $user = user::where('id',auth::user()->id);
        $user->update([
            'username' => $request->username,
            'password' => $password,
            'foto' => $imageName,
        ]);

       return redirect()->back()->with('success',['Data Berhasil Diupdate']);
    }

    public function editDetail(request $request){
        $statusDetail = statusDetail::where('nis',auth::user()->data->nis);
        $latest = $statusDetail->where('id',$statusDetail->max('id'));
        if($latest->first()->id_instansi == null || $latest->first()->id_instansi == 1){
        $latest->update([
        'id_instansi' => $request->nama,
        'jabatan' => $request->jabatan,
        'pendapatan'=>$request->pendapatan,
        'durasi_kontrak'=>$request->kontrak
        ]);
        }else{
        statusDetail::create([
        'id_instansi' => $request->nama,
        'jabatan' => $request->jabatan,
        'pendapatan'=>$request->pendapatan,
        'durasi_kontrak'=>$request->kontrak,
        'nis'=>$latest->first()->nis,
        'status_id'=>$latest->first()->status_id,
        ]);
        }
        return redirect()->back()->with('success',['Data Berhasil Diupdate']);
    }

    public function datatables(){
        $data = datastatus::where('nis',auth::user()->data->nis);
        return DataTables::of($data)
        ->addColumn('action', function ($data) {
            return '<a href="javascript:void(0);" id="delete-product" data-toggle="tooltip" data-original-title="Delete" data-id="{{ $id }}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>';
        })
        ->addColumn('created_at', function($data) {
            return $data->created_at->format('Y-m-d');
        })
        ->make(true);
    }

    public function destroy($id)
    {
    $data = statusDetail::where('id',$id)->delete();
    return Response::json($data);
    }
}
