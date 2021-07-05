<?php

namespace App\Http\Controllers\Cadet;

use App\Http\Controllers\Controller;
use App\Models\Cadet;
use App\Models\Registration;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CadetTrainingController extends Controller
{
    public function index()
    {        
        $user=Auth::user();
        $cadet=$user->userable;
        $registrations=$cadet->trainings;

        return view('cadet.manage-cadet-trainings', compact('registrations'));
    }
    
     public function create()
    {        
        $trainings = DB::table("trainings")->select('*')->whereNotIn('id',function($query) {

            $query->select('training_id')->from('registrations');
         
         })->get();

        return view('cadet.register-cadet-trainings', compact('trainings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'dateIn' => 'required|date',
            'dateOut' => 'required|date'
        ]);
        Registration::create([
            'dateIn' => $request->dateIn,
            'dateOut' => $request->dateIn
        ]);
        
        return redirect()->route('cadet-trainings.index');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $registration = DB::table('registrations')->delete($id);        
        return redirect()->route('cadet-trainings.index', $id);
    }
}
