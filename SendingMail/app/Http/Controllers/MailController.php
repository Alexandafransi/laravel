<?php

namespace App\Http\Controllers;

use App\Mail\Mailtrap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
// use Illuminate\Contracts\Mail\Mailable;

class MailController extends Controller
{
    //

    public function index(){

        Mail::to('adamandrea43@yahoo.com')->send(new Mailtrap());

    }
}
