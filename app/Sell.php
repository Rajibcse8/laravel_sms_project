<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    protected $table="sells"; 

    public function user(){
        return $this->belongsTo(User::class);

    }

    public function customers(){
        return $this->belongsTo(Customer::class);

    }
}
