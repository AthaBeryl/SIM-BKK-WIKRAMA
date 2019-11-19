<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Jurusan;
use App\StatusDetail;
use App\Charts\jejakAlumni;
use App\Charts\jejakJurusan;
use App\Charts\jabatan;
use App\Exports\AlumniExport;
use Maatwebsite\Excel\Facades\Excel;

class LaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kerja = Siswa::where('status','kerja')->count();
        $kuliah = Siswa::where('status','kuliah')->count();
        $wirausaha = Siswa::where('status','wirausaha')->count();
        $belumInput = Siswa::where('status','Belum Input')->count();
        $jurusan = Jurusan::all();
        $siswa = Siswa::all();

        //Chart Jejak Alumni
        $jejakAlumni = new jejakAlumni;
        $jejakAlumni->labels(['kerja','kuliah','wirausaha','belum input']);
        $jejakAlumni->dataset('Alumni','line',[$kerja,$kuliah,$wirausaha,$belumInput])
        ->options([
            'backgroundColor' => 'rgba(190, 37, 35, 0.82)',
            ]);

        $jejakAlumni->displayAxes(false);
        $jejakAlumni->displayLegend(false);

        // Chart Jejak Alumni per jurusan
        $jejakJurusan = new jejakJurusan;
        $jejakJurusan->labels(['kerja','kuliah','wirausaha','belum input']);
        foreach($jurusan as $j){
        $kerjaJurusan = Siswa::where('jurusan',$j->short)->where('status','kerja')->count();
        $kuliahJurusan = Siswa::where('jurusan',$j->short)->where('status','kuliah')->count();
        $wirausahaJurusan = Siswa::where('jurusan',$j->short)->where('status','wirausaha')->count();
        $belumInputJurusan = Siswa::where('jurusan',$j->short)->where('status','Belum Input')->count();
        $jejakJurusan->dataset($j->jurusan,'area',[$kerjaJurusan,$kuliahJurusan,$wirausahaJurusan,$belumInputJurusan]);
        }
        $jejakJurusan->options([
            'tooltip' => [
                'split' => true,
                'valueSuffix' => ' Alumni'
            ]
        ]);

        // Chart Jabatan
        $getSiswaNisForKerja = siswa::where('status','kerja')->pluck('nis');
        $getDataAlumniKerja = StatusDetail::whereIn('nis',$getSiswaNisForKerja)->selectRaw('COUNT(NIS) as jumlah_alumni , jabatan')
        ->groupby('jabatan')->get();
        $jabatan = new jabatan;
        $collectJumlah = collect([]);
        $collectJabatan = collect([]);
        foreach($getDataAlumniKerja as $jab){
        $collectJumlah->push($jab->jumlah_alumni);
        $collectJabatan->push($jab->jabatan);
        }
        $jabatan->labels($collectJabatan);
        $jabatan->dataset('Jabatan Alumni','polarArea',$collectJumlah)->options([
            'backgroundColor' => ['#49ACF8','#FFC44F','#FF5CF5','#4FFF8A','#0F3CFF','#FF4B4B','#49ACF1','#FFC45F','#FF5CF9','#4FFF5A','#0F3CCF','#FF4B4E']
            ]);
        $jabatan->displayAxes(false);

        //Chart Kerja

        return view('admin.laporan',compact('jejakAlumni','jejakJurusan','jabatan','jurusan','siswa','kerja','kuliah','wirausaha','belumInput'));
    }

    public function export()
    {
        return Excel::download(new AlumniExport, 'Alumni.xlsx');
    }
}
