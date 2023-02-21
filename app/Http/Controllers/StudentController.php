<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Http\Resources\StudentResource;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::with('studentsDetail', 'studentsPost')->has('studentsPost')->get();
        return ([
            // "data"=>$student
            "data"=>StudentResource::collection($student)
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        $student = Student::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        /* set relationship with student detail */

        $student->studentsDetail()->create([
            'registration_no'=>$request->registration_no,
            'course_name'=>$request->course_name,
            'roll_no'=>$request->roll_no
        ]);
        /* set relationship with student post */

        $student->studentsPost()->create([
            'title'=>$request->title,
            'slug'=>Str::slug($request->title),
            'description'=>$request->description
        ]);

        return $student;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //  $student = $student::with('studentsDetail', 'studentsPost')->has('studentsPost')->get();
        /* return ([
            // "data"=>$student
            "data"=>StudentResource::collection($student)
        ]);   */    
        return $student;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        // return $student;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        // $data = $request->validated();
        // $student->update($data);
        // return  $student;
        return  $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return response()->noContent();
    }
}
