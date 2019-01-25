@extends('layouts.master')
@section('content')
<div class="content col-md-9 offset-md-3 order-1 order-md-2">
		<div class="row">
			<div class="col-12">
				<div class="block">
					<span class="title no-border">Completed Sessions</span>
                    <!-- completed sessions list -->
                    @foreach($sessions as $session)
                    <?php
                    $coach = App\Models\Users::where('id',$session->coach_id)->first();
                    $customer = App\Models\Users::where('id',$session->customer_id)->first();
                    ?>
					<div class="session">
						<span class="date">{{ $session->updated_at }}</span>
						<span class="text">You finish session with <b>{{ $coach->first_name.' '.$coach->last_name }}</b> {{ $session->appointment_date }} from {{ $session->start_time }}:00AM to {{ $session->end_time }}:00AM</span>
						<span class="text"><b>Sport Type:</b>  {{ $customer->interested_in }}</span>
						<span class="text"><b>Location:</b> {{ $session->location }}</span>
						<span class="text"><b>Fee paid: 70£</b></span>
                    </div>
                    @endforeach

					<div class="text-center">
						<a href="#" class="more">Load more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection