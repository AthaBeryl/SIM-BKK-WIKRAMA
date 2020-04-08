<?php

namespace App\Exports;

use App\datasiswa;
use App\Jurusan;
use App\datastatus;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithTitle;

class AlumniExport implements FromView,ShouldAutoSize,WithTitle
{
    private $angkatan;
    public function __construct(int $angkatan)
    {
        $this->angkatan = $angkatan;
    }
    /**
    * @return \Illuminate\Support\Collection
    */



    public function view(): View
    {
         return view('report.alumni', [
            'siswas' => datasiswa::orderby('nis','asc')->where('lulus',$this->angkatan)->get(),
            'jurusan' => Jurusan::all(),
            'status' => datastatus::all()
         ]);
     }

     public function title(): string
     {
         return 'Angkatan ' . $this->angkatan;
     }
}

// <?php

// namespace App\Exports;

// use App\Sembako;
// use Illuminate\Contracts\View\View;
// use Maatwebsite\Excel\Concerns\FromView;

// class SembakoExport implements FromView
// {
//     public function view(): View
//     {
//         return view('sembako', [
//             'datas' => Sembako::all()
//         ]);
//     }
// }
