<?php

namespace App\Http\Controllers\Trainer;

use App\Models\Cadet;
use App\Models\Equipment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReturnController extends Controller
{
    public function getAllApproved(){
        $cadetApproved = Cadet::has('approved')->get();
        $cadetReturned = Cadet::has('returned')->get();
        return view('trainer.equipments-return', compact('cadetApproved', 'cadetReturned'));
    }

    public function returns($id){
        $cadet = Cadet::find($id);
        $items = $cadet->equipments;
        foreach ($items as $item) {
            // DB::enableQueryLog();
            $cadet->equipments()->syncWithoutDetaching([$item->pivot->equipment_id => ['status'=>'RETURNED']]);
            // dd(DB::getQueryLog());
            $equipment = Equipment::find($item->pivot->equipment_id);
            $equipment->quantity = $equipment->quantity + 1;
            $equipment->save();
        }
        $cadetApproved = Cadet::has('approved')->get();
        $cadetReturned = Cadet::has('returned')->get();
        return view('trainer.equipments-return', compact('cadetApproved', 'cadetReturned'));
    }
}
