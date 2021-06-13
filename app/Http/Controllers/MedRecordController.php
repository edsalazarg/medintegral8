<?php

namespace App\Http\Controllers;

use App\Models\MedRecord;
use Illuminate\Http\Request;

class MedRecordController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $med_records = MedRecord::get();
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

    public function update(MedRecord $med_record, Request $request)
    {
        //validar los datos
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed'
        ]);
        $med_record =  MedRecord::find($med_record->id);
        $med_record->fill($request->all());
        $med_record->save();
        $request->session()->flash('status', 'The user was updated!');

        return redirect()->route('users.index');
    }

    public function destroy(MedRecord $med_record)
    {
        $med_record->delete();
        return back();
    }
}
