<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadViewController extends Controller
{
    public function index(){
    	return view('downloadView');
    }
}
