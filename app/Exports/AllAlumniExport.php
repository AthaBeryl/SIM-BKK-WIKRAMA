<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use App\Siswa;
class AllAlumniExport implements WithMultipleSheets
{
    use Exportable;
    public function sheets(): array
    {
        $sheets = [];
        $tahunLulus = Siswa::select('lulus')->orderby('lulus','desc')->groupby('lulus')->get();
        foreach ($tahunLulus as $angkatan) {
            $sheets[] = new AlumniExport($angkatan->lulus);
        }

        return $sheets;
    }
}
