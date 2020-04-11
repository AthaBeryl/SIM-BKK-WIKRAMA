<?php

namespace App\Http\Controllers;

use App\Portofolio;
use App\Preset;
use DataTables;
use File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $preset = preset::where('status','active')->first();
        return view('user.portofolio',compact('preset'));
    }

    public function json()
    {
        return Datatables::of(portofolio::where('author_id',auth::user()->id)->get())->make(true);
    }

    public function active($id)
    {
        portofolio::where('id',$id)->update(['status' => 'Aktif']);
        return response()->json();
    }

    public function deactive($id)
    {
        portofolio::where('id',$id)->update(['status' => 'Tidak Aktif']);
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
        return view('user.inputportofolio',compact('preset'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $path = public_path().'/image/portofolio/';
        File::makeDirectory($path, $mode = 0777, true, true);
        $file = $request->file('foto');
        $nama_file = $request->judul."_".$file->getClientOriginalName();
        $file->move($path,$nama_file);

        portofolio::create([
    		'judul' => $request->judul,
            'isi' => $request->isi,
            'foto' => $nama_file,
            'status' => 'Aktif',
            'author_id' => auth::user()->id
        ]);

        
            
        return redirect('/portofolio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function show(portofolio $portofolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $preset = preset::where('status','active')->first();
        $data = portofolio::where('id',$id)->get();
        return view('user.editportofolio',compact('preset','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $sekolah = portofolio::find($id);
        $sekolah->judul = $request->judul;
        $sekolah->isi = $request->isi;
        if ($request->hasFile('foto')) {
            $gambar = portofolio::where('id',$id)->first();
	        File::delete('image/portofolio/'.$gambar->foto);


            $path = public_path().'/image/portofolio/';
            File::makeDirectory($path, $mode = 0777, true, true);
            $file = $request->file('foto');
            $nama_file = $request->judul."_".$file->getClientOriginalName();
            $file->move($path,$nama_file);
            $sekolah->foto = $nama_file;
        }
        $sekolah->save();

        return redirect('/portofolio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambar = portofolio::where('id',$id)->first();
	    File::delete('image/portofolio/'.$gambar->foto);

        portofolio::find($id)->delete();
        return response()->json();
    }
}
