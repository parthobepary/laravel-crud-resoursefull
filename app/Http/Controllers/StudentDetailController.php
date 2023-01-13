<?php

namespace App\Http\Controllers;

use App\Models\StudentDetail;
use App\Http\Requests\StoreStudentDetailRequest;
use App\Http\Requests\UpdateStudentDetailRequest;
use App\Http\Resources\StudentDtailsResource;

class StudentDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $details = StudentDetail::with('details')->has('details')->get();
        $details = StudentDetail::with('details')->get();
        return ([
            "data" => StudentDtailsResource::collection($details)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentDetail  $studentDetail
     * @return \Illuminate\Http\Response
     */
    public function show(StudentDetail $studentDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentDetail  $studentDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentDetail $studentDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentDetailRequest  $request
     * @param  \App\Models\StudentDetail  $studentDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentDetailRequest $request, StudentDetail $studentDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentDetail  $studentDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentDetail $studentDetail)
    {
        //
    }
}
