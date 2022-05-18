<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacebookLocation extends Model
{
    use HasFactory;
    protected $table = 'facebook_locations';
    protected $guarded = [];
}
