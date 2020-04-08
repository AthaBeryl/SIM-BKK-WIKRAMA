<?php

namespace App\Imports;

use App\Siswa;
use App\User;
use App\jurusan;
use App\Rayon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithStartRow;
class AlumniImport implements ToCollection,withstartrow
{
    /**
    * @param Collection $collection
    */

    public function collection(Collection $rows)
    {

        foreach ($rows as $row)
        {
            $jurusan = jurusan::where('jurusan',$row[4])->orwhere('short',$row[4])->first();
            $rayon = rayon::where('rayon',$row[5])->first();
            $user = User::updateOrCreate(['username' => $row[1]],[
                'name'=>$row[2],
                'username'=>$row[1],
                'password'=>hash::make($row[1]),
                'role' => 'alumni',
                'foto' => 'default.png',
            ]);

            $siswa = Siswa::UpdateOrCreate(['user_id'=> $user->id],[
                'nisn'=>$row[0],
                'user_id'=>$user->id,
                'nis'=>$row[1],
                'jk' => $row[3],
                'jurusan_id' => $jurusan->id,
                'rayon_id' => $rayon->id,
                'masuk' => $row[6],
                'lulus' => $row[7],
                'status_id'=> '4',
            ]);
        }


    }

    public function startRow(): int
    {
        return 2;
    }
}
