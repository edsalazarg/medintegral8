<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientPost;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function index()
    {
        return view('patients.index', ['patients' => Patient::all()]);
    }


    public function create()
    {
        return view('patients.create');
    }

    public function store(PatientPost $request)
    {
        $validated = $request->validated();
        $patient = Patient::create($validated);

        $request->session()->flash('status', 'The patient was created!');

        return redirect()->route('patients.show', ['patient' => $patient->id]);
    }

    public function show($id)
    {

        return view('patients.show', ['patient' =>
            Patient::with('appointment','medrecord')->findOrFail($id)]);
    }

    public function edit($id)
    {
        return view('patients.edit', ['patient' => Patient::findOrFail($id)]);
    }

    public function update(PatientPost $request, $id)
    {
        $patient =  Patient::findOrFail($id);
        $validated = $request->validated();
        $patient->fill($validated);
        $patient->save();

        $request->session()->flash('status', 'The patient was updated!');

        return redirect()->route('patients.show', ['patient' => $patient->id]);
    }

    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();

        session()->flash('status', 'The patient was deleted!');

        return redirect()->route('patients.index');
    }
}
