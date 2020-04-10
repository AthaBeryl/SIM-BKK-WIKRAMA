<?php

namespace App\Http\Controllers;

use App\Pesan;
use App\preset;
use App\viewPesan;
use DataTables;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preset = preset::where('status','active')->first();
        return view('admin.pesan',compact('preset'));
    }

    public function json()
    {
        return Datatables::of(viewPesan::all())->make(true);
    }

    public function active($id)
    {
        Pesan::where('user_id',$id)->update(['status' => 'Aktif']);
        return response()->json();
    }

    public function deactive($id)
    {
        Pesan::where('user_id',$id)->update(['status' => 'Tidak Aktif']);
        return response()->json();
    }

    public function detail($id)
    {
        $data = viewPesan::where('id',$id)->get();

        return response()->json($data);
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
        Pesan::updateOrCreate(['user_id' => auth::user()->id],
            ['pesan' => $request->pesan, 'status' => 'Tidak Aktif']);
        return response()->json();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function show(Pesan $pesan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesan $pesan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pesan $pesan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pesan::where('user_id',$id)->delete();
        return response()->json();
    }
}
