<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use HasFactory;
    protected $table = "seos";
    protected $primaryKey="id";
    protected $fillable = [
        'id',
        'name',
        'slug',
        'description',
        'content',
        'title_seo',
        'keyword_seo',
        'description_seo',
        'seo_type',
        'seo_id',
        'lang'
    ];
}
