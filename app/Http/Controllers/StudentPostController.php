<?php

namespace App\Http\Controllers;

use App\Models\StudentPost;
use App\Http\Requests\StoreStudentPostRequest;
use App\Http\Requests\UpdateStudentPostRequest;

class StudentPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreStudentPostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentPostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentPost  $studentPost
     * @return \Illuminate\Http\Response
     */
    public function show(StudentPost $studentPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentPost  $studentPost
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentPost $studentPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentPostRequest  $request
     * @param  \App\Models\StudentPost  $studentPost
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentPostRequest $request, StudentPost $studentPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentPost  $studentPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentPost $studentPost)
    {
        //
    }
}
