<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    // Employee.php (Model)
protected $fillable = ['name', 'designation', 'about', 'image'];

    use HasFactory;
}
