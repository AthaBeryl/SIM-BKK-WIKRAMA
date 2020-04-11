<?php

namespace App\Http\Controllers;

use App\statusDetail;
use Illuminate\Http\Request;
use App\Preset;
use App\Resume;
use DataTables;
use Illuminate\Support\Facades\Auth; 
class StatusDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $preset = preset::where('status','active')->first();
        return view('user.formStatus',compact('preset'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function json()
    {
        return Datatables::of(Resume::where('user_id',Auth::user()->id))->make(true);
    }

    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Resume::updateOrCreate(['id' => $request->id],
            ['short' => $request->short, 'jurusan' => $request->jurusan]);
        return response()->json();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function show(Jurusan $jurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Resume::find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jurusan $jurusan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        statusDetail::find($id)->delete();
        return response()->json();
    }
}
