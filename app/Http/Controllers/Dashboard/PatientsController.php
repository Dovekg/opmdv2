<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Baseinfo;
use App\Models\Clinical;
use App\Models\Epibio;
use App\Models\Result;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Patient;
use Auth;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::paginate(9);
        return view('patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Patient $patient)
    {
        return view('patients.create', compact('patient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['user_id'] = Auth::user()->id;

        Patient::create($request->all());
        return redirect()->to(route('patients.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function timesCreate($id, $times)
    {
        $patient = Patient::findOrFail($id);
        $baseinfo = Baseinfo::where('patient_id', $id)->where('times', $times)->first();
        $epibio = Epibio::where('patient_id', $id)->where('times', $times)->first();
        $clinical = Clinical::where('patient_id', $id)->where('times', $times)->first();
        $result = Result::where('patient_id', $id)->where('times', $times)->first();
        return view('patients.times_create', compact('patient', 'id', 'times', 'baseinfo', 'epibio', 'clinical', 'result'));
    }
    public function timesEdit($id, $times)
    {
        $patient = Patient::findOrFail($id);
        $baseinfo = Baseinfo::where('patient_id', $id)->where('times', $times)->get();
        $baseinfo = Baseinfo::where('patient_id', $id)->where('times', $times)->first();
        $epibio = Epibio::where('patient_id', $id)->where('times', $times)->first();
        $clinical = Clinical::where('patient_id', $id)->where('times', $times)->first();
        $result = Result::where('patient_id', $id)->where('times', $times)->first();
        return view('patients.times_edit', compact('patient', 'id', 'times', 'baseinfo', 'epibio', 'clinical', 'result'));
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
