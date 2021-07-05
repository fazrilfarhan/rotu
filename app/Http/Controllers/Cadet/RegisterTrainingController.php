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

        // $sql = DB::table("trainings")->select('*')->whereNotIn('id',function($query) use ($cadet) {

        //     $query->select('training_id')->from('registrations')->where('cadet_id', '=', $cadet->id);
         
        //  })->toSql();

        //  dd($sql);
        // pilih training yg takde dlm registrations
        // select * from trainings where t_id NOT IN (select * from registrations)

        // pilih training yg takde dlm registrations
        // select * from trainings where t_id NOT IN (select * from registrations )
        return view('cadet.register-cadet-trainings', compact('trainings'));
    }
    
    public function create($id)
    {
        return view('cadet.register-date-trainings', ['id' => $id]);
    }

    // End Register Training

    // Start Manage Training

    public function index()
    {
        $user=Auth::user();
        $cadet=$user->userable;
        // dd($cadet);
        $trainings = $cadet->trainings;

        // $cadets = Cadet::has('trainings')->with(['user' , 'trainings'])->paginate(5);

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
            $cadet->trainings()->attach($id, ['dateIn'=>$request->dateIn, 'dateOut'=>$request->dateOut]);
            
            return redirect()->route('register-trainings.index', $id);
        }
        else{
            return redirect()->route('register-trainings.index', $id);

        }
    }
        
    public function show($id)
    {
        $training = Training::find($id);
        // $training = DB::table('trainings')->find($registration->training_id);
        // $cadets = DB::table('cadets')->find($registration->cadet_id);
        $cadets = $training->cadets;
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
        $registration->dateIn = $request->dateIn;
        $registration->dateOut = $request->dateOut;
        // dd("ID:".$id."  In:".$request->dateIn."  Out:". $request->dateIn);
        $registration->save();

        return redirect()->route('register-trainings.index');
    }

    public function destroy($id)
    {
        $user = Auth::user();
        $cadet = Cadet::where('cadetName', $user->fullName)->first();
        $registration = DB::table('registrations')->where('cadet_id', '=', $cadet->id)->where('training_id', '=', $id)->delete();        
        return redirect()->route('register-trainings.index');
    }
}

// End Manage Training
