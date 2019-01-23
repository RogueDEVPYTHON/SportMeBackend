<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
   protected $table = 'users';
   
   /**
    * Indicates if the model should be timestamped.
    *
    * @var boolean
    */
   public $timestamps = true;
   
   /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
   protected $guarded = ['id'];
   
   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
       'username',
       'password',
       'email',
       'user_type',
       'first_name',
       'last_name',
       'birthday',
       'phone_number',
       'interested_in',
       'location',
       'photo',
       'coach_in',
       'hourly_rate',
       'age',
       'experience',
       'description',
       'goals',
       'boroughs'
   ];
   /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
   protected $dates = ['created_at', 'updated_at'];
}
