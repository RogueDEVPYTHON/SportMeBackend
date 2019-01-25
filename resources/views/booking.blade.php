@extends('layouts.master')
@section('content')
@if($user->user_type == 1)
<div class="content col-md-9 offset-md-3 order-1 order-md-2">
    <div class="row">
        <div class="col-12">
            <div class="block">
                <h3>My Bookings</h3>
                
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
                            </div>
                            <?php
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
										<img src="{{ url('img/Blank_Avatar.png') }}" width="150" style="border-radius:50%" alt="">
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
                                    data-container="body" data-toggle="popover" data-placement="top" title="Session for {{ $date }} {{ $dayweek }}" data-content='<p>You have session for {{ $daybooking->start_time }}:00AM-{{ $daybooking->end_time }}:00AM with 
                                        <b>{{ $coach->first_name.' '.$coach->last_name }}</b>
                                    </p> 
                                    <a href="{{ url('showprofile/'.$coach->id) }}" class="profile-link">
                                        <div class="avatar">
                                        @if(!empty($coach->photo) && count($files) != 0)
                                            <img style="border-radius:50%" src="{{ url('storage/'.$files[0]) }}" alt="">
                                        @else
                                            <img src="{{ url('img/Blank_Avatar.png') }}" style="border-radius:50%" alt="">
                                        @endif
                                        </div>
                                        {{ $coach->first_name.' '.$coach->last_name }} Profile
                                    </a>
                                    <div class="buttons">
                                        <a href="#" class="contact">Contact</a>
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
@else
<div class="content col-md-9 offset-md-3 order-1 order-md-2">
		<div class="row filter">
			<div class="col-md-8">
				<div class="row">
					<div class="col">
		    	    	<div class="form-group">
		        	    	<label for="">Location</label>
		        	      	<input type="text" class="form-control" placeholder="Choose your location">
		        	    </div>
					</div>
					<div class="col">
		    	    	<div class="form-group">
		        	    	<label for="">Activity type</label>
		        	      	<input type="text" class="form-control" placeholder="Choose activity">
		        	    </div>
					</div>
					<div class="col">
		    	    	<div class="form-group">
		        	    	<label for="">My appointments</label>
		        	      	<input type="text" class="form-control" placeholder="Choose date of appointmemt">
		        	    </div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
    	    	<div class="form-group">
        	    	<label for="">Distance from office</label>
        	    	<div class="value">
        	    	  <span class="first">500m</span>
        	    	  <span class="last">10 miles</span>
        	    	</div>
        	      	<div id="sliderBookings">
        	      		<input type="hidden" value="" name="bookings_distance" >
        	      	    <div id="custom-handle-bookings" class="ui-slider-handle"><span></span></div>
        	      	</div>
        	      	
        	    </div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="block">
                    <!-- list of bookings -->
                    @foreach($bookings as $booking)
                    <?php
                    $customer = App\Models\Users::where('id', $booking->customer_id)->first();
                    if(!empty($customer->photo)){
                        $files = Storage::files($customer->photo);
                    }
                    ?>
                            
                        
					<div class="booking-item">
						<div class="left">
							<div class="avatar">
                            @if(!empty($customer->photo) && count($files) != 0)
                                <img width="150" height="150" style="border-radius:50%" src="{{ url('storage/'.$files[0]) }}" alt="">
                            @else
                                <img src="{{ url('img/Blank_Avatar.png') }}" width="150" style="border-radius:50%" alt="">
                            @endif
							</div>
						</div>
						<div class="right">
							<div class="row">
								<div class="col">
									<span class="title-b">{{ $customer->first_name.' '.$customer->last_name }}</span>
									<span class="title-s">{{ $customer->location }}</span>
								</div>
								<div class="col">
									<span class="title-b">Appointment Date</span>
									<span class="title-s">{{ $booking->appointment_date }}</span>
								</div>
								<div class="col">
									<span class="title-b">Activity Types</span>
									<span class="title-s">{{ $customer->interested_in }}</span>
								</div>
								<div class="col">
									<span class="title-b">Distance</span>
									<span class="title-s">100 m</span>
								</div>
								<div class="col">
									<a href="#" class="btn">Contact</a>
								</div>
							</div>
							<p>@if(strlen($customer->description) > 334) {{ substr($customer->description, 0, 331).'...' }} @else {{ $customer->description }} @endif  </p>
						</div>
                    </div>
                    @endforeach

					<!-- list of bookings end -->
					<div class="text-center">
						<a href="#" class="more">Load more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif
@endsection
@section('after_script')
    <script>var scr = {"scripts":[
		{"src" : "js/jquery-ui.min.js", "async" : false},
		]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
	</script>
@endsection