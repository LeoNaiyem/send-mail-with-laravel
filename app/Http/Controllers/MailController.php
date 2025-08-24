<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function welcomeMali(){
        Mail::to('ri9h4lucrr@xkxkud.com')->send(new WelcomeMail());
        return "Email Sent successfully!";
    }
}
