@extends('layouts.app')

@section('content')

<div class="container ">

    <div class="row d-flex justify-content-center ">
      <div class="col-lg-6 col-md-12 col-sm-12 mt-5">
        <div class="whole-page">
          <div class="hands sc" id="sc"><i></i></div>
          <div class="hands mn" id="minutes"></div>
          <div class="hands hr" id="hours"></div>
  
      <div class="clock">
          <span style="--i:1;"><b>|</b></span>
          <span style="--i:2;"><b>|</b></span>
          <span style="--i:3;"><b class="number">3</b></span>
          <span style="--i:4;"><b>|</b></span>
          <span style="--i:5;"><b>|</b></span>
          <span style="--i:6;"><b class="number">6</b></span>
          <span style="--i:7;"><b>|</b></span>
          <span style="--i:8;"><b>|</b></span>
          <span style="--i:9;"><b class="number">9</b></span>
          <span style="--i:10;"><b>|</b></span>
          <span style="--i:11;"><b>|</b></span>
          <span style="--i:12;"><b class="number">12</b></span>
      </div>
  
      <div class="digital">
          <div id="h">00</div>
          <div id="m">00</div>
          <div id="s">00</div>
          <div id="a">00</div>
      </div>

        </div>

      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 mt-3 align-self-center">
        <div class="form card mt-1">
          <h1>Save Time Schedule</h1>
            <form>
            <div class = "row justify-content-center">
              <div class="col-6">
                <p>Alarm time :</p>
              </div>
              <div class="col-3 ">
                <select class="form-select form-select-sm mb-3" id = "alarm_hr" required>
                  <option value="" selected>hr</option>
                  <option value="0" >00</option>
                  <option value="1" >01</option>
                  <option value="2" >02</option>
                  <option value="3" >03</option>
                  <option value="4" >04</option>
                  <option value="5" >05</option>
                  <option value="6" >06</option>
                  <option value="7" >07</option>
                  <option value="8" >08</option>
                  <option value="9" >09</option>
                  <option value="10" >10</option>
                  <option value="11" >11</option>
                  <option value="12" >12</option>
                  <option value="13" >13</option>
                  <option value="14" >14</option>
                  <option value="15" >15</option>
                  <option value="16" >16</option>
                  <option value="17" >17</option>
                  <option value="18" >18</option>
                  <option value="19" >19</option>
                  <option value="20" >20</option>
                  <option value="21" >21</option>
                  <option value="22" >22</option>
                  <option value="23" >23</option>
                </select>  
              </div>
              <div class="col-3">
                <select class="form-select form-select-sm mb-3" id = "alarm_min">
                  <option value="" selected>min</option>
                  <option value="0" >00</option>
                  <option value="1" >01</option>
                  <option value="2" >02</option>
                  <option value="3" >03</option>
                  <option value="4" >04</option>
                  <option value="5" >05</option>
                  <option value="6" >06</option>
                  <option value="7" >07</option>
                  <option value="8" >08</option>
                  <option value="9" >09</option>
                  <option value="10" >10</option>
                  <option value="11" >11</option>
                  <option value="12" >12</option>
                  <option value="13" >13</option>
                  <option value="14" >14</option>
                  <option value="15" >15</option>
                  <option value="16" >16</option>
                  <option value="17" >17</option>
                  <option value="18" >18</option>
                  <option value="19" >19</option>
                  <option value="20" >20</option>
                  <option value="21" >21</option>
                  <option value="22" >22</option>
                  <option value="23" >23</option>
                  <option value="24" >24</option>
                  <option value="25" >25</option>
                  <option value="26" >26</option>
                  <option value="27" >27</option>
                  <option value="28" >28</option>
                  <option value="29" >29</option>
                  <option value="30" >30</option>
                  <option value="31" >31</option>
                  <option value="32" >32</option>
                  <option value="33" >33</option>
                  <option value="34" >34</option>
                  <option value="35" >35</option>
                  <option value="36" >36</option>
                  <option value="37" >37</option>
                  <option value="38" >38</option>
                  <option value="39" >39</option>
                  <option value="40" >40</option>
                  <option value="41" >41</option>
                  <option value="42" >42</option>
                  <option value="43" >43</option>
                  <option value="44" >44</option>
                  <option value="45" >45</option>
                  <option value="46" >46</option>
                  <option value="47" >47</option>
                  <option value="48" >48</option>
                  <option value="49" >49</option>
                  <option value="50" >50</option>
                  <option value="51" >51</option>
                  <option value="52" >52</option>
                  <option value="53" >53</option>
                  <option value="54" >54</option>
                  <option value="55" >55</option>
                  <option value="56" >56</option>
                  <option value="57" >57</option>
                  <option value="58" >58</option>
                  <option value="59" >59</option>
                </select>  
              </div>
            </div>


            <div class = "row justify-content-center">
              <div class="col-6 mt-1">
                <p>Brush teeth and shower time :</p>
              </div>
              <div class="col-3 ">
                <select class="form-select form-select-sm mb-3" id = "shower_hr">
                  <option value="" selected>hr</option>
                  <option value="0" >00</option>
                  <option value="1" >01</option>
                  <option value="2" >02</option>
                  <option value="3" >03</option>
                  <option value="4" >04</option>
                  <option value="5" >05</option>
                  <option value="6" >06</option>
                  <option value="7" >07</option>
                  <option value="8" >08</option>
                  <option value="9" >09</option>
                  <option value="10" >10</option>
                  <option value="11" >11</option>
                  <option value="12" >12</option>
                  <option value="13" >13</option>
                  <option value="14" >14</option>
                  <option value="15" >15</option>
                  <option value="16" >16</option>
                  <option value="17" >17</option>
                  <option value="18" >18</option>
                  <option value="19" >19</option>
                  <option value="20" >20</option>
                  <option value="21" >21</option>
                  <option value="22" >22</option>
                  <option value="23" >23</option>
                </select>  
              </div>
              <div class="col-3">
                <select class="form-select form-select-sm mb-3" id = "shower_min" >
                  <option value="" selected>min</option>
                  <option value="0" >00</option>
                  <option value="1" >01</option>
                  <option value="2" >02</option>
                  <option value="3" >03</option>
                  <option value="4" >04</option>
                  <option value="5" >05</option>
                  <option value="6" >06</option>
                  <option value="7" >07</option>
                  <option value="8" >08</option>
                  <option value="9" >09</option>
                  <option value="10" >10</option>
                  <option value="11" >11</option>
                  <option value="12" >12</option>
                  <option value="13" >13</option>
                  <option value="14" >14</option>
                  <option value="15" >15</option>
                  <option value="16" >16</option>
                  <option value="17" >17</option>
                  <option value="18" >18</option>
                  <option value="19" >19</option>
                  <option value="20" >20</option>
                  <option value="21" >21</option>
                  <option value="22" >22</option>
                  <option value="23" >23</option>
                  <option value="24" >24</option>
                  <option value="25" >25</option>
                  <option value="26" >26</option>
                  <option value="27" >27</option>
                  <option value="28" >28</option>
                  <option value="29" >29</option>
                  <option value="30" >30</option>
                  <option value="31" >31</option>
                  <option value="32" >32</option>
                  <option value="33" >33</option>
                  <option value="34" >34</option>
                  <option value="35" >35</option>
                  <option value="36" >36</option>
                  <option value="37" >37</option>
                  <option value="38" >38</option>
                  <option value="39" >39</option>
                  <option value="40" >40</option>
                  <option value="41" >41</option>
                  <option value="42" >42</option>
                  <option value="43" >43</option>
                  <option value="44" >44</option>
                  <option value="45" >45</option>
                  <option value="46" >46</option>
                  <option value="47" >47</option>
                  <option value="48" >48</option>
                  <option value="49" >49</option>
                  <option value="50" >50</option>
                  <option value="51" >51</option>
                  <option value="52" >52</option>
                  <option value="53" >53</option>
                  <option value="54" >54</option>
                  <option value="55" >55</option>
                  <option value="56" >56</option>
                  <option value="57" >57</option>
                  <option value="58" >58</option>
                  <option value="59" >59</option>
                </select>  
              </div>
            </div>

            <div class = "row justify-content-center">
              <div class="col-6 mt-1">
                <p>Breakfast time :</p>
              </div>
              <div class="col-3 ">
                <select class="form-select form-select-sm mb-3" id = "breakfast_hr">
                  <option value="" selected>hr</option>
                  <option value="0" >00</option>
                  <option value="1" >01</option>
                  <option value="2" >02</option>
                  <option value="3" >03</option>
                  <option value="4" >04</option>
                  <option value="5" >05</option>
                  <option value="6" >06</option>
                  <option value="7" >07</option>
                  <option value="8" >08</option>
                  <option value="9" >09</option>
                  <option value="10" >10</option>
                  <option value="11" >11</option>
                  <option value="12" >12</option>
                  <option value="13" >13</option>
                  <option value="14" >14</option>
                  <option value="15" >15</option>
                  <option value="16" >16</option>
                  <option value="17" >17</option>
                  <option value="18" >18</option>
                  <option value="19" >19</option>
                  <option value="20" >20</option>
                  <option value="21" >21</option>
                  <option value="22" >22</option>
                  <option value="23" >23</option>
                </select>  
              </div>
              <div class="col-3">
                <select class="form-select form-select-sm mb-3" id="breakfast_min">
                  <option value="" selected>min</option>
                  <option value="0" >00</option>
                  <option value="1" >01</option>
                  <option value="2" >02</option>
                  <option value="3" >03</option>
                  <option value="4" >04</option>
                  <option value="5" >05</option>
                  <option value="6" >06</option>
                  <option value="7" >07</option>
                  <option value="8" >08</option>
                  <option value="9" >09</option>
                  <option value="10" >10</option>
                  <option value="11" >11</option>
                  <option value="12" >12</option>
                  <option value="13" >13</option>
                  <option value="14" >14</option>
                  <option value="15" >15</option>
                  <option value="16" >16</option>
                  <option value="17" >17</option>
                  <option value="18" >18</option>
                  <option value="19" >19</option>
                  <option value="20" >20</option>
                  <option value="21" >21</option>
                  <option value="22" >22</option>
                  <option value="23" >23</option>
                  <option value="24" >24</option>
                  <option value="25" >25</option>
                  <option value="26" >26</option>
                  <option value="27" >27</option>
                  <option value="28" >28</option>
                  <option value="29" >29</option>
                  <option value="30" >30</option>
                  <option value="31" >31</option>
                  <option value="32" >32</option>
                  <option value="33" >33</option>
                  <option value="34" >34</option>
                  <option value="35" >35</option>
                  <option value="36" >36</option>
                  <option value="37" >37</option>
                  <option value="38" >38</option>
                  <option value="39" >39</option>
                  <option value="40" >40</option>
                  <option value="41" >41</option>
                  <option value="42" >42</option>
                  <option value="43" >43</option>
                  <option value="44" >44</option>
                  <option value="45" >45</option>
                  <option value="46" >46</option>
                  <option value="47" >47</option>
                  <option value="48" >48</option>
                  <option value="49" >49</option>
                  <option value="50" >50</option>
                  <option value="51" >51</option>
                  <option value="52" >52</option>
                  <option value="53" >53</option>
                  <option value="54" >54</option>
                  <option value="55" >55</option>
                  <option value="56" >56</option>
                  <option value="57" >57</option>
                  <option value="58" >58</option>
                  <option value="59" >59</option>
                </select>  
              </div>
              
            </div>

            
      <div class="row justify-content-center">
        <div class="col-10 mt-4 ">
          <p class="text-danger">*Time is used in the 24-hour notation in the form*</p>
        </div>
        <div class="col-2 ">
          <button class="float-right" id="save" type="submit">Save</button>
        </div>
      </div>   
</form>
        </div>
      </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script> 
        $(document).ready(function() {
                var APP_URL = {!! json_encode(url('/')) !!}
                        var time_schedule_api = APP_URL+"/api/time_schedule_store"
                        $(document).on('click', '#save', function(e) {
                        e.preventDefault();
                        var alarm_hour = $('#alarm_hr').val();
                        var alarm_minutes = $('#alarm_min').val();
                        var shower_hours = $('#shower_hr').val();
                        var shower_minutes = $('#shower_min').val();
                        var breakfast_hr = $('#breakfast_hr').val();
                        var breakfast_min = $('#breakfast_min').val();
                        // console.log(alarm_hour);
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            method: 'POST',
                            url: time_schedule_api,
                            data: {alarm_hour:alarm_hour,
                                   alarm_minutes:alarm_minutes,
                                   shower_hours:shower_hours,
                                   shower_minutes:shower_minutes,
                                   breakfast_hr:breakfast_hr,
                                   breakfast_min:breakfast_min
                                  },
                            success: function(data) {
                                 console.log(data);
                                if(data.status==200){
                                    Swal.fire({
                                        icon: 'success',
                                        timer: 2000,
                                        timerProgressBar: true,
                                        text: 'Saved!',
                                        })
                                         $('#alarm_hr').val("");
                                         $('#alarm_min').val("");
                                         $('#shower_hr').val("");
                                         $('#shower_min').val("");
                                         $('#breakfast_hr').val("");
                                         $('#breakfast_min').val("");
                                }
                                else if(data.status==400){
                                    Swal.fire({
                                        icon: 'warning',
                                        timer: 2000,
                                        timerProgressBar: true,
                                        text: 'Please fill all the required fields!',
                                        })   
                                }            
                }
                })
                })
                })
    </script>
@endsection