<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tower extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 
        'days', 
        'description',
         'location_map_link',
        'location', 
        'Included', 
        'group_size', 
        'category', 
        'price',
        'home_image',
         'destination_image', 
         'destination_details_image',
         'excluded'
    ];
    
}
