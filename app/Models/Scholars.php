<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholars extends Model
{
    use HasFactory;

    protected $fillable = ['s_name', 'grants', 'short_des'];
}
