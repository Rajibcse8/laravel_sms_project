<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{

    protected $guarded =[];
   
    public function user(){

        return $this->belongsTo(User::class,'seller_id');

    }

    public function customers(){
        return $this->belongsTo(Customer::class,'client_id');

    }
}
