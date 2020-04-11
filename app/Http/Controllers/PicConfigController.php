<?php

namespace App\Http\Controllers;

use App\PicConfig;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Preset;
class PicConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preset = Preset::where('status','active')->first();
        return view('admin.webConfig',compact('preset'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \App\PicConfig  $picConfig
     * @return \Illuminate\Http\Response
     */
    public function show(PicConfig $picConfig)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PicConfig  $picConfig
     * @return \Illuminate\Http\Response
     */
    public function edit(PicConfig $picConfig)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PicConfig  $picConfig
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PicConfig $picConfig)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PicConfig  $picConfig
     * @return \Illuminate\Http\Response
     */
    public function destroy(PicConfig $picConfig)
    {
        //
    }
}
