<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
    public function childrenCategories()
    {
        return $this->hasMany(Category::class)->with('categories');
    }


    public function seo()
    {
        return $this->morphOne(Seo::class,'seo')->whereLang(session('lang'));
    }

    public function delete_seo()
    {
        return $this->hasMany(Seo::class,'seo')->whereSeo_type(Category::class);
    }

}
