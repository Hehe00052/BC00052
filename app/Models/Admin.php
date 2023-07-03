<?php

namespace App\Models;

use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Admin extends Model
{
    protected $table = 'needhelp';
    protected $fillable = ['name', 'email', 'message'];
}

