
<?php
    $currentuser = App\Models\Users::where('id', auth()->user()->id)->first();
?>
<div class="sidebar col-md-3 order-2 order-md-1">
    <ul class="menu">
        <li><a href="#" class="type1">Dashboard</a></li>
        <li><a href="{{ url('profile') }}" class="type2 active">Profile</a></li>
        <li><a href="{{ url('booking') }}" class="type3">Bookings</a></li>
        @if($currentuser->user_type == 2)
        <li><a href="#" class="type4">Availibility</a></li>
        <li><a href="#" class="type6">Reviews</a></li>
        @else
        <li><a href="#" class="type4">Completed Sessions</a></li>
        <li><a href="{{ url('coaches') }}" class="type9">Coaches</a></li>
        @endif
        <li><a href="#" class="type5">Payments</a></li>
        <li><a href="#" class="type7">Settings</a></li>
        <li>
            <a href="{{ url('logout') }}" class="type8">Logout</a>
            <div class="copyright">All Right Reserved © SportMe.com</div>
        </li>
    </ul>
    
</div>