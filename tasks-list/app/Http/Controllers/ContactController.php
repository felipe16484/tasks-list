<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request) {
        Mail::to(Auth::user()->email)
            ->send(new ContactMailable($request->all()));
    }
}
