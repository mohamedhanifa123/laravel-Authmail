<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\TestEnrollment;
use Illuminate\Support\Facades\Notification;

class TestsEnrollmentController extends Controller
{
    public function sendtestNotification()
    {
        $user =User::first();

        $enrollmentData=[
            'body' =>' you received test notification',
            'enrollmentText' => ' you allowed enroll',
            'url' => url('/'),
            'Thankyou' => 'you have 14days left to enroll',
        ];

        // $user->notify(new TestEnrollment($enrollmentData));

        Notification::send($user,new TestEnrollment($enrollmentData));
    }
}
