<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grantees extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'fname', 'mname', 'lname', 'scholar_name', 'grants', 'description'];
}
