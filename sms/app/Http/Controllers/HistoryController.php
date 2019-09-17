<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\history;

class HistoryController extends Controller
{
    //
    public function history(){
    	$hist=history::all();
    	return view('history',compact('hist'));
    }
}
