<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SendMessageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function sendMessage(Request $request)
    {

        $url = "https://api.whatsapp.com/send/?phone=" . $request->phone . "&text=" . $request->message;
        return Redirect::to($url);
    }
}
