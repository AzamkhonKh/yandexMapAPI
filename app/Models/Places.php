<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Places extends Model
{
    protected $table = 'places';
    protected $dates = ['updated_at', 'created_at'];
    protected $fillable = [
        'user_id',
        'name',
        'dolgota',
        'shirota',
        'location',
        'baloon_text',
    ];
}
