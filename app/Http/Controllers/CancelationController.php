<?php

namespace App\Http\Controllers;

use App\Models\Cancelation;
use Illuminate\Http\Request;
use App\Service\CancelationService;

class CancelationController extends Controller
{
    public function store(Request $request)
    {
        $cancelationData = $request->all();

        $response = (new CancelationService)-> cancelation($cancelationData);

        if ($response['error']) {
            return response()->json(['status'=>500, 'message'=>'something wrong with the server'],500);
        }

        return response()->json(['status'=>201, 'message'=>'create success'],201);

    }
}
