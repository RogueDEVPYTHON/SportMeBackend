@extends('layouts.master')
@section('content')
    <div class="content col-md-9 offset-md-3 order-1 order-md-2">
		<div class="row">
			<div class="col-12">
				<div class="block">
					<a href="{{ url('editProfile') }}" class="edit group"></a>
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
										
									@if(!empty($user->photo) && count(files) != 0)
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
					<a href="{{ url('editProfile') }}" class="edit"></a>
					<span class="title">About Me</span>
					<p>{{ $user->description }}</p>
				</div>
			</div>
		</div>
    </div>
@endsection