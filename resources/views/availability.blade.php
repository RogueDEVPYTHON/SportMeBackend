@extends('layouts.master')
@section('content')
<div class="content col-md-9 offset-md-3 order-1 order-md-2">
    <div class="row">
        <div class="col-12">
            <div class="block">
                <a href="#" class="add-location">Add location</a>
                <h3 class="text-center">Availibility</h3>
                
                <div class="calendar-month">
                    <div class="item">January 2019</div>
                    <div class="item">February 2019</div>
                </div>
                <div class="calendars">
                    <div class="calendar">
                        <div class="inner">
                            <div class="calendar__header">
                            <div>Sun</div>
                            <div>Mon</div>
                            <div>Tue</div>
                            <div>Wed</div>
                            <div>Thu</div>
                            <div>Fri</div>
                            <div>Sat</div>
                            </div><?php
                            $this_year = date("Y"); 
                            $this_month = date("m");
                            $first_date = $this_year.'-'.$this_month.'-'.'01';
 
                            //Convert the date string into a unix timestamp.
                            $unixTimestamp = strtotime($first_date);
                             
                            //Get the day of the week using PHP's date function.
                            $firstdayOfWeek = date("N", $unixTimestamp);
                            ?>
                            <div class="calendar__week">
                                @for($i=0;$i<$firstdayOfWeek;$i++)
                                <div class="calendar__day day"></div>
                                @endfor
                                <?php
                                if(!empty($user->photo)){
                                    $files = Storage::files($user->photo);
                                }
                                ?>
									<!--<div class="image-block">
										
									@if(!empty($user->photo) && count($files) != 0)
										<img width="150" height="150" style="border-radius:50%" src="{{ url('storage/'.$files[0]) }}" alt="">
									@else
										<img src="{{ url('img/Blank_Ava4tar.png') }}" width="150" style="border-radius:50%" alt="">
									@endif-->
                                @for($i=1;$i<32;$i++)
                                    <?php
                                    $date = $this_year.'-'.$this_month.'-'.sprintf('%02d', $i);
                                    $daybooking = App\Models\Booking::where('customer_id', auth()->user()->id)->where('appointment_date', $date)->first();
                                    
                                    ?>
                                    <div class="calendar__day day" 
                                    @if(!empty($daybooking))
                                    <?php
                                        $coach = App\Models\Users::where('id', $daybooking->coach_id)->first();
                                        $dayweek = date("l", strtotime($date));
                                        if(!empty($coach->photo)){
                                            $files = Storage::files($coach->photo);
                                        }
                                    ?>
                                    data-container="body" data-toggle="popover" data-placement="top" title="Hours of {{ $date }}" data-content='<input type="text" placeholder="9:00am-11:00am" value="">
                                        <span>{{ url('date("N", strtotime($date))') }}</span>
                                        <div class="buttons">
                                            <a href="#" class="set">Set hours</a>
                                            <a href="#" class="cancel">Cancel</a>
                                        </div>'
                                    @endif
                                    >
                                    @if(!empty($daybooking))
                                        <span class="date">{{ $date }}</span>
                                        <span class="time">{{ $daybooking->start_time }}:00am-{{ $daybooking->end_time }}:00am,</span>
                                        <div class="avatar-small">
                                        @if(!empty($coach->photo) && count($files) != 0)
                                            <img style="border-radius:50%" src="{{ url('storage/'.$files[0]) }}" alt="">
                                        @else
                                            <img src="{{ url('img/Blank_Avatar.png') }}" style="border-radius:50%" alt="">
                                        @endif
                                        </div>
                                    @endif
                                    </div>
                                @endfor
                                @for($i=$firstdayOfWeek;$i<4;$i++)
                                <div class="calendar__day day"></div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('after_script')
    <script>var scr = {"scripts":[
		{"src" : "js/jquery-ui.min.js", "async" : false},
		]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
	</script>
@endsection