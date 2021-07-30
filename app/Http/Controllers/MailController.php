<?php

namespace App\Http\Controllers;

use App\Mail\RegisterTrainingMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;

class MailController extends Controller
{
    public function sendEmail() {
        $emailItem = Session::get('emailItem');
        $details = [
            'title' => 'A cadet has registered to a training!',
            'body' => $emailItem['cadet']->cadetName.' registered to '.$emailItem['training']->trainingName.' from '.$emailItem['regIn'].' until '.$emailItem['regOut']
        ];
        Mail::to('smartpeep999@gmail.com')->send(new RegisterTrainingMail($details));
        return redirect()->route('register-trainings.index')->with('success', 'Training registered successfully');
    }
}
