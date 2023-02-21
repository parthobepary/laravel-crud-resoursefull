<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentDetail extends Model
{
    use HasFactory;

    protected $table = 'student_details';

    protected $fillable = [
        'registration_no',
        'course_name',
        'roll_no',
        'student_id',
        'students'
    ];

    public function details(){
        return $this->belongsTo(StudentPost::class);
    }
}
