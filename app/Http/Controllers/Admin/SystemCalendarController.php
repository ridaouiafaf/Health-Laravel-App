<?php

namespace App\Http\Controllers\Admin;

use App\Appointment;
use App\Http\Controllers\Controller;
use App\Patient;

class SystemCalendarController extends Controller
{

    public function index()
    {
        $events = [];
        $id=auth()->user()->id;
        $patient_id=Patient::where('user_id',$id);
        if($id==1)
        $appointments = Appointment::with(['patient', 'employee'])->get();
        else 
        $appointments = Appointment::with(['patient', 'employee'])->where('patient_id',$id)->get();
        foreach ($appointments as $appointment) {
            if (!$appointment->start_time) {
                continue;
            }

            $events[] = [
                'title' => $appointment->patient->name . ' ('.$appointment->employee->name.')',
                'start' => $appointment->start_time,
                'url'   => route('admin.appointments.edit', $appointment->id),
                'backgroundColor'=>'black',
                'color'=>'black'
            ];
        }

        return view('admin.calendar.calendar', compact('events'));
    }
}
