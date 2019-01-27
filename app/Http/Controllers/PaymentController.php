<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payments;
use App\Models\Users;

class PaymentController extends Controller
{
    /**
     * Controller Contstructor
     * 
     * @return void
     */
    public function __construct(){

    }

    /**
     * Show payments page
     * 
     * @return void
     */
    public function ShowPayments(){
        $data['title'] = 'Payments';
        $data['user'] = Users::where('id', auth()->user()->id)->first();
        $data['payment'] = Payments::where('user_id', auth()->user()->id)->first();
        return view('payments', $data);
    }

    /** 
     * Update Payment Informatioin
     * 
     * @return void
     */
    public function updatePayment(Request $request){
        $currentpayment = Payments::where('user_id', auth()->user()->id)->first();
        if(empty($currentpayment))
            $currentpayment = new Payments();
        $currentpayment->user_id = auth()->user()->id;
        $currentpayment->card_number = $request->card_number;
        $currentpayment->card_first_name = $request->first_name;
        $currentpayment->card_last_name = $request->last_name;
        $currentpayment->expire_on = $request->expire_on;
        $currentpayment->security_code = $request->security_code;
        $currentpayment->paypal_email = $request->paypal_email;
        if($request->radio == 'credit')
            $currentpayment->credit_prefered = 1;
        else
            $currentpayment->paypal_prefered = 1;
        $currentpayment->save();
        return back();
    }
}
