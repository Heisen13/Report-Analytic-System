<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id', 'date', 'check_in_time', 'check_out_time',
    ];
}

