<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("send-welcome-mail",[MailController::class,"welcomeMail"]);
Route::get("send-mail-with-attachment",[MailController::class,"MailWithAttachment"]);