<?php

namespace App\Http\Controllers;

use App\Http\Requests\AllergiesReq;
use App\Models\Allergies;
use App\Models\Surgeries;
use Illuminate\Support\Facades\DB;

class AllergiesController extends Controller
{
    public function create()
    {

        $med_record_ids_names = DB::table('med_records')
            ->join('patients', 'patients.id', '=', 'med_records.patient_id')
            ->select('med_records.id','patients.firstName')->get();
        return view('allergies.create', ['med_records' => $med_record_ids_names]);
    }

    public function store(AllergiesReq $request)
    {
        $validated = $request->validated();
        $allergy = Allergies::create($validated);

        $request->session()->flash('status', 'The allergy was created!');

        return redirect()->route('patients.show', ['patient' => $allergy->med_record->patient_id]);
    }
}
