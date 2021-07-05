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
        // query
        // if(takde) {
        //     return view();
        // }
        $equipmentArr = $request->input('equipmentArray.*');
        $user = Auth::user();
        $cadet = Cadet::where('cadetName', $user->fullName)->first();
        $cadet->equipments()->detach();
        foreach ($equipmentArr as $value) {
            $cadet->equipments()->attach($value, ['status' => 'PENDING']);
        }
        $cadetX = Cadet::find($cadet->id);
        $item = $cadetX->equipments()->first();
        $details = $cadetX->equipments()->with('cadets')->get();
        // dd($items);
        // dd($details);
        // $cadetItems = $cadet->equipments;
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
