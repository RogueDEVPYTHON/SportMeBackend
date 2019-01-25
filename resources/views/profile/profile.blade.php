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
		<div class="row">
			<div class="col-12">
				<div class="block">
					@if($user->id == auth()->user()->id)
					<a href="{{ url('editProfile') }}" class="edit group"></a>
					@endif
					<div class="row">
						<div class="col-lg-12 col-xl-8">
							<div class="row align-items-start">
								<div class="col-md-3">
									<?php
									if(!empty($user->photo)){
										$files = Storage::files($user->photo);
									}
									?>
									<div class="image-block">
										
									@if(!empty($user->photo) && count($files) != 0)
										<img width="150" height="150" style="border-radius:50%" src="{{ url('storage/'.$files[0]) }}" alt="">
									@else
										<img src="{{ url('img/Blank_Avatar.png') }}" width="150" style="border-radius:50%" alt="">
									@endif
									</div>
								</div>
								@if($user->user_type == 2)
								<div class="col-md-9">
									<div class="row">
										<div class="col-md-6 col-xl-5">
											<span class="name">{{ $user->first_name.' '.$user->last_name }}</span>
											<span class="cat">{{ $user->interested_in }}, {{ $user->coach_in }}</span>
										</div>
										<div class="col-md-6 col-xl-7">
											<span class="price">${{ $user->hourly_rate }}/hr</span>
										</div>
									</div>
									<div class="row">
										<div class="col-md-5">
											<span class="exp">Years of experience: <b>{{ $user->experience }}</b></span>
										</div>
										<!--<div class="col-md-7">
											<div class="rate">
												<ul class="rate_stars">
													<li class="star"></li>
													<li class="star"></li>
													<li class="star"></li>
													<li class="star"></li>
													<li class="star"></li>
												</ul>
												<span class="rate-text">4.67 of 5 (37 reviews)</span>
											</div>
										</div>-->
									</div>
									@if($user->id != auth()->user()->id)
									<div class="row">
										<div class="col-12">
											<div class="buttons">
												<a href="#" class="btn">Contact</a>
												<a href="javascript:step1Booking({{ $user->id }})" class="btn">Book</a>
											</div>
										</div>
									</div>
									@endif
								</div>
								@else
								<div class="col-md-9">
									<div class="row">
										<div class="col-12">
											<span class="name">{{ $user->first_name.' '.$user->last_name }}</span>
											<span class="cat">I'm interested in <span>{{ $user->interested_in }}</span></span>
										</div>
									</div>
									<div class="row">
										<div class="col-12">
											<div class="buttons">
												<a href="#" class="btn">Contact</a>
											</div>
										</div>
									</div>
								</div>
								@endif
							</div>
						</div>
						@if($user->user_type == 2)
						<div class="col-lg-12 col-xl-4">
							<table>
								<tbody>
									<tr>
										<td><b>Age:</b></td>
										<td>{{ $user->age }}</td>
									</tr>
									<tr>
										<td><b>Locations:</b></td>
										<td>{{ $user->location }}</td>
									</tr>
								</tbody>
							</table>
						</div>
						@else
						<div class="col-lg-12 col-xl-4">
							<table>
								<tbody>
									<tr>
										<td><b>Goals:</b></td>
										<td>{{ $user->goals }}</td>
									</tr>
									<tr>
										<td><b>Age:</b></td>
										<td>{{ $user->age }}</td>
									</tr>
									<tr>
										<td><b>Locations:</b></td>
										<td>{{ $user->location }}</td>
									</tr>
									<tr>
										<td><b>Boroughs:</b></td>
										<td>{{ $user->boroughs }}</td>
									</tr>
								</tbody>
							</table>
						</div>
						@endif
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="title-block">
					<span>Profile</span>
				</div>
				<div class="block">
					@if($user->id == auth()->user()->id)
					<a href="{{ url('editProfile') }}" class="edit"></a>
					@endif
					<span class="title">About Me</span>
					<p>{{ $user->description }}</p>
				</div>
			</div>
		</div>
    </div>
@endsection
@section('after_script')
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
                    $('#proceedModal > .modal-dialog > .modal-content > .modal-body').html('<p><b>To book this session, please pay '+(data['hourly_rate']*2)+'£ for 2 hours session with '+data['first_name']+' '+data['last_name']+'</b></p><span class="title">Billing methods</span><ul class="billing"><li><input class="radio" id="radio-1" type="radio" name="radio" value="credit" required="" checked><label for="radio-1"><div class="logo"><img src="'+ '{{ url('/img/mastercard.png') }} '+'" alt=""></div><span class="text">MasterVard ending in 0415</span></label></li><li><input class="radio" id="radio-2" type="radio" name="radio" value="paypal" required="" checked><label for="radio-2"><div class="logo"><img src="'+ '{{ url('/img/paypal.png') }}' +'" alt=""></div><span class="text">PayPal - '+data['customer_email']+'</span></label></li></ul>	<a href="javascript:step3Booking()" class="btn continue">Continue</a>');

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
                    $('#statusModal > .modal-dialog > .modal-content > .modal-body').html('<div class="status-image"><img src="'+'{{ url('/img/accepted.png') }}'+'" alt=""></div><span class="title text-center">Your payment was accepted</span><p class="text-center">You start a session with <b>'+data['first_name']+' '+data['last_name']+'</b> on <b>'+data['appointment_date']+' </b><br>from <b>9:00 AM</b> to <b>11:00 AM</b></p><a href="'+data['profile_url']+'" class="profile-link"><div class="avatar"><img src="'+data['photo']+'" style="height:100%" alt=""></div>'+data['first_name']+' '+data['last_name']+' Profile</a><a href="#" class="btn back" data-dismiss="modal" aria-label="Close">Back to dashboard</a>');
                }
            });
            $('#proceedModal').modal("hide");
            $('#statusModal').modal();
        }
	</script>
@endsection