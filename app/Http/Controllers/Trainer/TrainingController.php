<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Models\Cadet;
use App\Models\Registration;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PhpParser\Builder\TraitUse;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainings = Training::all();

        return view('trainer.manage-trainings', compact('trainings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainer.add-trainings');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'level' => 'required',
            'trainingName' => 'required',
            'year' => 'required',
            'startDate' => 'required|date|date_format:Y-m-d|after:yesterday',
            'endDate' => 'required|date'
        ]);

        Training::create([
            'level' => $request->level,
            'trainingName' => $request->trainingName,
            'year' => $request->year,
            'startDate' => $request->startDate,
            'endDate' => $request->endDate
        ]);

        return redirect()->route('trainings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $training = Training::find($id);
        $cadets = $training->cadets;

        return view('trainer.view-trainings', compact('cadets'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $training = Training::find($id);

        return view('trainer.edit-trainings', compact('training'));
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
        $request->validate([
            'level' => 'required',
            'trainingName' => 'required',
            'year' => 'required',
            'startDate' => 'required',
            'endDate' => 'required'
        ]);

        $training = Training::find($id);
        $training->level = $request->level;
        $training->trainingName = $request->trainingName;
        $training->year = $request->year;
        $training->startDate = $request->startDate;
        $training->endDate = $request->endDate;
        $training->save();

        return redirect()->route('trainings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $training = Training::find($id);
        $training->delete();

        return redirect()->back();
        
    }
}
