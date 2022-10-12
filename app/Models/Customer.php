<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Country;

class Customer extends Model
{
    use HasFactory;

    public function Country(){
        return $this->belongsTo('App\Models\Country', 'country', 'id');
    }
}
