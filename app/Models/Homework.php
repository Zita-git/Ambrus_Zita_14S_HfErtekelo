<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'task',
        'url',
        'points',
        'message',
    ];
    protected $visible = [
        'name',
        'task',
        'url',
        'points',
        'message',
    ];

}
