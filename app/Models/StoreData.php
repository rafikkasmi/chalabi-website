<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreData extends Model
{
    use HasFactory;
    protected $table = 'store_data';
    protected $fillable = [
        'phone_number',
        'email',
        'secondary_phone_number',
        'address',
        'slider_image1',
        'slider_image2',
        'slider_image3',
        'slider_headline1',
        'slider_text1',
        'slider_headline2',
        'slider_text2',
        'slider_headline3',
        'slider_text3',
        
    ];

}
