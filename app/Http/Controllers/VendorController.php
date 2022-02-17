<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Service\VendorService;
use PDF;

class VendorController extends Controller
{
    // public function create()
    // {
    //     return view('CreateInstruction');
    // }

    public function store(Request $request)
    {
        $vendorData = $request->all();

        $response = (new VendorService)-> createVendorFromArray($vendorData);

        if ($response['error']) {
            return response()->json(['status'=>500, 'message'=>'something wrong with the server'],500);
        }

        return response()->json(['status'=>201, 'message'=>'create success'],201);

    }

    public function index()
    {
        $response = (new VendorService)->getAllVendor();

        return response()->json(['status'=>200, 'message'=>$response],200);

        // return view('welcome');
    }

    public function edit($id)
    {
        $vendor = Vendor::find($id);
        return view('edit',compact('vendor','id'));
    }

    public function update(Request $request)
    {
        $vendorData = $request->all();

        // $validator = Validator::make($vendorData,[
        //     'id' => 'required'
        // ]);

        // if(!$validator->validate()){
        //     return response()->json(['status'=>400, 'message'=>$validator->errors()],400);
        // }

        $response = (new VendorService)-> updateVendorFromArray($vendorData);

        if ($response['error']) {
            return response()->json(['status'=>500, 'message'=>'something wrong with the server'],500);
        }

        return response()->json(['status'=>200, 'message'=>'update success'],200);
    }

    // public function destroy(Request $request)
    // {
    //     $vendorData = $request->id;

    //     $response = (new VendorService)-> deleteVendorbyId($vendorData);

    //     if ($response['error']) {
    //         return response()->json(['status'=>500, 'message'=>'something wrong with the server'],500);
    //     }

    //     return response()->json(['status'=>200, 'message'=>'delete success'],200);
    // }

    public function completed()
    {
        $response = (new VendorService)->getCompleted();

        return response()->json(['status'=>200, 'message'=>$response],200);
    }

    public function changeStatus(Request $request)
    {
        $vendorData = $request->all();

        $response = (new VendorService)-> changeVendorStatus($vendorData);

        if ($response['error']) {
            return response()->json(['status'=>500, 'message'=>'something wrong with the server'],500);
        }

        return response()->json(['status'=>200, 'message'=>'change status to completed'],200);
    }


    public function exportPDF(Request $request)
    {
        $vendorData = Vendor::find($request['id']);
        $pdf = PDF::loadView('pdf', compact('vendor'));
        $pdf = PDF::loadView('A4', 'potrait');
        return $pdf->stream('pdf');
    }
}


