<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\UserProfile as Authenticatable;

class UserProfile extends Model 
{
    //
    protected $fillable = [
        'userId', 'Contact', 'DOB', 'fbLink', 'pinterestLink', 'twitterLinnk', 'instaLink', 'Website', 'profilePicture'
    ];
}
