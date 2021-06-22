<?php

namespace App\Http\Controllers;

use App\Http\Requests\SurgeriesReq;
use App\Models\Surgeries;
use App\Models\Patient;
use Illuminate\Support\Facades\DB;

class SurgeriesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function create()
    {

        $med_record_ids_names = DB::table('med_records')
            ->join('patients', 'patients.id', '=', 'med_records.patient_id')
            ->select('med_records.id','patients.firstName')->get();
        return view('surgeries.create', ['med_records' => $med_record_ids_names]);
    }

    public function create_for_patient(Patient $patient)
    {
        $med_record = $patient->medrecord;
        $med_record_ids_names = (object)collect([
            'id' => $med_record->id,
            'firstName' => $patient->firstName
        ])->all();
        $med_record_ids_names = collect([$med_record_ids_names]);
        return view('surgeries.create', ['med_records' => $med_record_ids_names]);
    }

    public function store(SurgeriesReq $request)
    {
        $validated = $request->validated();
        $surgery = Surgeries::create($validated);

        $request->session()->flash('status', 'The surgery was created!');

        return redirect()->route('patients.show', ['patient' => $surgery->med_record->patient_id]);
    }

    public function destroy(Surgeries $surgerie)
    {
        $surgerie->delete();
        session()->flash('status', 'Se removió la cirugía');

        return back();
    }
}
