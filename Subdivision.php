<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use  Illuminate\Database\Eloquent\Model;

class Subdivision extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        
        'region',
        'circle',
        'division_name',
        'subdivision_name',
        'address1',
        'address2',
        'place',
        'email',
        'phone_no',
        'designation'
       

    ];

   
}
