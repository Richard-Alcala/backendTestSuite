<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TestCase extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'steps',
        'testsuite_id',
    ];

    public function testsuites()
    {
        return $this->belongsTo(TestSuite::class);
    }
}
