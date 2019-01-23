<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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
        if(!empty($request->location))
            $currentuser->coach_in = $request->coach_in;
        $file = $request->file('profile_photo');
        if(!empty($file)){
            $destination_path = 'files/' . 'profiles/'.$currentuser->id;
            Storage::put($destination_path, $file);
            $currentuser->photo = $destination_path;
        }
        //return $currentuser;
        $currentuser->save();
        return back();
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
