<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

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
     * Show Booking page
     * 
     * @return view
     */
    public function ShowBooking(){
        $data['title'] = 'Booking';
        
        return view('booking');
    }
}
