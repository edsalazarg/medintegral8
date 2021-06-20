<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Patient;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index()
    {
        $appointments = Appointment::all();

        return view('appointments.index', [
            'appointments' => $appointments
        ]);
    }

    public function store(Request $request)
    {
        $validated = $this->validate($request, [
            "patient_id" => "required",
            "location" => "required",
            "transfer" => "required",
            "notes" => "required",
            "blood_pressure" => "required",
            "heart_rate" => "required",
            "rheumatoid_factor" => "required",
            "temperature" => "required",
            "sat_o2" => "required",
            "glucose" => "required",
            "insulin" => "required",
            "skin_thickness" => "required",
            "bmi" => "required",
            "dpf" => "required",
            "glasgow" => "required",
            "neurologic" => "required",
            "head" => "required",
            "neck" => "required",
            "cardiopulmonary" => "required",
            "abdomen" => "required",
            "extremities" => "required",
            "diagnosis" => "required",
            "condition" => "required",
            "treatment" => "required",
            "forecast" => "required"
        ]);
//        dd($request);
        Appointment::create($validated);
        return redirect()->route('appointments.index');
    }

    public function create()
    {
        $patients = Patient::all();
        return view('appointments.create',[
            'patients' => $patients
        ]);
    }

    public function create_for_patient($patient_id)
    {
        $patient = Patient::find($patient_id);
        return view('appointments.create',[
            'patients' => collect([$patient])
        ]);
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

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return back();
    }
}
