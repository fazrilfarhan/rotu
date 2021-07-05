<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Models\Cadet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class CadetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cadets = Cadet::all();

        return view('trainer.manage-cadets', compact('cadets'));
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
        // dd($request);
        $request->validate([
            'military_number' => 'required',
            'rank' => 'required',
            'fullName' => 'required',
            'gender' => 'required',
            'phoneNumber' => 'required',
            'address' => 'required',
            'email' => 'required',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cadet = Cadet::find($id);

        return view('', compact('cadet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cadet = Cadet::find($id);

        return view('trainer.edit-cadets', compact('cadet'));
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
        // dd($request);
        $request->validate([
            'military_number' => 'required',
            'rank' => 'required',
            'fullName' => 'required',
            'gender' => 'required',
            'phoneNumber' => 'required',
            'address' => 'required',
            'email' => 'required'
        ]);

        $cadet = Cadet::find($id);
        $cadet->cadetID = $request->military_number;
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

        return redirect()->route('cadets.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            // find user using relationship
            $cadet = Cadet::find($id);
            
            $user = $cadet->user;

            $cadet->delete();
            $user->delete(); 

            return redirect()->back();

    }
}
