<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;
use App\Service\EmailService;

class EmailController extends Controller
{
    public function store(Request $request)
    {
        $emailData = $request->all();

        $response = (new EmailService)-> sentMail($emailData);

        if ($response['error']) {
            return response()->json(['status'=>500, 'message'=>'something wrong with the server'],500);
        }

        return response()->json(['status'=>201, 'message'=>'email sent'],201);

    }
}
