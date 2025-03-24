<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestSuite extends Model
{
    protected $fillable = [
        'name', 
        'description', 
        'platform', 
        'status'
    ];
}
