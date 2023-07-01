<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function reportAllAttendances()
{
    $attendances = Attendance::all();

    return response()->json(['attendances' => $attendances]);
}

public function reportUserAttendances($userId)
{
    $attendances = Attendance::where('user_id', $userId)->get();

    return response()->json(['attendances' => $attendances]);
}

public function reportAttendances($id)
{
    $attendances = Attendance::where('id', $id)->get();

    return response()->json(['attendances' => $attendances]);
}
}
