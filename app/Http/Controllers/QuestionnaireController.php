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

        ]);
//        dd($request);
        PsychQuestionnaire::create($validated);
        return redirect()->route('questionnaire.index');
    }

    public function create()
    {
        $patients = Patient::all();
        return view('questionnaire.create',[
            'patients' => $patients
        ]);
    }
}
