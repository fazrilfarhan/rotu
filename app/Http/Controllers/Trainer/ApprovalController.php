<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Models\Equipment;
use Illuminate\Http\Request;

class ApprovalController extends Controller
{
    public function approval(){
        // List all
        // Select * from applications where status == 'PENDING'
        // Select * from cadets JOIN ON applications where status == 'PENDING'
        // get equip id, got equipment. Each equipment has many cadets

        $equipment = Equipment::all();
        foreach ($equipment as $eq) {
            $x = $eq->cadets;
        }
        dd($x);

        return view('trainer.equipments-approval');
    }
}