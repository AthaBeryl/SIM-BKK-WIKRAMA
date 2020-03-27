<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\reminder;

class EmailController extends Controller
{
    public function reminder(){
       Mail::to("testing@malasngoding.com")->send(new reminder());
		return "Email telah dikirim";
    }
}
