<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Attendance;

class AttendanceController extends Controller
{
    //
    public function qrPost(Request $request){
        $attendance = new Attendance();
        $attendance->club_id="1";
        $attendance->member_id="10";
        $attendance->date=$request->date;
        $attendance->save();
    }
}
