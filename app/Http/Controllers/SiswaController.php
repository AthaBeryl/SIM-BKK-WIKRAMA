<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\Jurusan;
use App\DataSiswa;
use App\DataStatus;
use App\Rayon;
use App\Status;
use App\User;
use App\Preset;
use App\statusDetail;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preset = preset::where('status','active')->first();
        $rayon = Rayon::all();
        $jurusan = Jurusan::all();
        $status = Status::all();
        return view('admin.formalumni',compact('rayon','jurusan','status','preset'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function trash()
    {
        $preset = preset::where('status','active')->first();
        return view('admin.trash',compact('preset'));
    }

    public function jsontrash()
    {
        $siswa = DataSiswa::whereNotNull('deleted_at')->get();
        return Datatables::of($siswa)->make(true);
    }

    public function restore($id)
    {
        Siswa::onlyTrashed()->where('user_id',$id)->restore();
        User::where('id', $id)
          ->update(['role' => 'alumni']);

        return response()->json();
    }

    public function destroy_permanent($id)
    {
        $nis = Siswa::onlyTrashed()->where('user_id',$id)->first()->nis;
        statusDetail::where('nis',$nis)->delete();
        Siswa::onlyTrashed()->where('user_id',$id)->forceDelete();
        User::where('id',$id)->delete();
        return response()->json();
    }

    public function restore_all()
    {
        Siswa::onlyTrashed()->restore();
        User::where('role', 'deleted')
          ->update(['role' => 'alumni']);
        return response()->json();
    }

    public function json()
    {
        $siswa = DataSiswa::where('deleted_at',NULL)->get();
        return Datatables::of($siswa)->make(true);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::updateOrCreate(['id' => $request->user_id],
                ['email' => $request->email, 'name' => $request->nama, 'username' => $request->nis, 'password' => Hash::make($request->nis), 'role' => 'alumni']);
        Siswa::updateOrCreate(['user_id' => $request->user_id],
                ['user_id' => $user->id, 'nisn' => $request->nisn, 'nis' => $request->nis, 'jurusan_id' => $request->jurusan, 'rayon_id' => $request->rayon, 'jk' => $request->jk, 'masuk' => $request->masuk, 'lulus' => $request->lulus, 'alamat' => $request->alamat, 'telp' => $request->telp, 'status_id' => '4']);
        statusDetail::updateOrCreate(['nis' => $request->nis],
                ['nis' => $request->nis,'status_id' => '4']);
        return response()->json();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DataSiswa::where('user_id',$id)->first();
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */

    public function detail($id)
    {
        $siswa = DataSiswa::where('user_id',$id)->first();
        $nis = DataSiswa::where('user_id',$id)->first()->nis;
        $status = DataStatus::where('nis',$nis)->first();
        $data = array($siswa,$status);
        return response()->json($data);
    }

    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        Siswa::where('user_id',$id)->delete();
        User::where('id', $id)
          ->update(['role' => 'deleted']);
        return response()->json();
    }
}