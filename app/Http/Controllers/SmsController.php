<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    public function index()
    {
        Nexmo::message()->send([
            
            'to' => '916385930284',
            'from' =>'916385930284',
            'text' => 'testing sms'

        ]);
        echo "message send";
    }
}
