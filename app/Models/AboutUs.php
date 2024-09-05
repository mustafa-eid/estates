<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $table = 'about_us';
    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'ar_title',
        'ar_desc_1',
        'ar_desc_2',
        'ar_desc_3',
        'image_1',
        'image_2',
    ];
}
