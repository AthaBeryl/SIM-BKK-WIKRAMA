<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Preset;

class ConfigController extends Controller
{
    public function index(){
        if(auth::user()->role != 'admin'){
            $preset= preset::where('status','active')->first();
            return view('admin.webConfig',compact('preset'));
        }else{
            return redirect('home');
        }


    }
}
