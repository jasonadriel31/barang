<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogBarang extends Model
{
    public function user(){
        return $this->belongsTo(Usermodel::class);
    } 
}
