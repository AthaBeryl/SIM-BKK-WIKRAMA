<?php

namespace App\Http\Controllers;

use App\Landing;
use App\viewPesan;
use App\InfoLowongan;
use App\InfoSekolah;
use Illuminate\Http\Request;

class LandingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        InfoLowongan::where('expired','<=',\Carbon\Carbon::now()->format('Y-m-d'))
                    ->update(['status' => 'Expired']);
    }

    public function index()
    {
        $pesan = viewPesan::where('status','Aktif')->get();
        $sekolah = InfoSekolah::where('status','Aktif')->orderBy('updated_at','desc')->limit(3)->get();
        $lowongan = InfoLowongan::where('status','Aktif')->orderBy('updated_at','desc')->limit(3)->get();
        return view('landing.index',compact('sekolah','lowongan','pesan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // informasi sekolah
    public function form_single_sekolah($id)
    {
        $sekolah = InfoSekolah::where('id',$id)->get();
        return view('landing.form-single-sekolah',compact('sekolah'));
    }
    public function form_full_sekolah()
    {
        $sekolah = InfoSekolah::where('status','Aktif')->orderBy('updated_at','desc')->get();
        return view('landing.form-full-sekolah',compact('sekolah'));
    }
    // Loker
    public function form_full_lowongan()
    {
        $lowongan = InfoLowongan::where('status','Aktif')->orderBy('updated_at','desc')->get();
        return view('landing.form-full-lowongan',compact('lowongan'));
    }
    public function form_single_lowongan($id)
    {
        $lowongan = InfoLowongan::where('id',$id)->get();
        return view('landing.form-single-lowongan',compact('lowongan'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function show(Landing $landing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function edit(Landing $landing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Landing $landing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Landing $landing)
    {
        //
    }
}
