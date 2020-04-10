<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use yajra\DataTables\DataTables;
use App\Siswa;
use App\Jurusan;
use App\StatusDetail;
use App\Charts\jejakAlumni;
use App\Charts\jejakJurusan;
use App\Charts\jabatan;
use App\Charts\kerja;
use App\Charts\kuliah;
use App\Preset;
use App\Charts\jurusanKuliah;
use App\Charts\pendapatan;
use App\Exports\AlumniExport;
use App\Exports\AllAlumniExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\AlumniImport;
use Carbon\Carbon;
use App\Resume;
use App\datastatus;

class LaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','admin']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function import()
    {
        Excel::import(new AlumniImport,request()->file('file'));
        return back();
    }

    public function index()
    {
        $year = "Keseluruhan";
        $preset = preset::where('status','active')->first();
        $kerja = Siswa::where('status_id','1')->count();
        $kuliah = Siswa::where('status_id','2')->count();
        $wirausaha = Siswa::where('status_id','3')->count();
        $belumInput = Siswa::where('status_id','4')->count();
        $jurusan = Jurusan::all();
        $siswa = Siswa::all();
        $collectAllSiswa = Siswa::all()->pluck('nis');

        //Chart Jejak Alumni
        $jejakAlumni = new jejakAlumni;
        $jejakAlumni->labels(['kerja','kuliah','wirausaha','Belum Memilih']);
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
        $kerjaJurusan = Siswa::where('jurusan_id',$j->id)->where('status_id','1')->count();
        $kuliahJurusan = Siswa::where('jurusan_id',$j->id)->where('status_id','2')->count();
        $wirausahaJurusan = Siswa::where('jurusan_id',$j->id)->where('status_id','3')->count();
        $belumInputJurusan = Siswa::where('jurusan_id',$j->id)->where('status_id','4')->count();
        $jejakJurusan->dataset($j->jurusan,'line',[$kerjaJurusan,$kuliahJurusan,$wirausahaJurusan,$belumInputJurusan]);
        }
        $jejakJurusan->options([
            'tooltip' => [
                'split' => true,
                'valueSuffix' => ' Alumni'
            ]
        ]);

        // Chart Jabatan
        $getSiswaNisForKerja = siswa::where('status_id','1')->pluck('nis');
        $getSiswaNisForKuliah = siswa::where('status_id','2')->pluck('nis');
        $getDataAlumniKerja = StatusDetail::whereIn('nis',$getSiswaNisForKerja)->selectRaw('COUNT(NIS) as jumlah_alumni , jabatan')
        ->groupby('jabatan')->orderby('jumlah_alumni','desc')->limit(11)->get();
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

        // Chart  Tempat Kerja
        $getDataAlumniTempatKerja = datastatus::whereIn('nis',$getSiswaNisForKerja)->where('status','kerja')->selectRaw('COUNT(NIS) as jumlah_alumni , nama')
        ->groupby('nama')->orderby('jumlah_alumni','desc')->limit(11)->get();
        $chartKerja = new kerja;
        $collectJumlahKerja = collect([]);
        $collectPerusahaan = collect([]);
        foreach($getDataAlumniTempatKerja as $k){
        $collectJumlahKerja->push($k->jumlah_alumni);
        $collectPerusahaan->push($k->nama);
        }
        $chartKerja->labels($collectPerusahaan);
        $chartKerja->dataset('Alumni','bar',$collectJumlahKerja);
        $chartKerja->options([
            'yAxis' => [
                'allowDecimals' => false,
            ]
        ]);
        $chartKerja->displayAxes(true);
        $chartKerja->displayLegend(false);

        // Chart  Tempat Kuliah
        $getDataAlumniTempatKuliah = datastatus::whereIn('nis',$getSiswaNisForKerja)->where('status','kuliah')->selectRaw('COUNT(NIS) as jumlah_alumni , nama')
        ->groupby('nama')->orderby('jumlah_alumni','desc')->limit(11)->get();
        $chartKuliah = new kuliah;
        $collectJumlahKuliah = collect([]);
        $collectGedung = collect([]);
        foreach($getDataAlumniTempatKuliah as $k){
        $collectJumlahKuliah->push($k->jumlah_alumni);
        $collectGedung->push($k->nama);
        }
        $chartKuliah->labels($collectGedung);
        // $chartKuliah->labels(['Institut Teknologi Bandung','Institut Teknologi Papua NewGenea','Institut Teknologi Jakarta','Institut Teknologi Malang','Institut Teknologi Jayapura','Institut Teknologi Purwekerto','Institut Teknologi Surabaya','Institut Teknologi Bogor','Havard University','MIT','Wikrama']);
        $chartKuliah->dataset('Alumni','bar',$collectJumlahKuliah);
        $chartKuliah->options([
            'yAxis' => [
                'allowDecimals' => false,
            ]
        ]);
        $chartKuliah->displayAxes(true);
        $chartKuliah->displayLegend(false);
       

        // Chart Jurusan Kuliah
        $getDataAlumniJurusanKuliah = StatusDetail::whereIn('nis',$getSiswaNisForKuliah)->selectRaw('COUNT(NIS) as jumlah_alumni , jabatan')
        ->groupby('jabatan')->orderby('jumlah_alumni','desc')->limit(11)->get();
        $jurusanKuliah = new jurusanKuliah;
        $collectJumlahMahasiswa = collect([]);
        $collectJurusanKuliah = collect([]);
        foreach($getDataAlumniJurusanKuliah as $jk){
        $collectJumlahMahasiswa->push($jk->jumlah_alumni);
        $collectJurusanKuliah->push($jk->jabatan);
        }
        // $jurusanKuliah->labels($collectJurusanKuliah); -> klo data udh fix
        $jurusanKuliah->labels(['Sistem Informatika','Teknik Informatika','Desain Komunikasi Visual','Manejemen Bisnis','Komunikasi','Ilmu Komputer','Tehnik','Kimia','Fisika','Matematika Terapan','Matematika Murni']);
        $jurusanKuliah->dataset('Alumni','doughnut',$collectJumlah)->options([
            'backgroundColor' => ['#49ACF8','#FFC44F','#FF5CF5','#4FFF8A','#0F3CFF','#FF4B4B','#49ACF1','#FFC45F','#FF5CF9','#4FFF5A','#0F3CCF','#FF4B4E']
            ]);
        $jurusanKuliah->displayAxes(false);

        //chart pendapatan
        $pendapatan = new pendapatan;
        $RevenueA = StatusDetail::wherein('nis',$collectAllSiswa)->where('pendapatan','>=',10000000)->count();
        $RevenueB = StatusDetail::wherein('nis',$collectAllSiswa)->where('pendapatan','>=',3000000)->count();
        $RevenueC = StatusDetail::wherein('nis',$collectAllSiswa)->where('pendapatan','>=',1000000)->count();
        $RevenueD = StatusDetail::wherein('nis',$collectAllSiswa)->where('pendapatan','<=',500000)->count();
        $pendapatan->labels(['>= 10.000.000','>= 3.000.000','>= 1.000.000','<= 500.000']);
        $pendapatan->dataset('Jumlah Alumni','pie',[$RevenueA,$RevenueB,$RevenueC,$RevenueD])->options([
            'color' => ['#49ACF8','#FFC44F','#FF5CF5','#4FFF8A','#0F3CFF','#FF4B4B','#49ACF1','#FFC45F','#FF5CF9','#4FFF5A','#0F3CCF','#FF4B4E']
            ]);

        //Filter
        $alumni = 'Alumni';
        $tahunLulus = Siswa::select('lulus')->orderby('lulus','desc')->groupby('lulus')->get();
        return view('admin.laporan',compact('jejakAlumni','alumni','year','preset','jejakJurusan','jabatan','jurusanKuliah','chartKerja','chartKuliah','pendapatan','jurusan','siswa','kerja','kuliah','wirausaha','belumInput','tahunLulus'));
    }

    public function filtered(Request $request)
    {
       
        $preset = preset::where('status','active')->first();
        $kuliah = Siswa::where('status_id','2')->whereRaw("(lulus = ".$request->tahunLulus.")")->count();
        $kerja = Siswa::where('status_id','1')->whereRaw("(lulus = ".$request->tahunLulus.")")->count();
        $wirausaha = Siswa::where('status_id','3')->whereRaw("(lulus = ".$request->tahunLulus.")")->count();
        $belumInput = Siswa::where('status_id','4')->whereRaw("(lulus = ".$request->tahunLulus.")")->count();
        $jurusan = Jurusan::all();
        $siswa = Siswa::whereRaw("(lulus = ".$request->tahunLulus.")")->whereRaw("(jurusan_id = ".$request->jurusan.")")->get();
        $collectAllSiswa = Siswa::whereRaw("(lulus = ".$request->tahunLulus.")")->whereRaw("(jurusan_id = ".$request->jurusan.")")->pluck('nis');

        //Chart Jejak Alumni
        if($request->jurusan == "'--' or 1=1" ){

            $alumni = 'Alumni';
        }else{
            $jurusan = Jurusan::where('id',$request->jurusan)->get();
            $alumni = 'Alumni '. $jurusan->first()->jurusan;
        }
        $jejakAlumni = new jejakAlumni;
        $jejakAlumni->labels(['kerja','kuliah','wirausaha','Belum Memilih']);
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
        $kerjaJurusan = Siswa::where('jurusan_id',$j->id)->where('status_id','1')->whereRaw("(lulus = ".$request->tahunLulus.")")->whereRaw("(jurusan_id = ".$request->jurusan.")")->count();
        $kuliahJurusan = Siswa::where('jurusan_id',$j->id)->where('status_id','2')->whereRaw("(lulus = ".$request->tahunLulus.")")->whereRaw("(jurusan_id = ".$request->jurusan.")")->count();
        $wirausahaJurusan = Siswa::where('jurusan_id',$j->id)->where('status_id','3')->whereRaw("(lulus = ".$request->tahunLulus.")")->whereRaw("(jurusan_id = ".$request->jurusan.")")->count();
        $belumInputJurusan = Siswa::where('jurusan_id',$j->id)->where('status_id','4')->whereRaw("(lulus = ".$request->tahunLulus.")")->whereRaw("(jurusan_id = ".$request->jurusan.")")->count();
        $jejakJurusan->dataset($j->jurusan,'line',[$kerjaJurusan,$kuliahJurusan,$wirausahaJurusan,$belumInputJurusan]);
        }
        $jejakJurusan->options([
            'tooltip' => [
                'split' => true,
                'valueSuffix' => ' Alumni'
            ]
        ]);

        // Chart Jabatan
        $getSiswaNisForKerja = siswa::where('status_id','1')->whereRaw("(lulus = ".$request->tahunLulus.")")->whereRaw("(jurusan_id = ".$request->jurusan.")")->pluck('nis');
        $getSiswaNisForKuliah = siswa::where('status_id','2')->whereRaw("(lulus = ".$request->tahunLulus.")")->whereRaw("(jurusan_id = ".$request->jurusan.")")->pluck('nis');
        $getDataAlumniKerja = StatusDetail::whereIn('nis',$getSiswaNisForKerja)->selectRaw('COUNT(NIS) as jumlah_alumni , jabatan')
        ->groupby('jabatan')->orderby('jumlah_alumni','desc')->limit(11)->get();
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

         // Chart  Tempat Kerja
        $getDataAlumniTempatKerja = datastatus::whereIn('nis',$getSiswaNisForKerja)->where('status','kerja')->selectRaw('COUNT(NIS) as jumlah_alumni , nama')
        ->groupby('nama')->orderby('jumlah_alumni','desc')->limit(11)->get();
        $chartKerja = new kerja;
        $collectJumlahKerja = collect([]);
        $collectPerusahaan = collect([]);
        foreach($getDataAlumniTempatKerja as $k){
        $collectJumlahKerja->push($k->jumlah_alumni);
        $collectPerusahaan->push($k->nama);
        }
        $chartKerja->labels($collectPerusahaan);
        $chartKerja->dataset('Alumni','bar',$collectJumlahKerja);
        $chartKerja->options([
            'yAxis' => [
                'allowDecimals' => false,
            ]
        ]);
        $chartKerja->displayAxes(true);
        $chartKerja->displayLegend(false);

        // Chart  Tempat Kuliah
        $getDataAlumniTempatKuliah = datastatus::whereIn('nis',$getSiswaNisForKerja)->where('status','kuliah')->selectRaw('COUNT(NIS) as jumlah_alumni , nama')
        ->groupby('nama')->orderby('jumlah_alumni','desc')->limit(11)->get();
        $chartKuliah = new kuliah;
        $collectJumlahKuliah = collect([]);
        $collectGedung = collect([]);
        foreach($getDataAlumniTempatKuliah as $k){
        $collectJumlahKuliah->push($k->jumlah_alumni);
        $collectGedung->push($k->nama);
        }
        $chartKuliah->labels($collectGedung);
        // $chartKuliah->labels(['Institut Teknologi Bandung','Institut Teknologi Papua NewGenea','Institut Teknologi Jakarta','Institut Teknologi Malang','Institut Teknologi Jayapura','Institut Teknologi Purwekerto','Institut Teknologi Surabaya','Institut Teknologi Bogor','Havard University','MIT','Wikrama']);
        $chartKuliah->dataset('Alumni','bar',$collectJumlahKuliah);
        $chartKuliah->options([
            'yAxis' => [
                'allowDecimals' => false,
            ]
        ]);
        $chartKuliah->displayAxes(true);
        $chartKuliah->displayLegend(false);

        // Chart Jurusan Kuliah
        $getDataAlumniJurusanKuliah = StatusDetail::whereIn('nis',$getSiswaNisForKuliah)->selectRaw('COUNT(NIS) as jumlah_alumni , jabatan')
        ->groupby('jabatan')->orderby('jumlah_alumni','desc')->limit(11)->get();
        $jurusanKuliah = new jurusanKuliah;
        $collectJumlahMahasiswa = collect([]);
        $collectJurusanKuliah = collect([]);
        foreach($getDataAlumniJurusanKuliah as $jk){
        $collectJumlahMahasiswa->push($jk->jumlah_alumni);
        $collectJurusanKuliah->push($jk->jabatan);
        }
        // $jurusanKuliah->labels($collectJurusanKuliah); -> klo data udh fix
        $jurusanKuliah->labels(['Sistem Informatika','Teknik Informatika','Desain Komunikasi Visual','Manejemen Bisnis','Komunikasi','Ilmu Komputer','Tehnik','Kimia','Fisika','Matematika Terapan','Matematika Murni']);
        $jurusanKuliah->dataset('Alumni','doughnut',$collectJumlah)->options([
            'backgroundColor' => ['#49ACF8','#FFC44F','#FF5CF5','#4FFF8A','#0F3CFF','#FF4B4B','#49ACF1','#FFC45F','#FF5CF9','#4FFF5A','#0F3CCF','#FF4B4E']
            ]);
        $jurusanKuliah->displayAxes(false);

        //chart pendapatan
        $pendapatan = new pendapatan;
        $RevenueA = StatusDetail::wherein('nis',$collectAllSiswa)->where('pendapatan','>=',10000000)->count();
        $RevenueB = StatusDetail::wherein('nis',$collectAllSiswa)->where('pendapatan','>=',3000000)->count();
        $RevenueC = StatusDetail::wherein('nis',$collectAllSiswa)->where('pendapatan','>=',1000000)->count();
        $RevenueD = StatusDetail::wherein('nis',$collectAllSiswa)->where('pendapatan','<=',500000)->count();
        $pendapatan->labels(['>= 10.000.000','>= 3.000.000','>= 1.000.000','<= 500.000']);
        $pendapatan->dataset('Jumlah Alumni','pie',[$RevenueA,$RevenueB,$RevenueC,$RevenueD])->options([
            'color' => ['#49ACF8','#FFC44F','#FF5CF5','#4FFF8A','#0F3CFF','#FF4B4B','#49ACF1','#FFC45F','#FF5CF9','#4FFF5A','#0F3CCF','#FF4B4E']
            ]);

        //Filter
        $jurusanf = $request->jurusan;
        $jtahunf = $request->tahunLulus;
        $tahunLulus = Siswa::select('lulus')->orderby('lulus','desc')->groupby('lulus')->get();
        $year = $request->tahunLulus;
       
        if($request->tahunLulus == "'--' or 1=1"){
            $year = 'Keseluruhan';
        }
       
   
        return view('admin.laporan',compact('jejakAlumni','alumni','year','preset','jejakJurusan','jabatan','jurusanKuliah','chartKerja','chartKuliah','pendapatan','jurusan','siswa','kerja','kuliah','wirausaha','belumInput','tahunLulus'));
    }



    public function export(request $request)
    {
        $tahunLulus = Siswa::select('lulus')->orderby('lulus','desc')->groupby('lulus')->first();
        return Excel::download(new AllAlumniExport(), 'Alumni '.Carbon::now().'.xlsx');
    }
}
