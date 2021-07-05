<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use App\Models\Cadet;
use Illuminate\Http\Request;

class CadetController extends Controller
{
    public function showCadets(){

        $cadets = Cadet::all();


        return view('officer.manage-cadets', compact('cadets'));
    }

    public function showSpecificCadet($id){
        
        $cadet = Cadet::find($id);

        return view('officer.view-cadet', compact('cadet'));
    }
}
