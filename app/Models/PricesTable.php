<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricesTable extends Model
{
    use HasFactory;
    protected $table = 'prices';
    protected $fillable = [
        'from',
        'to',
    ];

}
