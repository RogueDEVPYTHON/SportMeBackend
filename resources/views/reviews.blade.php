@extends('layouts.master')
@section('content')
<div class="content col-md-9 offset-md-3 order-1 order-md-2">
    <div class="row">
        <div class="col-12">
            <div class="block">
                <div class="rate-avarage">Your avarage rating 
                    <ul class="rate_stars">
                        <li class="star"></li>
                        <li class="star"></li>
                        <li class="star"></li>
                        <li class="star"></li>
                        <li class="star"></li>
                    </ul>
                    <span>{{ $average }} of 5</span>
                </div>
                <h3>{{ count($reviews) }} Reviews</h3>

                <div class="row">
                    <div class="col-12">
                        @foreach($reviews as $review)
                        <?php
                            $booking = App\Models\Booking::where('id', $review->booking_id)->first();
                            $customer = App\Models\Users::where('id', $booking->customer_id)->first();
                            
                            if(!empty($customer->photo)){
                                $files = Storage::files($customer->photo);
                            }
                        ?>
                        <div class="review-block">
                            <div class="left">
                                <div class="profile">
                                    @if(!empty($customer->photo) && count($files) != 0)
                                        <img style="border-radius:50%" src="{{ url('storage/'.$files[0]) }}" width="50" alt="">
                                    @else
                                        <img src="{{ url('img/Blank_Avatar.png') }}" style="border-radius:50%" width="50" alt="">
                                    @endif
                                </div>
                            </div>
                            <div class="right">
                                <span class="name">{{ $customer->first_name.' '.$customer->last_name }}</span>
                                <span class="date">{{ $review->created_at }}</span>
                                <div class="rate">
                                    <ul class="rate_stars">
                                        @for($i = 0; $i < $review->rating;$i++)
                                        <li class="star"></li>
                                        @endfor

                                    </ul>
                                    <span class="rate-text">{{ $review->rating }} of 5</span>
                                </div>
                                <span class="comment">{{ $review->description }}</span>
                            </div>
                        </div>
                        @endforeach
                        <div class="text-center">
                            <a href="#" class="more">Load more</a>
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