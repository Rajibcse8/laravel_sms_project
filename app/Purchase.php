<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    

    protected $guarded =[];
    
    public function user(){
        return  $this->belongsTo(User::class, 'creater_purchase_id');
    }
    
}
