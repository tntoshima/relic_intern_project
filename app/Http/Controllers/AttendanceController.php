<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Attendance;
use App\Models\Club;
use App\Models\Affiliation;

class AttendanceController extends Controller
{
    public function showList($id, $date){
        $club = Club::where('id', $id)->first();
        $attendances = Attendance::where('date', $date)->where('club_id', $club->id)->get();
        return view('attendance.list',[
            'attendances' => $attendances,
            'club' => $club,
            'date' => $date
        ]);
    }
  
    public function qrPost(Request $request){
        $attendance = new Attendance();
        $attendance->club_id="1";
        $attendance->member_id="10";
        $attendance->date=$request->date;
        $attendance->save();
    }
}
