<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profile(){
        $trainer = Auth::user()->userable;

        return view('trainer.profile-trainer', compact('trainer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'rank' => 'required',
            'fullname' => 'required',
            'military_number' => 'required',
            'email' => 'required'
        ]);

        $trainer = Trainer::find($id);
        $trainer->trainerRank = $request->rank;
        $trainer->trainerName = $request->fullname;
        $trainer->trainerNum = $request->military_number;
        $trainer->save();

        $trainer->user()->update([
            'fullName' => $request->fullname,
            'email' => $request->email
        ]);

        return redirect()->route('home');
    }
}