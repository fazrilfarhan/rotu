<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $trainers = Trainer::all();

        // return view('trainer.manage-trainers', compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainer.add-trainers');
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
            'rank' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);

        // create trainer
        $trainer = Trainer::create([
            'trainerRank' => $request->rank,
            'trainerName' => $request->fullname,
            'trainerNum' => $request->military_number
        ]);

        // create user
        $trainer->user()->create([
            'fullName' => $request->fullname,
            'email' => $request->email,
            'role' => 'trainer',
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back();

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $trainer = Trainer::find($id);

        // return view('trainer.edit-trainers', compact('trainer'));
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

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // if($id !== Auth::user()->userable->id ){
        //     // find trainer using id
        //     $trainer = Trainer::find($id);

        //     // find user using relationship
        //     $user = $trainer->user;

        //     $trainer->delete();
        //     $user->delete(); 

        //     return redirect()->back();

        // }else{
        //     return redirect()->back();
        
    }
}
