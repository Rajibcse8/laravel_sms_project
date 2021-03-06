<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable  
{
   
    use Notifiable;
    
  

    protected $fillable = [
        'name', 'email', 'password',
    ];


   

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function purchases()
    {
       return $this->hasMany(Purchase::class, 'creater_purchase_id');
    }

    public function customers()
    {
       return $this->hasMany(Purchase::class, 'creater_customer_id');
    }
    public function sells()
    {
       return $this->hasMany(Sell::class, 'seller_id');
    }

}




