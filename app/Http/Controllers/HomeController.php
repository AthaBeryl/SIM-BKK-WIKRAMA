<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Jurusan;
use App\Charts\jejakAlumni;
use App\Charts\jejakJurusan;
use App\Exports\AlumniExport;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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


        // end chart jejak alumni
        return view('admin.dashboard',compact('jejakAlumni','jejakJurusan','jurusan','siswa','kerja','kuliah','wirausaha','belumInput'));
    }

    public function export()
    {
        return Excel::download(new AlumniExport, 'Alumni.xlsx');
    }
}
