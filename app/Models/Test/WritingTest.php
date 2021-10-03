<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WritingTest extends Model
{
    use HasFactory;
    
    protected $table = 'writing_test';
    protected $casts = [
        'id' => 'string'
    ];
}
