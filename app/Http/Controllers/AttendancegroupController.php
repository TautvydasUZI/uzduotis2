<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAttendancegroupRequest;
use App\Http\Requests\UpdateAttendancegroupRequest;
use App\Models\Attendancegroup;

use Illuminate\Http\Request;

class AttendancegroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendancegroups = Attendancegroup::all();
        return view('attendancegroup.index',['attendancegroups'=> $attendancegroups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $select_values = Attendancegroup::all();
        return view('attendancegroup.create', ['select_values' => $select_values]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAttendancegroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attendancegroup = new Attendancegroup;
        $attendancegroup->name = $request->attendancegroup_name;
        $attendancegroup->description = $request->attendancegroup_description;
        $attendancegroup->difficulty = $request->attendancegroup_difficulty;
        $attendancegroup->school_id = $request->attendancegroup_schoolid;
        
        $attendancegroup->save();
        return redirect()->route('attendancegroup.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attendancegroup  $attendancegroup
     * @return \Illuminate\Http\Response
     */
    public function show(Attendancegroup $attendancegroup)
    {
        return view('attendancegroup.show', ['attendancegroup' => $attendancegroup]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attendancegroup  $attendancegroup
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendancegroup $attendancegroup)
    {
        $select_values = Attendancegroup::all();
        return view('attendancegroup.edit', ['attendancegroup' => $attendancegroup, 'select_values' => $select_values]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttendancegroupRequest  $request
     * @param  \App\Models\Attendancegroup  $attendancegroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendancegroup $attendancegroup)
    {
        $attendancegroup->name = $request->attendancegroup_name;
        $attendancegroup->description = $request->attendancegroup_description;
        $attendancegroup->difficulty = $request->attendancegroup_difficulty;
        $attendancegroup->school_id = $request->attendancegroup_schoolid;
        
        $attendancegroup->save();
        return redirect()->route('attendancegroup.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attendancegroup  $attendancegroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendancegroup $attendancegroup)
    {
        $attendancegroup->delete();
        return redirect()->route('attendancegroup.index');
    }
}
