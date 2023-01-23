<?php

namespace App\Providers;

use App\Models\BusSchedule;
use App\Models\TimeSchedule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('*',function($count){
            if (Auth::check()) {
                $schedule_time = TimeSchedule::where('user_id',auth()->user()->id)->count(); 
                $bus_time = BusSchedule::where('user_id',auth()->user()->id)->count();
                $count->with('schedule_time_count', $schedule_time);
                $count->with('bus_time_count', $bus_time);
            }
        });
    }
}
