<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentPost extends Model
{
    use HasFactory;

    protected $table = 'student_posts';

    protected $fillable = [
        'title',
        'slug',
        'description'
    ];
}
