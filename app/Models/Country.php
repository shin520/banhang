<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Customer;

class Country extends Model
{
    use HasFactory;

    public function Customer(){
        return $this->hasMany('App\Models\Customer', 'id');
    }
}
