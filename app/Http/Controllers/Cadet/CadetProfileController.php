<?php

namespace App\Http\Controllers\Cadet;

use App\Http\Controllers\Controller;
use App\Models\Cadet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CadetProfileController extends Controller
{
    public function profile(){
        $cadet = Auth::user()->userable;

        return view('cadet.profile-cadet', compact('cadet'));
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $request->validate([
            'rank' => 'required',
            'fullName' => 'required',
            'gender' => 'required',
            'phoneNumber' => 'required',
            'address' => 'required',
            'email' => 'required'
        ]);

        $cadet = Cadet::find($id);
        $cadet->cadetRank = $request->rank;
        $cadet->cadetName = $request->fullName;
        $cadet->cadetGender = $request->gender;
        $cadet->phoneNum = $request->phoneNumber;
        $cadet->cadetAddress = $request->address;
        $cadet->save();

        $cadet->user()->update([
            'fullName' => $request->fullName,
            'email' => $request->email
        ]);

        return redirect()->route('home')->with('success', 'Profile updated successfully');
    }
}