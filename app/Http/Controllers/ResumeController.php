<?php

namespace App\Http\Controllers;
use App\datasiswa;
use App\datastatus;
use App\User;
use App\Resume;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
class ResumeController extends Controller
{
    public function index($userId){
        $alumni = datasiswa::where('user_id',$userId)->first();
        $status = datastatus::where('user_id',$userId)->latest()->first();
        $kerja = datastatus::whereIn('status',['Kerja','Wirausaha'])->where('nis',$alumni->nis)->orderby('created_at','asc')->get();
        $kuliah = datastatus::where('nis',$alumni->nis)->where('status','Kuliah')->orderby('created_at','asc')->get();
        $user = User::where('id',$userId)->first();
        return view('cv',compact('alumni','status','user','kerja','kuliah'));
    }

    public function download($userId){
        $data = Resume::where('user_id',$userId)->get();
        $pdf = PDF::loadView('report.cv', compact('data'));
        return $pdf->download($data->first()->nama_siswa."'s CV.pdf");
        // return view('report.cv', compact('data'));
    }
}
