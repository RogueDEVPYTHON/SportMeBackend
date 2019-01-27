@extends('layouts.master')
@section('after_style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<style>
	.dropdown-menu.open.show >.inner.open > .inner{
		display:block;
	}
	.bootstrap-select .dropdown-menu li a{
		padding:2px 10px
	}
	.bootstrap-select {
		width:100% !important;
	}
</style>
@endsection
@section('content')
    <div class="content col-md-9 offset-md-3 order-1 order-md-2">
		<div class="row">
			<div class="col-12">
				<div class="block">
                    @if($user->user_type == 1)
			      	<form action="{{ url('updateAccountInfo') }}" id="customerForm" method="POST">
						@csrf
						<input type="hidden" name="user_id" value="{{ $user->id }}">
				        <div class="row">
				        	<div class="col-md-8 left">
				        		<h2>Register with sportme</h2>
				        		<div class="row">
				        			<div class="col-md-6">
				        				<div class="form-group">
				        				    <label for="first_name">First Name</label>
				        				    <input type="text" class="form-control" name="first_name" value="{{ $user->first_name }}">
				        				</div>
				        			</div>
				        			<div class="col-md-6">
				        				<div class="form-group">
				        				    <label for="last_name">Last Name</label>
				        				    <input type="text" class="form-control" name="last_name" value="{{ $user->last_name }}">
				        				</div>
				        			</div>
				        		</div>
				        		<div class="row">
				        			<div class="col-md-6">
				        				<div class="form-group">
				        				    <label for="birthday">Birthday</label>
				        				    <input type="text" class="form-control" name="birthday" placeholder="DD/MM/YYYY" value="{{ $user->birthday }}">
				        				</div>
				        			</div>
				        			<div class="col-md-6">
				        				<div class="form-group">
				        				    <label for="phone">Phone number</label>
				        				    <input type="tel" class="form-control" name="phone" value=" {{ $user->phone_number }} ">
				        				</div>
				        			</div>
				        		</div>
				        		<div class="row">
				        			<div class="col-md-6">
				        				<div class="form-group">
				        				    <label for="interest">Sports of interest</label>
                                            <select class="selectpicker" multiple data-live-search="true" id="interested" name="interested">
                                                <option>Bodybuilding</option>
                                                <option>Aerobic</option>
                                                <option>Yoga</option>
                                                <option>Flexibility</option>
                                                <option>All</option>
                                            </select>
				        				</div>
				        			</div>
									<!--<input type="hidden" name="interested" id="interested_val" value=""/>-->
				        			<div class="col-md-6">
				        				<div class="form-group">
											<div class="form-group">
				        				    	<label for="location">Location</label>
												<select class="selectpicker" multiple data-live-search="true" name="location" id="location">
													<option>UK 1</option>
													<option>UK 2</option>
													<option>UK 3</option>
													<option>UK 4</option>
													<option>All</option>
												</select>
											</div>
				        				</div>
				        			</div>
									<!--<input type="hidden" name="location" id="location_val" value=""/>-->
				        		</div>
				        	</div>
				        	<div class="col-md-4 register">
				        		<button class="button" onclick="javascript:submitForm()">Register</button>
				        	</div>
				        </div>
			        </form>
                    @endif
                    @if($user->user_type == 2)
					<div class="nav nav-tabs" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-step1-tab" data-toggle="tab" href="#nav-step1" role="tab" aria-controls="nav-step1" aria-selected="true">Personal Information</a>
						<a class="nav-item nav-link" id="nav-step2-tab" data-toggle="tab" href="#nav-step2" role="tab" aria-controls="nav-step2" aria-selected="false">Verify your account</a>
						<a class="nav-item nav-link" id="nav-step3-tab" data-toggle="tab" href="#nav-step3" role="tab" aria-controls="nav-step3" aria-selected="false">Payment Method</a>
						<a class="nav-item nav-link" id="nav-step4-tab" data-toggle="tab" href="#nav-step4" role="tab" aria-controls="nav-step4" aria-selected="false">Coach Information</a>
					</div>
					<div class="tab-content" id="nav-tabContent" style="padding-top:20px">
						<div class="tab-pane fade show active" id="nav-step1" role="tabpanel" aria-labelledby="nav-step1-tab">
						<div class="row">
						<form action="{{ url('updateAccountInfo') }}" id="coach_form" method="POST">
							@csrf
							<input type="hidden" name="user_id" value="{{ $user->id }}">
							<div class="col-md-8 left">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="first_name_coach">First Name</label>
											<input type="text" class="form-control" name="first_name" value="{{ $user->first_name }}">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="second_name">Last Name</label>
											<input type="text" class="form-control" name="last_name" value="{{ $user->last_name }}">
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="birthday_coach">Birthday</label>
											<input type="text" class="form-control" id="birthday_coach" name="birthday" value="{{ $user->birthday }}" placeholder="DD/MM/YYYY">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="phone_number">Phone number</label>
											<input type="tel" class="form-control" id="phone_number" name="phone" value="{{ $user->phone_number }}">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 register coach">
								<button type="submit" class="button">Register</button>
							</div>
						</form>
						</div>
						
						</div>
						<div class="tab-pane fade" id="nav-step2" role="tabpanel" aria-labelledby="nav-step2-tab">
							<div class="row">
								<div class="col-md-8 left">
									@if($user->phone_verified != 1)
									<div class="row">
										<div class="col-12">
											<h3>Verify Account with Phone Number</h3>
											<p>When you press button “Send Me Code” you wil receive an message on your phone with 4 digit code.</p>
											<p>Just put this code in field below.</p>
											<a href="#" class="btn">Send me code</a>

											<p>Just put this code in field below.</p>
										</div>
									</div>
									<form action="{{ url('checkAuthCode') }}" method="POST">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" class="form-control" name = "code" id="code">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<button type= "submit" class="button">Check</button>
											</div>
										</div>
									</div>
									</form>
									@else
									<div class="row">
										<div class="col-12">
											<h3>Verify Account with Phone Number</h3>
											<p>Your phone number is already verified.</p>
										</div>
									</div>
									@endif
									@if($user->email_verified != 1)
									<div class="row">
										<div class="col-12">
											<h3>Verify Account with Email</h3>
											<p>When you press button “Send Me Email” you wil receive an email, just go and click on link in email.</p>
											<a href="javascript:sendVerificationEmail()" class="btn">Send me email</a>
										</div>
									</div>
									@else
									<div class="row">
										<div class="col-12">
											<h3>Verify Account with Email</h3>
											<p>Your email is already verified.</p>
										</div>
									</div>
									@endif
								</div>
								<div class="col-md-4 register coach">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
									<button class="button">Next</button>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="nav-step3" role="tabpanel" aria-labelledby="nav-step3-tab">
							<div class="row">
								<div class="col-md-8 left">
									<div class="row">
										<div class="col-12">
											<h3>Bank Details</h3>
											<p>You can get paid after completing a session</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="account_name">Account Holder Name</label>
												<input type="text" class="form-control" id="account_name">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="account_number">Account Number</label>
												<input type="text" class="form-control" id="account_number">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="sort_code">Sort / Code</label>
												<input type="text" class="form-control" id="sort_code">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12">	
											<p>First payment will only be taken after your first session takes place.</p>
											<p>We will then take a monthly payment as part of your subscription with us.</p>
											<h3>Choose Payment Method</h3>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="">&nbsp;</label>
												<div class="dropdown">
													<button class="dropdown-toggle custom-select" type="button" id="cardType" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													Mastercard/Visa
													</button>
													<div class="dropdown-menu" aria-labelledby="cardType">
													<div class="dropdown-item">
														<input class="radio" id="mastercard" type="radio" name="mastercard" required="">
														<label for="mastercard">
															Mastercard
														</label>
													</div>
													<div class="dropdown-divider"></div>
													<div class="dropdown-item">
														<input class="radio" id="visa" type="radio" name="visa" required="">
														<label for="visa">
															Visa
														</label>
													</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="card_number">Card Number</label>
												<input type="text" class="form-control" id="card_number">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="name_on_card">Name On Card</label>
												<input type="text" class="form-control" id="name_on_card">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="billing_address">Billing Address</label>
												<input type="text" class="form-control" id="billing_address">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="expire_date">Expire Date</label>
												<input type="text" class="form-control" id="expire_date">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="cvc">CVC</label>
												<input type="text" class="form-control" id="cvc">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 register coach">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
									<button class="button">Next</button>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="nav-step4" role="tabpanel" aria-labelledby="nav-step4-tab">
							<div class="row">
								<form action="{{ url('updateAccountInfo') }}" method="POST" enctype="multipart/form-data">
								@csrf
								<input type="hidden" name="user_id" value="{{ $user->id }}">
								<div class="col-md-8 left">
									<div class="row">
										<div class="col-md-12">
											<h3>I'm A Coach In</h3>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<select class="selectpicker" multiple data-live-search="true" id="coaching" name="interested" value="{{ $user->interested }}">
													<option>Bodybuilding</option>
													<option>Aerobic</option>
													<option>Yoga</option>
													<option>Flexibility</option>
													<option>All</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" class="form-control" name="coach_in" placeholder="Write here" value="{{ $user->coach_in }}">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<h3>Upload Your Photo</h3>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="file-upload">
												<div class="image-upload-wrap">
													<input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" name="profile_photo"/>
												</div>
												<button class="file-upload-btn btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Upload photo</button>
											</div>
										</div>
										<div class="col-md-8">
											<span class="text">* If you upload a photo you’re more likely to get noticed</span>
											<span class="text">JPEG, PNG format only</span>
											<span class="text">Minimum image resolution is 2MP</span>
											<span class="text">Maximum image resolution is 100MP</span>
											<span class="text">Maximum file size is 15MB</span>
										</div>
									</div>
								</div>
								<div class="col-md-4 register coach">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
									<button type="submit" class="button">Register</button>
								</div>
								</form>
							</div>
						</div>
					</div>
                    @endif
				</div>
			</div>
		</div>
    </div>
@endsection
@section('after_script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script>
    $(document).ready(function(){
        $('#interested').selectpicker();
        $('#lcation').selectpicker();
        $('#coaching').selectpicker();
    });
	function submitForm(){
		alert('asdfasdfasdf');
		var interested = $( "button[data-id='interested']" ).next().attr( "title" );
		$('#interested_val').val(interested);
		alert(interested);
		var location = $( "button[data-id='location']" ).next().attr( "title" );
		$('#location_val').val(location);
		alert(location);
		//$('#customerForm').submit();

	}
	function sendVerificationEmail(){
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.post('/sendVerificationEmail', {},
			function(data){
				alert("Verification email is sent to your email.")
			}
		);
	}
	function sendVerificationSMS(){
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.post('/sendVerificationSMS', {},
			function(data){
				alert("Verification SMS is sent to your phone number.")
			}
		);
	}
</script>
@endsection