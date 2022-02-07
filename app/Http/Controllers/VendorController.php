<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;

class VendorController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $vendor = new Vendor();
        $vendor->assign_vendor = $request->get('assign_vendor');  
        $vendor->attention = $request->get('attention');
        $vendor->quotation = $request->get('quotation');
        $vendor->invoice = $request->get('invoice');
        $vendor->customer_contract = $request->get('customer_contract');  
        $vendor->vendor_address = $request->get('vendor_address');    
        $vendor->customer_po = $request->get('customer_po');
        $vendor->description = $request->get('description');  
        $vendor->qty = $request->get('qty');  
        $vendor->uom = $request->get('uom');  
        $vendor->unit_price = $request->get('unit_price');  
        $vendor->discount = $request->get('discount');  
        $vendor->gst_vat = $request->get('gst_vat');  
        $vendor->currency = $request->get('currency');  
        $vendor->change = $request->get('change');
        $vendor->attachment = $request->get('attachment');  
        $vendor->notes = $request->get('notes');  
        $vendor->link_to = $request->get('link_to');            
        $vendor->save();
        return redirect('vendor')->with('success', 'service instruction has been successfully added');
    }

    public function index()
    {
        $vendors=Vendor::all();
        return view('welcome');
    }

    public function edit($id)
    {
        $vendor = Vendor::find($id);
        return view('edit',compact('vendor','id'));
    }

    public function update(Request $request, $id)
    {
        $vendor = Vendor::find($id);
        $vendor->assign_vendor = $request->get('assign_vendor');  
        $vendor->attention = $request->get('attention');
        $vendor->quotation = $request->get('quotation');
        $vendor->invoice = $request->get('invoice');
        $vendor->customer_contract = $request->get('customer_contract');  
        $vendor->vendor_address = $request->get('vendor_address');    
        $vendor->customer_po = $request->get('customer_po');
        $vendor->description = $request->get('description');  
        $vendor->qty = $request->get('qty');  
        $vendor->uom = $request->get('uom');  
        $vendor->unit_price = $request->get('unit_price');  
        $vendor->discount = $request->get('discount');  
        $vendor->gst_vat = $request->get('gst_vat');  
        $vendor->currency = $request->get('currency');  
        $vendor->change = $request->get('change');
        $vendor->attachment = $request->get('attachment');  
        $vendor->notes = $request->get('notes');  
        $vendor->link_to = $request->get('link_to');            
        $vendor->save();
        return redirect('vendor')->with('success', 'service instruction has been successfully updated');
    }

    public function destroy($id)
    {
        $vendor = Vendor::find($id);
        $vendor->delete();
        return redirect('vendor')->with('success','data has been  deleted');
    }
}
