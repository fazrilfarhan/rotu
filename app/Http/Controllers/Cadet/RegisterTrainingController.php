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
use PhpParser\Builder\TraitUse;
use Carbon\Carbon;
// use Session;
use Illuminate\Support\Facades\Session;

class RegisterTrainingController extends Controller
{
    // Register Training
    
    public function main()
    {       
        $user = Auth::user();
        $cadet = Cadet::where('cadetName', $user->fullName)->first();
        $trainings = DB::table("trainings")->select('*')->whereNotIn('id',function($query) use ($cadet) {
            $query->select('training_id')->from('registrations')->where('cadet_id', '=', $cadet->id);
        })->get();
        return view('cadet.register-cadet-trainings', compact('trainings'));
    }
    
    public function create($id)
    {
        $training = Training::find($id);

        return view('cadet.register-date-trainings', compact('training'));
    }

    // End Register Training

    // Start Manage Training

    public function index()
    {
        $user=Auth::user();
        $cadet=$user->userable;
        $trainings = $cadet->trainings;

        // $cadets = Cadet::has('trainings')->with(['user' , 'trainings'])->paginate(5);
        
        foreach ($trainings as $training) {
            $in = new Carbon($training->startDate);
            $out = new Carbon($training->endDate);
            $training->totalDays = $out->diffInDays($in) + 1;
        }
        return view('cadet.manage-cadet-trainings', compact('trainings'));
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'dateIn' => 'required|date',
            'dateOut' => 'required|date'
        ]);

        if (Auth::check()) {
            $cadet=Auth::user()->userable;
            $training = Training::find($id);

            $trainStart = $training->startDate;
            $trainEnd = $training->endDate;
            $regIn = $request->dateIn;
            $regOut = $request->dateOut;
            if($regIn < $trainStart) {
                return redirect()->back()->with('error', 'Error : Date In cannot be before Start Date');
            }
            if($regIn > $trainEnd) {
                return redirect()->back()->with('error', 'Error : Date In cannot be after End Date');
            }
            if($regOut > $trainEnd) {
                return redirect()->back()->with('error', 'Error : Date Out cannot be after End Date');
            }
            if($regOut < $trainStart) {
                return redirect()->back()->with('error', 'Error : Date Out cannot be before Start Date');
            }
            if($regOut <= $regIn) {
                return redirect()->back()->with('error', 'Error : Date Out cannot be before Date In');
            }
            // $cadet, $training, $regIn, $regOut
            $emailItems = compact("cadet", "training", "regIn", "regOut");
            Session::put('emailItem', $emailItems);
            $cadet->trainings()->attach($id, ['dateIn' => $regIn, 'dateOut' => $regOut]);
            return redirect('/send-email');
        }
        else{
            return redirect()->route('register-trainings.index');

        }
    }
        
    public function show($id)
    {
        $training = Training::find($id);
        $cadets = $training->cadets;
        foreach ($cadets as $cadet) {
            $in = new Carbon($cadet->pivot->dateIn);
            $out = new Carbon($cadet->pivot->dateOut);
            $cadet->registeredDays = $out->diffInDays($in) + 1;
        }
        return view('cadet.view-cadet-trainings', compact('cadets'));
    }

    public function edit($id)
    {
        $user = Auth::user();
        $cadet = Cadet::where('cadetName', $user->fullName)->first();
        $training = Training::find($id);
        $registration = DB::table('registrations')->where('cadet_id', '=', $cadet->id)->where('training_id', '=', $id)->first();
        return view('cadet.edit-register-trainings', compact('registration', 'training'));
    }

    public function update(Request $request, $id)
    {
        $registration = Registration::find($id);
        $training = Training::find($registration->training_id);

        $trainStart = $training->startDate;
        $trainEnd = $training->endDate;
        $regIn = $request->dateIn;
        $regOut = $request->dateOut;
        if($regIn < $trainStart) {
            return redirect()->back()->with('error', 'Error : Date In cannot be before Start Date');
        }
        if($regIn > $trainEnd) {
            return redirect()->back()->with('error', 'Error : Date In cannot be after End Date');
        }
        if($regOut > $trainEnd) {
            return redirect()->back()->with('error', 'Error : Date Out cannot be after End Date');
        }
        if($regOut < $trainStart) {
            return redirect()->back()->with('error', 'Error : Date Out cannot be before Start Date');
        }
        if($regOut <= $regIn) {
            return redirect()->back()->with('error', 'Error : Date Out cannot be before Date In');
        }
        $registration->dateIn = $regIn;
        $registration->dateOut = $regOut;
        $registration->save();

        return redirect()->route('register-trainings.index')->with('success', 'Training registration date updated successfully');
    }

    public function destroy($id)
    {
        $user = Auth::user();
        $cadet = Cadet::where('cadetName', $user->fullName)->first();
        DB::table('registrations')->where('cadet_id', '=', $cadet->id)->where('training_id', '=', $id)->delete();        
        return redirect()->route('register-trainings.index')->with('success', 'You have unregistered from the training');
    }
}

// End Manage Training
