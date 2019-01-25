@extends('layouts.master')
@section('content')
	<div class="content col-md-9 offset-md-3 order-1 order-md-2">
		<form action="{{ url('editProfile') }}" method="POST">
		@csrf
		<div class="row">
			<div class="col-12">
				<div class="block editable">
					<a href="#" class="edit group"></a>
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
											<input type="text" value="{{ $user->first_name.' '.$user->last_name }}" class="name" name="full_name">
											<input type="text" value="{{ $user->interested_in.', '.$user->coach_in }}" class="cat" name="interested_in">
										</div>
										<div class="col-md-6 col-xl-12">
											<input type="text" value="{{ $user->hourly_rate }}" name="hourly_rate" class="price">
										</div>
									</div>
									<div class="row">
										<div class="col-md-5">
											<span class="exp">Years of experience: <input type="text" name="experience" value="{{ $user->experience }}" size="2"></span>
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
									<div class="row">
										<div class="col-12">
											<div class="buttons">
												<a href="#" class="btn">Contact</a>
												<a href="#" class="btn">Book</a>
											</div>
										</div>
									</div>
								</div>
								@else
								<div class="col-md-9">
									<div class="row">
										<div class="col-12">
											<input type="text" value="{{ $user->first_name.' '.$user->last_name }}" class="name" name="full_name">
											I am interested in <input type="text" value="{{ $user->interested_in }}" class="cat" name="interested_in">
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
										<td><input type="text" name="age" value="{{ $user->age }}" size="2"></td>
									</tr>
									<tr>
										<td><b>Locations:</b></td>
										<td>
											<textarea name="location" id="" cols="30" rows="6" class="input">{{ $user->location }}</textarea>
										</td>
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
										<td><input type="text" name="goals" value="{{ $user->goals }}" size="6"></td>
									</tr>
									<tr>
										<td><b>Age:</b></td>
										<td><input type="text" name="age" value="{{ $user->age }}" size="6"></td>
									</tr>
									<tr>
										<td><b>Locations:</b></td>
										<td><input type="text" name="location" value="{{ $user->locatioin }}" size="15"></td>
									</tr>
									<tr>
										<td><b>Boroughs:</b></td>
										<td><textarea name="boroughs" id="" cols="30" rows="3" class="input">{{ $user->boroughs }}</textarea></td>
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
				<div class="block editable">
					<a href="#" class="edit"></a>
					<span class="title">About Me</span>
					<textarea name="description" id="" cols="30" rows="10">{{ $user->description }}
					</textarea>
					<div class="buttons">
						<button type="submit" class="btn">Save changes</button>
					</div>
				</div>
			</div>
		</div>
		</form>
	</div>
@endsection