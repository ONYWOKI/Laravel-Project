<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kiswahili;
use App\english;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function kiswahili(){
        $kis=Kiswahili::all();
        return view('kiswahili', compact('kis'));
    }
    public function english(){
        $eng=english::all();
        return view('english', compact('eng'));
    }
}
