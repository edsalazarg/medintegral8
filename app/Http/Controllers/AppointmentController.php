<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all();

        return view('appointments.index', [
            'appointments' => $appointments
        ]);
    }

    public function store(Request $request)
    {

    }

    public function create()
    {

    }

    public function show($id)
    {

    }

    public function edit()
    {

    }

    public function update(Request $request)
    {

    }

    public function destroy($id)
    {

    }
}
