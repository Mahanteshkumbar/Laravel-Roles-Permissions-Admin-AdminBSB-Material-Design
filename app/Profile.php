<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'permanent_address', 'current_address', 'country', 'state', 'avatar', 'city', 'pincode', 'mobile', 'alternate_mobile', 'secondary_email', 'aadhar_no', 'user_id'
    ];

     public function users(){
        return $this->belongsTo(User::class, 'id');
    }
}
