<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    

    protected $guarded =[];
  
    protected $table="purchases";
    
    public function user(){
        return  $this->belongsTo(User::class, 'creater_purchase_id');
    }
    
}
