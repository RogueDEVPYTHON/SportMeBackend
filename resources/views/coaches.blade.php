@extends('layouts.master')
@section('content')
<div class="modal fade" id="bookModal" tabindex="-1" role="dialog" aria-labelledby="bookModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bookModalLabel">Select available day and location</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="step1_user_id" value="">
      	<div id="datepicker"></div>
        <span class="title">Choose Location</span>
        <span class="text-i">Choose location where you want to meet with this coach</span>
       	<input type="text" class="form-control" placeholder="Location" id="location">
       	<span class="text-i">You want to start session on the 01/25/2019 from 9:00 AM to 11:00 AM with Francis Dos Santos</span>
       	<!--<span class="text-i"><b>Total to pay: - 70£</b> (Hourly Rate for this coach is <b>35£/hr</b>)</span>-->
       	<a href="javascript:step2Booking()" class="btn proceed">Proceed to payment</a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="proceedModal" tabindex="-1" role="dialog" aria-labelledby="proceedModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bookModalLabel">Choose payment method</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="statusModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="statusModalLabel">Payment status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="status-image">
      		<img src="./img/accepted.png" alt="">
      	</div>
      	<span class="title text-center">Your payment was accepted</span>
      	<p class="text-center">You start a session with <b>Francis Dos Santos</b> on <b>01/25/2019 </b><br>
			from <b>9:00 AM</b> to <b>11:00 AM</b></p>

		<a href="#" class="profile-link">
			<div class="avatar">
				<img src="./img/booking1.png" alt="">
			</div>
			Francis Dos Santos Profile
		</a>
       	<a href="#" class="btn back" data-dismiss="modal" aria-label="Close">Back to dashboard</a>
      </div>
    </div>
  </div>
</div>
    <div class="content col-md-9 offset-md-3 order-1 order-md-2">
		<div class="row filter">
			<div class="col-md-8">
				<div class="row">
					<div class="col">
		    	    	<div class="form-group">
		        	    	<label for="">Location</label>
		        	    	<div class="dropdown">
		        	    	  <button class="dropdown-toggle custom-select" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		        	    	    Choose your location
		        	    	  </button>
		        	    	  <div class="dropdown-menu" aria-labelledby="dropdownMenu">
		        	    	  	<div class="dropdown-item">
	        	    	  			<input class="radio" id="radio" type="radio" name="radio" required="">
	        	    	  			<label for="radio">
	        	    	  				Firstborough
	        	    	  		  	</label>
		        	    	  	</div>
		        	    	  	<div class="dropdown-divider"></div>
		        	    	  	<div class="dropdown-item">
	        	    	  			<input class="radio" id="radio-2" type="radio" name="radio2" required="">
	        	    	  			<label for="radio-2">
	        	    	  				Secondborough
	        	    	  		  	</label>
		        	    	  	</div>
		        	    	  	<div class="dropdown-divider"></div>
		        	    	  	<div class="dropdown-item">
	        	    	  			<input class="radio" id="radio-3" type="radio" name="radio3" required="">
	        	    	  			<label for="radio-3">
	        	    	  				Thirdborough
	        	    	  		  	</label>
		        	    	  	</div>
		        	    	  	<div class="dropdown-divider"></div>
		        	    	  	<div class="dropdown-item">
	        	    	  			<input class="radio" id="radio-4" type="radio" name="radio4" required="">
	        	    	  			<label for="radio-4">
	        	    	  				Fourthborough
	        	    	  		  	</label>
		        	    	  	</div>
		        	    	  	<div class="dropdown-divider"></div>
		        	    	  	<div class="dropdown-item">
	        	    	  			<input class="radio" id="radio-5" type="radio" name="radio5" required="">
	        	    	  			<label for="radio-5">
	        	    	  				Fifthborough
	        	    	  		  	</label>
		        	    	  	</div>
		        	    	  </div>
		        	    	</div>
		        	    </div>
					</div>
					<div class="col">
		    	    	<div class="form-group">
		        	    	<label for="">Activity type</label>
		        	    	<select class="custom-select">
		        	    	  <option selected>Choose activity</option>
		        	    	  <option value="1">One</option>
		        	    	  <option value="2">Two</option>
		        	    	  <option value="3">Three</option>
		        	    	</select>
		        	    </div>
					</div>
					<div class="col">
		    	    	<div class="form-group">
		        	    	<label for="">Hourly rate</label>
		        	    	<select class="custom-select">
		        	    	  <option selected>Choose hourly rate of coaches</option>
		        	    	  <option value="1">One</option>
		        	    	  <option value="2">Two</option>
		        	    	  <option value="3">Three</option>
		        	    	</select>
		        	    </div>
					</div>
				</div>
			</div>
			<div class="col-md-4 text-right">
    	    	<a href="#" class="btn find-coach">Find coach</a>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="block">
                    <!-- list of bookings -->
                    @foreach($coaches as $coach)
					<div class="coach-item">
						<div class="left">
                            <?php
                            if(!empty($coach->photo)){
                                $files = Storage::files($coach->photo);
                            }
                            ?>
							<div class="avatar">
								<img src="{{ url('storage/'.$files[0]) }}" alt="" style="height:100%">
							</div>
						</div>
						<div class="right">
							<div class="row">
								<div class="col">
									<span class="title-b">{{ $coach->first_name.' '.$coach->last_name }}</span>
									<span class="title-s">{{ $coach->location }}</span>
								</div>
								<!--<div class="col">
									<span class="title-b">Rating</span>
									<ul class="rate_stars">
										<li class="star fill"></li>
										<li class="star fill"></li>
										<li class="star fill"></li>
										<li class="star fill"></li>
										<li class="star half"></li>
									</ul>
									<span class="rate-text">4.67 of 5</span>
								</div>-->
								<div class="col">
									<span class="title-b">Activity Types</span>
									<span class="title-s">{{ $coach->interested_in }}</span>
								</div>
								<div class="col">
									<div class="centered-col">
										<div class="left">
											<span class="title-b">Distance</span>
											<span class="title-s">100 m</span>	
										</div>
										<div class="right">
											<span class="price">{{ $coach->hourly_rate }}£/hr</span>
										</div>
									</div>
								</div>
								<div class="col">
									<a href="javascript:step1Booking({{ $coach->id }})" class="btn">Book</a>
								</div>
							</div>
							<p>@if(strlen($coach->description) > 334) {{ substr($coach->description, 0, 331).'...' }} @else {{ $coach->description }} @endif </p>
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
@endsection('content')
@section('after_script')

	<script>var scr = {"scripts":[
		{"src" : "js/jquery-ui.min.js", "async" : false},
		]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
    </script>
    <script>
        function step1Booking(id){
            $('#step1_user_id').val(id);
            $('#step2_user_id').val(id);
            $('#step3_user_id').val(id);
            $('#bookModal').modal();
        }
        function step2Booking(){
           // alert('asdfasd');
            id = $('#step1_user_id').val();
            coach_location = $('#location').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.post('/stepBooking/1', { id: id, coach_location:coach_location },
                function(data){
                    $('#proceedModal > .modal-dialog > .modal-content > .modal-body').html('<p><b>To book this session, please pay '+(data['hourly_rate']*2)+'£ for 2 hours session with '+data['first_name']+' '+data['last_name']+'</b></p><span class="title">Billing methods</span><ul class="billing"><li><input class="radio" id="radio-1" type="radio" name="radio" value="credit" required="" checked><label for="radio-1"><div class="logo"><img src="./img/mastercard.png" alt=""></div><span class="text">MasterVard ending in 0415</span></label></li><li><input class="radio" id="radio-2" type="radio" name="radio" value="paypal" required="" checked><label for="radio-2"><div class="logo"><img src="./img/paypal.png" alt=""></div><span class="text">PayPal - '+data['customer_email']+'</span></label></li></ul>	<a href="javascript:step3Booking()" class="btn continue">Continue</a>');

                }
            );
            $('#bookModal').modal("hide");
            $('#proceedModal').modal();
        }
        function step3Booking(){
            id = $('#step1_user_id').val();
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: '/stepBooking/2',
                data: {id: id},
                success: function( data ) {
                    $('#statusModal > .modal-dialog > .modal-content > .modal-body').html('<div class="status-image"><img src="./img/accepted.png" alt=""></div><span class="title text-center">Your payment was accepted</span><p class="text-center">You start a session with <b>'+data['first_name']+' '+data['last_name']+'</b> on <b>'+data['appointment_date']+' </b><br>from <b>9:00 AM</b> to <b>11:00 AM</b></p><a href="'+data['profile_url']+'" class="profile-link"><div class="avatar"><img src="'+data['photo']+'" style="height:100%" alt=""></div>'+data['first_name']+' '+data['last_name']+' Profile</a><a href="#" class="btn back" data-dismiss="modal" aria-label="Close">Back to dashboard</a>');
                }
            });
            $('#proceedModal').modal("hide");
            $('#statusModal').modal();
        }
    </script>
@endsection