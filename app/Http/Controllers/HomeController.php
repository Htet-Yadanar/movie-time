<?php

namespace App\Http\Controllers;

use App\Models\BusSchedule;
use App\Models\TimeSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    public function time_schedule(){
        return view('time_schedule');
    }
    public function bus_schedule(){
        return view('bus_schedule');
    }
    public function movie_time(){
        return view('movie_time');
    }
}
