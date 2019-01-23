@extends('layouts.master')
@section('content')
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
									<a href="#" class="btn" data-toggle="modal" data-target="#bookModal">Book</a>
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