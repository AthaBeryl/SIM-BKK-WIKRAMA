<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Preset;
class PresetController extends Controller
{
    public function index(){
        if(auth::user()->role == 'admin'){
            $clrPreset = preset::all();
            $preset= preset::where('status','active')->first();
            return view('admin.webPreset',compact('preset','clrPreset'));
        }else{
            return redirect('home');
        }

    }

    public function edit(request $request){
        $deactive = preset::where('status','active')->first();
        $active = preset::where('id',$request->preset);
        $active->update(['status' => 'active']);
        $deactive->update(['status' => 'disable']);

        return redirect()->back();
    }
}
