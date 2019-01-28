<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'UserController@getProfile');
/* Start Profile Section */
Route::get('/profile', 'UserController@getProfile');
Route::get('/editProfile', 'UserController@editProfile');
Route::post('/editProfile', 'UserController@updateProfile');
Route::get('showprofile/{id}', 'UserController@ShowProfile');
/* End Profile Section */

/* Login/SignUp */
Route::get('login', 'Auth\LoginController@ShowLoginForm');
Route::post('login', 'Auth\LoginController@login');
Route::post('signup', 'UserController@Signup_user');
Route::get('logout', 'UserController@Signout');
Route::get('showRegistrationForm', 'UserController@showRegistrationForm');
Route::post('register', 'UserController@Register');
Route::post('nextStep', 'UserController@nextStep');
Route::post('step_register', 'UserController@Step_Register');
Route::post('register_step4', 'UserController@Complete');
/* Login/SignUp */

/* Start Account Section */
Route::get('account/{id}', 'UserController@getAccountInformation');
Route::post('updateAccountInfo', 'UserController@updateAccountInfo');
Route::post('sendVerificationEmail', 'UserController@sendVerificationEmail');
Route::post('sendVerificationSMS', 'UserController@sendVerificationSMS');
Route::post('checkAuthCode', 'UserController@checkAuthCode');
Route::post('saveBankDetail', 'UserController@saveBankDetail');
/* End Account Section */

/* Start Booking Section */
Route::get('booking', 'BookingController@ShowBooking');
Route::get('coaches', 'UserController@ShowCoachesList');
Route::post('stepBooking/{step}', 'BookingController@StepBooking');
Route::get('availability', 'BookingController@ShowAvailability');
Route::get('reviews', 'BookingController@ShowReviews');
Route::get('complete_session', 'BookingController@ShowCompleteSession');
/* End Booking Section */

/* Start Payments Section */
Route::get('payments', 'PaymentController@ShowPayments');
Route::post('updatePayment', 'PaymentController@updatePayment');
/* End Payments Section */

