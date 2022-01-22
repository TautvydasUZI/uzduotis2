<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAttendancegroupRequest;
use App\Http\Requests\UpdateAttendancegroupRequest;
use App\Models\Attendancegroup;

class AttendancegroupController extends Controller
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
     * @param  \App\Http\Requests\StoreAttendancegroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttendancegroupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attendancegroup  $attendancegroup
     * @return \Illuminate\Http\Response
     */
    public function show(Attendancegroup $attendancegroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attendancegroup  $attendancegroup
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendancegroup $attendancegroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttendancegroupRequest  $request
     * @param  \App\Models\Attendancegroup  $attendancegroup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttendancegroupRequest $request, Attendancegroup $attendancegroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attendancegroup  $attendancegroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendancegroup $attendancegroup)
    {
        //
    }
}
