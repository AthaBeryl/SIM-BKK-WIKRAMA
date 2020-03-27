<?php

namespace App\Exports;

use App\datasiswa;
use App\Jurusan;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class AlumniExport implements FromView,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
         return view('report.alumni', [
            'siswas' => datasiswa::all(),
            'jurusan' => Jurusan::all()
         ]);
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
