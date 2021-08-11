<?php

namespace App\Http\Controllers\Cadet;

use App\Http\Controllers\Controller;
use App\Models\Equipment;
use App\Models\Cadet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CadetEquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $cadet = Cadet::where('cadetName', $user->fullName)->first();
        $cadetX = Cadet::find($cadet->id);
        $item = $cadetX->equipments()->first();
        $details = $cadetX->equipments()->with('cadets')->get();
        return view('cadet.manage-applications', compact('details', 'item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipments = Equipment::all();

        return view('cadet.application-equipments', compact('equipments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $cadet = Cadet::where('cadetName', $user->fullName)->first();

        $pendingItems = Cadet::whereHas('pending', function($query) use ($cadet) {
            $query->where('cadet_id', $cadet->id);
        })->get();
        $approvedItems = Cadet::whereHas('approved', function($query) use ($cadet) {
            $query->where('cadet_id', $cadet->id);
        })->get();
        if (count($pendingItems) || count($approvedItems)) {
            return redirect()->back()->with('error', 'You have equipments that have not been returned yet!');
        }
        
        // Request item that's going to be borrowed
        $equipmentArr = $request->input('equipmentArray.*');
        // Detach any existing returned equipment
        $cadet->equipments()->detach();
        foreach ($equipmentArr as $equipmentId) {
            $cadet->equipments()->attach($equipmentId, ['status' => 'PENDING']);
            $equipment = Equipment::find($equipmentId);
            $equipment->quantity = $equipment->quantity - 1;
            $equipment->save();
        }
        $cadetX = Cadet::find($cadet->id);
        $item = $cadetX->equipments()->first();
        $details = $cadetX->equipments()->with('cadets')->get();
        return view('cadet.manage-applications', compact('cadet', 'item', 'details'));
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
