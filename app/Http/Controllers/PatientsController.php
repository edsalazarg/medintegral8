<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientsController extends Controller
{
    private $patients = [
        1 => [
            'name' => 'Eduardo Salazar',
            'code' => 216306967,
            'age' => 19,
        ],
        2 => [
            'name' => 'Lalo Salazar',
            'code' => 154514587,
            'age' => 24,
        ],
        3 => [
            'name' => 'Jesus Salazar',
            'code' => 156484151,
            'age' => 25,
        ]
    ];
    public function index()
    {
        return view('patients.index', ['patients' => $this->patients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        abort_if(!isset($this->patients[$id]), 404);

        return view('patients.show', ['patient' => $this->patients[$id]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
