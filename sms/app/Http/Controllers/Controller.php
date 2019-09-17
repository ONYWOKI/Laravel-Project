<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(request $req){
    	$fistName = $req->input('firstName');
    	$lastName = $req->input('lastName');
    	$mobile = $req->input('mobile');

    	$data = array('firstName' => $firstName, 'lastName'=>$lastName,'mobile'=>$mobile );

    	DB::table('register')->insert('$data');

    }
}
