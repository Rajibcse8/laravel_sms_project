<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded =[];
    protected $table="customers";

    public function user(){
        return $this->belongsTo(User::class,'creater_customer_id');

    }
    
    public function sells(){
        return $this->hasMany(Sell::class);

    } 
}
