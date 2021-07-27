<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    use HasFactory;
    
    protected $fillable = ['scry_id','code', 'name', 'release_date', 'icon_svg_uri'];
}
