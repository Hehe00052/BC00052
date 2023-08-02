<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Needhelp extends Model
{
    use HasFactory;

    protected $table = 'needhelp';

    protected $fillable = [
        'name',
        'email',
        'message',
    ];
}
