<?php

namespace App\Http\Controllers\Trainer;

use App\Models\Cadet;
use App\Http\Controllers\Controller;
use App\Models\Equipment;
use Illuminate\Http\Request;
use DB;

class ApprovalController extends Controller
{
    public function getAllPending(){
        $cadets = Cadet::has('pending')->get();
        $approvedList = Cadet::has('approved')->get();
        return view('trainer.equipments-approval', compact('cadets', 'approvedList'));
    }

    public function approve($id) {
        $cadet = Cadet::find($id);
        $items = $cadet->equipments;
        foreach ($items as $item) {
            // DB::enableQueryLog();
            $cadet->equipments()->syncWithoutDetaching([$item->pivot->equipment_id => ['status'=>'APPROVED']]);
            // dd(DB::getQueryLog());
            $equipment = Equipment::find($item->pivot->equipment_id);
            $equipment->quantity = $equipment->quantity - 1;
            $equipment->save();
        }
        $cadets = Cadet::has('pending')->get();
        $approvedList = Cadet::has('approved')->get();
        return view('trainer.equipments-approval', compact('cadets', 'approvedList'));
    }
}