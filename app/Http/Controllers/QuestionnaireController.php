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
        $patients = Patient::whereDoesntHave('psychquestionnaires')->get();
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
            "self_employed" => "required",
            "family_history" => "required",
            "work_interfere" => "required",
            "no_employees" => "required",
            "remote_work" => "required",
            "tech_company" => "required",
            "care_options" => "required",
            "wellness_program" => "required",
            "seek_help" => "required",
            "anonymity" => "required",
            "leave" => "required",
            "mentalhealthconsequence" => "required",
            "physhealthconsequence" => "required",
            "coworkers" => "required",
            "supervisor" => "required",
            "mentalhealthinterview" => "required",
            "physhealthinterview" => "required",
            "mentalvsphysical" => "required",
            "obs_consequence" => "required",
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

    public function destroy(PsychQuestionnaire $questionnaire)
    {
        $questionnaire->delete();
        return back();
    }
}
