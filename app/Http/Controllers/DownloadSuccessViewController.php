<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadSuccessViewController extends Controller
{
   public function index(){
   	 return view('downloadsuccessView');
   }
}
