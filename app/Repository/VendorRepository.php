<?php

namespace App\Repository;

use App\Models\Vendor;

class VendorRepository{
    public function createVendorFromArray(array $vendor)
    {
        try {
            $newvendor = new Vendor();
            $newvendor->assign_vendor = $vendor['assign_vendor'];  
            $newvendor->attention = $vendor['attention'];
            $newvendor->quotation = $request->get('quotation');
            $newvendor->invoice = $request->get('invoice');
            $newvendor->customer_contract = $request->get('customer_contract');  
            $newvendor->vendor_address = $request->get('vendor_address');    
            $newvendor->customer_po = $request->get('customer_po');
            $newvendor->description = $request->get('description');  
            $newvendor->qty = $request->get('qty');  
            $newvendor->uom = $request->get('uom');  
            $newvendor->unit_price = $request->get('unit_price');  
            $newvendor->discount = $request->get('discount');  
            $newvendor->gst_vat = $request->get('gst_vat');  
            $newvendor->currency = $request->get('currency');  
            $newvendor->change = $request->get('change');
            $newvendor->attachment = $request->get('attachment');  
            $newvendor->notes = $request->get('notes');  
            $newvendor->link_to = $request->get('link_to');
            $newvendor->status = 1;           
            $newvendor->save();

            return 0;
        } catch (\Throwable $th) {
            return 1;
        }
    }

    public function getAll()
    {
        return Vendor::where('status', 1)->get() ?? [];
    }

    public function updateVendorFromArray(array $vendor)
    {
        try {
            $newvendor = Vendor::find($vendor['id']);
            $newvendor->assign_vendor = $vendor['assign_vendor'] ?? $newvendor->assign_vendor;  
            $newvendor->attention = $vendor['attention'] ?? $newvendor->attention;
            $newvendor->quotation = $request->get('quotation') ?? $newvendor->quotation;
            $newvendor->invoice = $request->get('invoice') ?? $newvendor->invoice;
            $newvendor->customer_contract = $request->get('customer_contract') ?? $newvendor->customer_contract;  
            $newvendor->vendor_address = $request->get('vendor_address') ?? $newvendor->vendor_address;    
            $newvendor->customer_po = $request->get('customer_po') ?? $newvendor->customer_po;
            $newvendor->description = $request->get('description') ?? $newvendor->description;  
            $newvendor->qty = $request->get('qty') ?? $newvendor->qty;  
            $newvendor->uom = $request->get('uom') ?? $newvendor->uom;  
            $newvendor->unit_price = $request->get('unit_price') ?? $newvendor->unit_price;  
            $newvendor->discount = $request->get('discount') ?? $newvendor->discount;  
            $newvendor->gst_vat = $request->get('gst_vat') ?? $newvendor->gst_vat;  
            $newvendor->currency = $request->get('currency') ?? $newvendor->currency;  
            $newvendor->change = $request->get('change') ?? $newvendor->change;
            $newvendor->attachment = $request->get('attachment') ?? $newvendor->attachment;  
            $newvendor->notes = $request->get('notes') ?? $newvendor->notes;  
            $newvendor->link_to = $request->get('link_to') ?? $newvendor->link_to;            
            $newvendor->save();

            return 0;
        } catch (\Throwable $th) {
            return 1;
        }
    }

    // public function deleteById(string $vendorId)
    // {
    //     try {
    //         $vendor = Vendor::find($vendorId);
    //         if($vendor){
    //             $vendor->delete(    );
    //         }
    //         return 0;
    //     } catch (\Throwable $th) {
    //         return 1;
    //     }
    // }

    public function getAllCompleted()
    {
        return Vendor::where(function ($query) {
            $query->where('status', 2)
                ->orwhere('status', 3);
         })->get(); //0 untuk saat ini artinya completed
    }

    public function changeVendorStatus(array $vendor)
    {
        try {
            $newvendor = Vendor::find($vendor['id']);
            $newvendor->status = 2;            
            $newvendor->save();

            return 0;
        } catch (\Throwable $th) {
            return 1;
        }
    }
}