<?php

namespace App\Http\Controllers;

use App\Models\MedRecord;
use App\Models\Patient;
use Illuminate\Http\Request;

class MedRecordController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function create()
    {
        $patients = Patient::whereDoesntHave('medrecord')->get();
        return view('med_records.create', ['patients' => $patients]);
    }

    public function create_for_patient(Patient $patient)
    {
        $patients = collect([$patient]);
        return view('med_records.create', ['patients' => $patients]);
    }

    public function index()
    {
        $med_records = MedRecord::all();
        return view('med_records.index', [
            'med_records' => $med_records
        ]);
    }

    public function show($id)
    {
        $med_record = MedRecord::find($id);
        return view('med_records.show', [
            'med_record' => $med_record
        ]);
    }

    public function edit($id)
    {
        $med_record = MedRecord::find($id);
        return view('med_records.edit', [
            'med_record' => $med_record
        ]);
    }

    public function store(Request $request)
    {
        $validated = $this->validate($request, [
            "patient_id" => "required",
            "blood_group" => "required",
            "diabetes" => "required",
            "hypertension" => "required",
            "epilepsy" => "required",
            "asthma" => "required",
            "pregnancies" => "required",
        ]);
        $patient = MedRecord::create($validated);

        $request->session()->flash('status', 'The med record was created!');

        return redirect()->route('patients.show', ['patient' => $patient->id]);
    }

    public function update(MedRecord $med_record, Request $request)
    {

        $med_record =  MedRecord::find($med_record->id);
        $med_record->fill($request->all());
        $med_record->save();
        $request->session()->flash('status', 'The med_record was updated!');

        return redirect()->route('med_records.index');
    }

    public function destroy(MedRecord $med_record)
    {
        $med_record->delete();
        return back();
    }
}
