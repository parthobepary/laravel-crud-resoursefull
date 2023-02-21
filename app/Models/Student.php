<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'fullname',
        'email',
        'phone'
    ];

    /* relationship */
    public function studentsDetail(){
        return $this->hasOne(StudentDetail::class, 'student_id', 'id');
    }
    /* relationship post */

    public function studentsPost(){
        return $this->hasOne(StudentPost::class, 'student_id', 'id');
    }
}
