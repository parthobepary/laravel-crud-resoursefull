<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentDtailsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'student_id'=>$this->student_id,
            'registration_no'=>$this->registration_no,
            'course_name'=>$this->course_name,
            'roll_no'=>$this->roll_no,
        ];
    }
}
