<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'father_name',
        'mother_name',
        'class',
        'student_id',
        'email',
        'district',
        'phone_number',
        'address',
    ];
}
