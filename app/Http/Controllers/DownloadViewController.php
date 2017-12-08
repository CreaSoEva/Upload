<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Models\t_form;

class DownloadViewController extends Controller
{
    public function index($id){
    	$ligne = t_form::find($id);
    	return view('downloadView',compact('ligne'));
    }

    public function download($id) {
    	$ligne = t_form::find($id);
    	return Storage::disk('public')->download($ligne->link_upload);
    }
}
