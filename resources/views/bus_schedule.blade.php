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
      <div class="col-lg-6 col-md-12 col-sm-12 mt-5 align-self-center">
        <div class="form card mt-1">
          <h1>Save Time Schedule</h1>
            <form>
            <div class = "row justify-content-center">
              <div class="col-6">
                <p>Alarm time :</p>
              </div>
              <div class="col-3 ">
                <select class="form-select form-select-sm mb-3" id = "bus_arrival_hr" required>
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
                <select class="form-select form-select-sm mb-3" id = "bus_arrival_min" required>
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
            <div id="bus_info">
            </div>
        </div>
      </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script> 
        $(document).ready(function() {
                var APP_URL = {!! json_encode(url('/')) !!}
                
                  var bus_schedule_api = APP_URL+"/api/bus_schedule"
                          bus_info();
                          function bus_info(){
                            $.get(bus_schedule_api,
                            {
                                _token: $('meta[name="csrf-token"]').attr('content'),
                            },
                            function(data){
                                 table_row(data.data)
                            });
                          }
                            function table_row(data){
                              let htmlView = '';
                    
                                if(data.length <= 0){
                                  
                                htmlView+= `
                                No data found.
                                `;
                              }
                              for(let i = 0; i < data.length; i++){
                                htmlView += `
                                <table id="bus_info">
                                  <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Bus Arrival Time</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr class="bus_info">
                                      <td>1</td>
                                      <td>`+data[i].bus_arrival+`</td>
                                    </tr>
                                  </tbody>
                                </table>
                                `
                              }
                              $('#bus_info').html(htmlView);
                            }
                        var bus_schedule_store_api = APP_URL+"/api/bus_schedule_store"
                        $(document).on('click', '#save', function(e) {
                        e.preventDefault();
                        var bus_arrival_hour = $('#bus_arrival_hr').val();
                        var bus_arrival_minutes = $('#bus_arrival_min').val();
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            method: 'POST',
                            url: bus_schedule_store_api,
                            data: {bus_arrival_hour:bus_arrival_hour,
                                   bus_arrival_minutes:bus_arrival_minutes
                                  },
                            success: function(data) {
                                if(data.status==200){
                                    Swal.fire({
                                        icon: 'success',
                                        timer: 2000,
                                        timerProgressBar: true,
                                        text: 'Saved!',
                                        })
                                         $('#bus_arrival_hr').val("");
                                         $('#bus_arrival_min').val("");
                                         bus_info();
                                }
                                else if(data.status==400){
                                    Swal.fire({
                                        icon: 'warning',
                                        timer: 2000,
                                        timerProgressBar: true,
                                        text: 'Please fill all fields!',
                                        })   
                                }            
                }
                })
                })                
                })
    </script>
@endsection