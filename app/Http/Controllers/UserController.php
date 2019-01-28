<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Mail\VerificationMail;
use Illuminate\Mail\Mailable;
use Mail;
use Twilio\Rest\Client;

class UserController extends Controller
{
    //Constructor
    public function __construct(){

    }

    /**
     * Show profile page
     * 
     * @author RogueDEVPYTHON
     * @return view
     */
    public function getProfile(){
        if(!Auth::check())
            return redirect('login');
        $data['title'] = 'User Profile';
        $data['user'] = Users::where('id', auth()->user()->id)->first();
        return view('profile/profile', $data);
    }

    /**
     * Send Verification Email
     * 
     * @return void
     */
    public function sendVerificationEmail(Request $request){
        $currentuser = Users::where('id', auth()->user()->id)->first();
        $data = ['username' => $currentuser->username,
                'token' => $currentuser->remember_token,];
        //return $request;
        Mail::to($currentuser->email)->send(new VerificationMail($data));
    }

    /**
     * Send Verification SMS
     * 
     * @return void
     */
    public function sendVerificationSMS(){
        $currentuser = Users::where('id', auth()->user()->id)->first();
        // Your Account SID and Auth Token from twilio.com/console
        $sid = env('TWILIO_ACCOUNT_SID');
        $token = env('TWILIO_AUTH_TOKEN');
        $client = new Client($sid, $token);
        $rand = rand(1000,9999);
        $currentuser->phone_authcode = $rand;
        $currentuser->save();
        // Use the client to do fun stuff like send text messages!
        $client->messages->create(
            // the number you'd like to send the message to
            $currentuser->phone_number,
            array(
                // A Twilio phone number you purchased at twilio.com/console
                'from' => env('TWILIO_REGISTER_NUMBER'),
                // the body of the text message you'd like to send
                'body' => "Your SportMe verified code is: ".$rand,
            )
        );
    }
    /**
     * Step register
     * 
     * @return void
     */
    public function Step_Register(Request $request){
        //return $request;
        if($request->step == 1)
        {
            $new_user = new Users();
            $new_user->user_type =2;
            $new_user->username = $request->first_name.' '.$request->last_name;
            $new_user->first_name = $request->first_name;
            $new_user->last_name = $request->last_name;
            $new_user->email = $request->email;
            $new_user->password = Hash::make($request->input('password'));;
            $new_user->birthday = $request->birthday;
            $new_user->phone_number = $request->phone_number;
            $new_user->save();
            $data['user_id'] = $new_user->id;
            $data['password'] = $request->password;
            return $data;
        }
        if($request->step ==3){
            $new_user = Users::where('id', $request->user_id)->first();
            $new_user->account_name = $request->account_name;
            $new_user->account_number = $request->account_number;
            $new_user->sort_code = $request->sort_code;
            $new_user->credit_type = $request->cardType;
            $new_user->card_number = $request->card_number;
            $new_user->name_on_card = $request->name_on_card;
            $new_user->billing_address = $request->billing_address;
            $new_user->expire_date = $request->expire_date;
            $new_user->cvc = $request->cvc;
            $new_user->save();
            $data['user_id'] = $new_user->id;
            return $data;
        }
    }

    /**
     * Show Registration Form
     * 
     * @return view
     */
    public function showRegistrationForm(){
        $data['step'] = 1;
        return view('registration', $data);
    }

    /**
     * Show next step
     * @return view
     */
    public function nextStep(Request $request){
        $data['step'] = $request->step + 1;
        $data['user'] = Users::where('id', $request->user_id)->first();
        
        return view('registration', $data);
    }

    /**
     * Check SMS verification Code
     * 
     * @return void
     */
    public function checkAuthCode(Request $request){
        if(!auth()->check())
            $id = $request->user_id;
        else
            $id = auth()->user()->id;
        $currentuser = Users::where('id', $id)->first();
        if($currentuser->phone_authcode == $request->code){
            $currentuser->phone_verified = 1;
            $currentuser->save();
        }
        return back();
    }

    /**
     * Save Bank Detail for coach
     * 
     * @return void
     */
    public function saveBankDetail(Request $request){
        $data['step'] = $request->step+1;
        $currentuser = Users::where('id', $request->user_id)->first();
        $currentuser->account_name = $request->account_name;
        $currentuser->account_number = $request->account_number;
        $currentuser->sort_code = $request->sort_code;
        $currentuser->creadit_type = $request->radio;
        $currentuser->card_number = $request->card_number;
        $currentuser->name_on_card = $request->name_on_card;
        $currentuser->billing_address = $request->billing_address;
        $currentuser->expire_date = $request->expire_date;
        $currentuser->cvc = $request->cvc;
        //$currentuser->save();
        $data['user'] = $currentuser;
        return view('registration', $data);
    }

    /**
     * Show the other's profile
     * 
     * @return view
     */
    public function ShowProfile($id){
        $data['title'] = 'User Profile';
        $data['user'] = Users::where('id', $id)->first();
        return view('profile/profile', $data);
    }

    /**
     * Edit Profile Page
     * 
     * @author RogueDEVPYTHON
     * @return view
     */
    public function editProfile(){
        $data['title'] = 'User Profile';
        $data['user'] = Users::where('id', auth()->user()->id)->first();
        return view('profile/editProfile', $data);
    }

    /**
     * Update Profile
     * 
     * @author RogueDEVPYTHON
     * @return view
     */
    public function updateProfile(Request $request){
        //return $request;
        $currentuser = Users::where('id', auth()->user()->id)->first();
        $name_array = explode(' ', $request->full_name);
        $currentuser->first_name = $name_array[0];
        $currentuser->last_name = $name_array[1];
        if($currentuser->user_type == 2){
            $inter_array = explode(', ', $request->interested_in);
            $currentuser->interested_in = $inter_array[0];
            $currentuser->coach_in = $inter_array[1];
            $currentuser->hourly_rate - $request->hourly_rate;
            $currentuser->experience = $request->experience;
        }
        else{
            $currentuser->interested_in = $request->interested_in;
            $currentuser->goals = $request->goals;
            $currentuser->boroughs = $request->boroughs;
        }
        $currentuser->age = $request->age;
        $currentuser->location = $request->location;
        $currentuser->description = $request->description;
        //return $currentuser;
        $currentuser->save();
        return redirect('profile');
    }

    /**
     * Register new user
     * 
     * @return void
     */
    public function Signup_user(Request $request){
        //return $request;
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required|min:6',
        ]);
        $new_user = new Users();
        $new_user->username = $request->username;
        $new_user->email = $request->email;
        $new_user->password = Hash::make($request->input('password'));
        $new_user->user_type = $request->radio5;
        $new_user->save();
        return redirect('account/'.$new_user->id);
    }

    /**
     * Register User
     * 
     * @return void
     */
    public function Register(Request $request){
        $new_user = new Users();
        $new_user->user_type = $request->user_type;
        $new_user->username = $request->first_name.' '.$request->last_name;
        $new_user->first_name = $request->first_name;
        $new_user->last_name = $request->last_name;
        $new_user->email = $request->email;
        $new_user->password = Hash::make($request->input('password'));
        $new_user->birthday = $request->birthday;
        $new_user->phone_number= $request->phone;
        $new_user->save();
        if($request->user_type == 2){
            $data['user'] = $new_user;
            $data['step'] = $request->step + 1;
            return view('registration', $data);
        }
        return view('login');
    }

    /**
     * Sign Out user
     * 
     * @return void
     */
    public function Signout(){
        Auth::logout();
        return redirect('/login');
    }

    /**
     * Show Account Information Page
     * 
     * @return void
     */
    public function getAccountInformation($id){
        $data['user'] = Users::where('id', $id)->first();
        $data['title'] = $data['user']->username;
        return view('account', $data);
    }

    /**
     * Register/Update User Information
     * 
     * @return void
     */
    public function updateAccountInfo(Request $request){
       // return $request;
        $currentuser = Users::where('id', $request->user_id)->first();
        if(!empty($request->first_name))
            $currentuser->first_name = $request->first_name;
        if(!empty($request->last_name))
            $currentuser->last_name = $request->last_name;
        if(!empty($request->birthday))
            $currentuser->birthday = $request->birthday;
        if(!empty($request->phone))
            $currentuser->phone_number = $request->phone;
        if(!empty($request->interested))
            $currentuser->interested_in = $request->interested;
        if(!empty($request->location))
            $currentuser->location = $request->location;
        if(!empty($request->coach_in))
            $currentuser->coach_in = $request->coach_in;
        $file = $request->file('profile_photo');
        if(!empty($file)){
            $destination_path = 'files/' . 'profiles/'.$currentuser->id;
            Storage::put($destination_path, $file);
            $currentuser->photo = $destination_path;
        }
        //return $currentuser;
        $currentuser->save();
        if(!auth()->check())
            return redirect('login');
        return back();
    }
    /**
     * Complete Registration
     * @return void
     */
    public function Complete(Request $request){
       // return $request;
        $currentuser = Users::where('id', $request->user_id)->first();
        $currentuser->interested_in = $request->item;
        if(!empty($request->coach_in))
            $currentuser->coach_in = $request->coach_in;
        $file = $request->file('profile_photo');
        if(!empty($file)){
            $destination_path = 'files/' . 'profiles/'.$currentuser->id;
            Storage::put($destination_path, $file);
            $currentuser->photo = $destination_path;
        }  
        $currentuser->save();
        //return $currentuser;
        //$credentials = $currentuser->only('email', 'password');
       // if (Auth::attempt($credentials)) {
            // Authentication passed...
       //     return redirect('/profile');
        //}
        return redirect('login');
              
    }

    /**
     * Show Coaches List
     * 
     * @return view
     */
    public function ShowCoachesList(){
        $data['title'] = 'Coaches';
        $data['coaches'] = Users::where('user_type', 2)->get();
        return view('coaches', $data);
    }
}
