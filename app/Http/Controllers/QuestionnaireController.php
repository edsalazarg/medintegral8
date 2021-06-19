<?php

namespace App\Http\Controllers;

use App\Models\PsychQuestionnaire;
use App\Models\Patient;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function create()
    {
        $patients = Patient::whereDoesntHave('questionnaire')->get();
        return view('questionnaire.create', ['patients' => $patients]);
    }

    public function index()
    {
        $questionnaires = PsychQuestionnaire::all();

        return view('questionnaire.index', [
            'questionnaires' => $questionnaires
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
        $questionnaire = PsychQuestionnaire::create($validated);

        $request->session()->flash('status', 'The questionnaire was created!');

        return redirect()->route('questionnaire.show', ['questionnaire' => $questionnaire->id]);
    }

    public function update(PsychQuestionnaire $questionnaire, Request $request)
    {

        $questionnaire =  PsychQuestionnaire::find($questionnaire->id);
        $questionnaire->fill($request->all());
        $questionnaire->save();
        $request->session()->flash('status', 'The questionnaire was updated!');

        return redirect()->route('questionnaire.show', ['questionnaire' => $questionnaire->id]);
    }

    public function edit($id)
    {
        $questionnaire = PsychQuestionnaire::find($id);
        return view('questionnaire.edit', [
            'questionnaire' => $questionnaire
        ]);
    }

    public function show($id)
    {
        return view('questionnaire.show', [
            'questionnaire' => PsychQuestionnaire::findOrFail($id)
        ]);
    }
}
