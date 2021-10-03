<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReadingTest extends Model
{
    use HasFactory;

    protected $table = 'reading_test';
    protected $casts = [
        'id' => 'string'
    ];
}
