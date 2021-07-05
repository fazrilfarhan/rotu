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

class RegisterTrainingController extends Controller
{
    public function index($id)
    {
        $user=Auth::user();
        $cadet=$user->userable;
        $registrations=$cadet->trainings;

        // $cadets = Cadet::has('trainings')->with(['user' , 'trainings'])->paginate(5);

        return view('cadet.manage-cadet-trainings', compact('registrations'));
    }

    public function create($id)
    {
        return view('cadet.register-date-trainings', compact('id'));
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'dateIn' => 'required|date',
            'dateOut' => 'required|date'
        ]);

        if (Auth::check()) {
        $cadet=Auth::user()->userable;
        $cadet->trainings()->attach($id, ['dateIn'=>$request->dateIn, 'dateOut'=>$request->dateOut
        ]);
        
        return redirect()->route('register-trainings.index', $id);
    }
        else{
            return redirect()->route('register-trainings.index', $id);

        }
    }
        
    public function show($id)
    {
        $registrations = DB::table('registrations')->find($id);

        return view('cadet.view-cadet-trainings', compact('registration'));
    }

    public function edit($id)
    {
        // $registrations = DB::table('registrations')->edit($id);
        $registration = DB::table('registrations')
        ->where('id', '=', $id)
        ->first();

        // $registrations = DB::find($id); 

        return view('cadet.edit-register-trainings', compact('registration'));
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
