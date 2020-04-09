<?php

namespace App\Http\Controllers;

use App\InfoSekolah;
use App\Preset;
use DataTables;
use File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InfoSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware(['auth','admin']);
    }

    public function index()
    {
        $preset = preset::where('status','active')->first();
        return view('admin.infoSekolah',compact('preset'));
    }

    public function json()
    {
        return Datatables::of(InfoSekolah::all())->make(true);
    }

    public function active($id)
    {
        InfoSekolah::where('id',$id)->update(['status' => 'Aktif']);
        return response()->json();
    }

    public function deactive($id)
    {
        InfoSekolah::where('id',$id)->update(['status' => 'Tidak Aktif']);
        return response()->json();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $preset = preset::where('status','active')->first();
        return view('admin.inputInfoSekolah',compact('preset'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $path = public_path().'/image/InfoSekolah/';
        File::makeDirectory($path, $mode = 0777, true, true);
        $file = $request->file('foto');
        $nama_file = $request->judul."_".$file->getClientOriginalName();
        $file->move($path,$nama_file);

        InfoSekolah::create([
    		'judul' => $request->judul,
            'isi' => $request->isi,
            'foto' => $nama_file,
            'status' => 'Aktif'
        ]);

        
            
        return redirect('/infosekolah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InfoSekolah  $infoSekolah
     * @return \Illuminate\Http\Response
     */
    public function show(InfoSekolah $infoSekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InfoSekolah  $infoSekolah
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $preset = preset::where('status','active')->first();
        $data = InfoSekolah::where('id',$id)->get();
        return view('admin.editInfoSekolah',compact('preset','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InfoSekolah  $infoSekolah
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $sekolah = InfoSekolah::find($id);
        $sekolah->judul = $request->judul;
        $sekolah->isi = $request->isi;
        if ($request->hasFile('foto')) {
            $gambar = InfoSekolah::where('id',$id)->first();
	        File::delete('image/InfoSekolah/'.$gambar->foto);


            $path = public_path().'/image/InfoSekolah/';
            File::makeDirectory($path, $mode = 0777, true, true);
            $file = $request->file('foto');
            $nama_file = $request->judul."_".$file->getClientOriginalName();
            $file->move($path,$nama_file);
            $sekolah->foto = $nama_file;
        }
        $sekolah->save();

        return redirect('/infosekolah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InfoSekolah  $infoSekolah
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambar = InfoSekolah::where('id',$id)->first();
	    File::delete('image/InfoSekolah/'.$gambar->foto);

        InfoSekolah::find($id)->delete();
        return response()->json();
    }
}
