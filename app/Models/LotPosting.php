<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LotPosting extends Model
{
    use HasFactory;
    protected $fillable=[
        'lot_number',
        'blk_number',
        'area',
        'price',
        'location',
    ];
}
