<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Service\VendorService;
use PDF;

class VendorController extends Controller
{

    public function store(Request $request)
    {
        $vendorData = $request->all();

        $response = (new VendorService())->createVendorFromArray($vendorData);

        if ($response['error']) {
            return response()->json(['status'=>500, 'message'=>'something wrong with the server'],500);
        }

        return $response;

    }

    public function index()
    {
        $response = (new VendorService)->getAllVendor();

        return $response;

        // return view('welcome');
    }

    public function edit($id)
    {
        $vendor = Vendor::find($id);
        return response()->json($vendor);

    }

    public function update(Request $request)
    {
        $vendorData = $request->all();

        $response = (new VendorService)-> updateVendorFromArray($vendorData);

        if ($response['error']) {
            return response()->json(['status'=>500, 'message'=>'something wrong with the server'],500);
        }

        return $response;
    }

    public function completed()
    {
        $response = (new VendorService)->getCompleted();

        return $response;
    }

    public function changeStatus(Request $request)
    {
        $vendorData = $request->all();

        $response = (new VendorService)-> changeVendorStatus($vendorData);

        if ($response['error']) {
            return response()->json(['status'=>500, 'message'=>'something wrong with the server'],500);
        }

        return $response;
    }


    public function exportPDF(Request $request)
    {
        $vendorData = Vendor::find($request['id']);
        $pdf = PDF::loadView('pdf', compact('vendor'));
        $pdf = PDF::loadView('A4', 'potrait');
        return $pdf->stream('pdf');
    }

    public function cancel(Request $request)
    {
        $cancelationData = $request->all();

        $response = (new VendorService)-> cancelation($cancelationData);

        if ($response['error']) {
            return response()->json(['status'=>500, 'message'=>'something wrong with the server'],500);
        }

        return $response;

    }
}


