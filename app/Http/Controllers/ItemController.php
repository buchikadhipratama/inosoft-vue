<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $item = new Item();
        $item->assign_vendor = $request->get('assign_vendor');  
        $item->attention = $request->get('attention');
        $item->quotation = $request->get('quotation');
        $item->invoice = $request->get('invoice');
        $item->customer_contract = $request->get('customer_contract');  
        $item->vendor_address = $request->get('vendor_address');    
        $item->customer_po = $request->get('customer_po');
        $item->description = $request->get('description');  
        $item->qty = $request->get('qty');  
        $item->uom = $request->get('uom');  
        $item->unit_price = $request->get('unit_price');  
        $item->discount = $request->get('discount');  
        $item->gst_vat = $request->get('gst_vat');  
        $item->currency = $request->get('currency');  
        $item->change = $request->get('change');
        $item->attachment = $request->get('attachment');  
        $item->notes = $request->get('notes');  
        $item->link_to = $request->get('link_to');            
        $item->save();
        return redirect('item')->with('success', 'service instruction has been successfully added');
    }

    public function index()
    {
        $items=Item::all();
        return view('welcome');
    }

    public function edit($id)
    {
        $item = Item::find($id);
        return view('edit');
    }

    public function update(Request $request, $id)
    {
        $item = Item::find($id);
        $item->assign_vendor = $request->get('assign_vendor');  
        $item->attention = $request->get('attention');
        $item->quotation = $request->get('quotation');
        $item->invoice = $request->get('invoice');
        $item->customer_contract = $request->get('customer_contract');  
        $item->vendor_address = $request->get('vendor_address');    
        $item->customer_po = $request->get('customer_po');
        $item->description = $request->get('description');  
        $item->qty = $request->get('qty');  
        $item->uom = $request->get('uom');  
        $item->unit_price = $request->get('unit_price');  
        $item->discount = $request->get('discount');  
        $item->gst_vat = $request->get('gst_vat');  
        $item->currency = $request->get('currency');  
        $item->change = $request->get('change');
        $item->attachment = $request->get('attachment');  
        $item->notes = $request->get('notes');  
        $item->link_to = $request->get('link_to');            
        $item->save();
        return redirect('item')->with('success', 'service instruction has been successfully updated');
    }

    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect('item')->with('success','data has been  deleted');
    }
}
