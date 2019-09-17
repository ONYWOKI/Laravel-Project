<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\germany;

class GermanyController extends Controller
{
    //
    public function germany(){
    	$germ = germany::all();
    	return view('germany',compact('germ'));
    }
}
