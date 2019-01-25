<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Booking;
use App\Models\Feedback;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class BookingController extends Controller
{
    /**
     * Booking Controller Constructor
     * 
     * @return void
     */
    public function __construct(){

    }

    /**
     * Show Reviews Page
     * 
     * @return view
     */
    public function ShowReviews(){
        $data['title'] = "Reviews";
        $data['user'] = Users::where('id', auth()->user()->id)->first();
        $data['reviews'] = Feedback::where('coach_id', auth()->user()->id)->get();
        $total = 0;
        foreach($data['reviews'] as $review){
            $total += $review->rating;
        }
        $data['average'] = (float)$total/count($data['reviews']);
        return view('reviews', $data);
    }
    /**
     * Show Completed Session
     * 
     * @return view
     */
    public function ShowCompleteSession(){
        $data['title'] = 'Complete Session';
        $data['user'] = Users::where('id', auth()->user()->id)->first();
        $data['sessions'] = Booking::where('is_completed', 1)->where('customer_id',auth()->user()->id)->get();
        return view('session', $data);
    }    

    /**
     * Show Booking page
     * 
     * @return view
     */
    public function ShowBooking(){
        $data['title'] = 'Booking';
        $data['user'] = Users::where('id', auth()->user()->id)->first();
        if($data['user']->user_type == 2)
            $data['bookings'] = Booking::where('coach_id', auth()->user()->id)->get();
        if($data['user']->user_type == 1)
            $data['bookings'] = Booking::where('customer_id', auth()->user()->id)->get();
        return view('booking', $data);
    }

    /**
     * Show Availability
     * 
     * @@return view
     */
    public function ShowAvailability(){
        $data['title'] = 'Availability';
        $data['user'] = Users::where('id', auth()->user()->id)->first();
        return view('availability', $data);
    }

    /**
     * Step Booking
     * 
     * @return void
     */
    public function StepBooking($step, Request $request){
        //$data = $request->id;
        if($step == 1){
            $booking = new Booking();
            $booking->coach_id = $request->id;
            $booking->customer_id = auth()->user()->id;
            $booking->location = $request->coach_location;
            $booking->appointment_date = date('Y-m-d');
            $booking->start_time = 9;
            $booking->end_time = 11;
            $booking->save();
        }
        $currentcoach = Users::where('id', $request->id)->first();

        $currentcustommer = Users::where('id', auth()->user()->id)->first();
        $currentcoach['customer_email'] = $currentcustommer->email;
        
        if(!empty($currentcoach->photo)){
            $files = Storage::files($currentcoach->photo);
        }
        if(!empty($currentcoach->photo) && count($files) != 0)
            $currentcoach->photo = url('storage/'.$files[0]);
        else
            $currentcoach->photo = url('img/Blank_Avatar.png');
        $currentcoach['appointment_date'] = date('m/d/y');
        $currentcoach['profile_url'] = url('showprofile/'.$request->id);
        return $currentcoach;
    }
}
