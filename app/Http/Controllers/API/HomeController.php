<?php

namespace App\Http\Controllers\API;

use App\Models\BusSchedule;
use App\Models\TimeSchedule;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

class HomeController extends BaseController
{
     public function bus_schedule(){
        $user =auth()->user()->id;
        $bus = BusSchedule::where('user_id',$user)->get();
        return response()->json([
           'data' => $bus
       ]);
   }
   public function time_schedule_store(Request $request) {
      $user_id = auth()->user()->id;
     
      $check = TimeSchedule::where('user_id',$user_id)->first();
   
      if($request->alarm_hour == null 
      or $request->alarm_minutes == null 
      or $request->shower_hours == null 
      or $request->shower_minutes == null 
      or $request->breakfast_hr == null 
      or $request->breakfast_min == null 
      ){
         return response()->json([
            'status' => '400'
        ]);
      }
      if($check ){
         $alarm = $request->alarm_hour.':'.$request->alarm_minutes;
         $shower = $request->shower_hours.':'.$request->shower_minutes;
         $breakfast = $request->breakfast_hr.':'.$request->breakfast_min;
         $update_schedules = TimeSchedule::findOrFail($check->id);
         $update_schedules->user_id = $user_id;
         $update_schedules->alarm_time = $alarm;
         $update_schedules->shower_time = $shower;
         $update_schedules->breakfast = $breakfast;
         $update_schedules->update();
         return response()->json([
            'status' => '200'
        ]);
      }else{
         $alarm = $request->alarm_hour.':'.$request->alarm_minutes;
         $shower = $request->shower_hours.':'.$request->shower_minutes;
         $breakfast = $request->breakfast_hr.':'.$request->breakfast_min;
         $save_schedules = New TimeSchedule();
         $save_schedules->user_id = $user_id;
         $save_schedules->alarm_time = $alarm;
         $save_schedules->shower_time = $shower;
         $save_schedules->breakfast = $breakfast;
         $save_schedules->save();
         return response()->json([
            'status' => '200'
        ]);
      }
     
   }

   public function bus_schedule_store(Request $request) {
     
      $user_id = auth()->user()->id;
     
      $check = BusSchedule::where('user_id',$user_id)->first();
     
      if($request->bus_arrival_hour == null or $request->bus_arrival_minutes == null){
         return response()->json([
            'status' => '400'
        ]);
      }
      else if($check){
         $bus = $request->bus_arrival_hour.':'.$request->bus_arrival_minutes;
         $update_schedules = BusSchedule::findOrFail($check->id);
         $update_schedules->bus_arrival = $bus;
         $update_schedules->update();
         return response()->json([
            'status' => '200'
        ]);
       }
       else{
         $bus = $request->bus_arrival_hour.':'.$request->bus_arrival_minutes;
         $save_schedules = New BusSchedule();
         $save_schedules->user_id = $user_id;
         $save_schedules->bus_arrival = $bus;
         $save_schedules->save();
         
         return response()->json([
            'status' => '200'
        ]);
       }    
   }

   public function movie_time(){
      $time_schedule =  TimeSchedule::where('user_id',auth()->user()->id)->first();
      $bus_schedule =  BusSchedule::where('user_id',auth()->user()->id)->first();
      if($time_schedule && $bus_schedule){
       $bus_schedule = date_parse($bus_schedule->bus_arrival);
       $bus_minutes = $bus_schedule['hour'] * 60 + $bus_schedule['minute'];
       $alarm_time = date_parse($time_schedule->alarm_time);
       $alarm_time_minutes = $alarm_time['hour'] * 60 + $alarm_time['minute'];
       $shower_time = date_parse($time_schedule->shower_time);
       $shower_time_minutes = $shower_time['hour'] * 60 + $shower_time['minute'];
       $breakfast = date_parse($time_schedule->breakfast);
       $breakfast_time_minutes = $breakfast['hour'] * 60 + $breakfast['minute'];
       $walking_time = 15;
       $time = $alarm_time_minutes + $shower_time_minutes + $breakfast_time_minutes + $walking_time;
       $bus_waiting_time = $bus_minutes - $time;
       $to_cinema = $time + $bus_waiting_time + 45; 
       $movie_time_ten = 10 *60 ;
       $movie_time_twelve = 12*60 + 30;
       $movie_time_three = 15*60 + 30;
       $movie_time_six = 18*60 + 30;
     
       if($to_cinema < $movie_time_ten){
          return response()->json([
             'message' => 'You can catch the time 10AM.'
         ]);
       }
       else if($to_cinema < $movie_time_ten OR $to_cinema <= $movie_time_twelve){
       
        return response()->json([
          'message' => 'You can catch the time 12:30AM.'
        ]);
       }
       elseif($to_cinema < $movie_time_twelve OR $to_cinema <= $movie_time_twelve OR $to_cinema <= $movie_time_three ){
          return response()->json([
             'message' => 'You can catch the time 3:30PM.'
           ]);
       }
       else{
          return response()->json([
             'message' => 'You can catch the time 6:30PM.'
           ]);
       }
      }
      else{
         return response()->json([
            'message' => 'No data'
          ]);
      }
   }
}
