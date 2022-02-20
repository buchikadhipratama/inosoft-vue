<?php

namespace App\Repository;

use App\Models\Vendor;

class VendorRepository
{
    public function createVendorFromArray(array $vendor)
    {
        try {
            $newvendor = new Vendor();
            // $newvendor->instruction_id = "uu";
            // $newvendor->assign_vendor = "uu";
            // $newvendor->attention = "uu";
            // $newvendor->quotation = "uu";
            // $newvendor->invoice = "uu";
            // $newvendor->customer_contract = "uu";
            // $newvendor->vendor_address = "uu";   
            // $newvendor->customer_po = "uu";
            // $newvendor->description = "uu";
            // $newvendor->qty = "uu";
            // $newvendor->uom = "uu";
            // $newvendor->unit_price = "uu"; 
            // $newvendor->discount = "uu"; 
            // $newvendor->gst_vat = "uu";
            // $newvendor->currency ="uu"; 
            // $newvendor->charge = "uu";
            // $newvendor->attachment = "uu";
            // $newvendor->notes = "uu";
            // $newvendor->link_to = "uu";
            // $newvendor->status = 1;    
            // $newvendor->$type = "uu";

            $newvendor->instruction_id = $vendor['instruction_id'];
            $newvendor->assign_vendor = $vendor['assign_vendor'];  
            $newvendor->attention = $vendor['attention'];
            $newvendor->quotation = $vendor['quotation'];
            $newvendor->invoice = $vendor['invoice'];
            $newvendor->customer_contract = $vendor['customer_contract'];  
            $newvendor->vendor_address = $vendor['vendor_address'];    
            $newvendor->customer_po = $vendor['customer_po'];
            $newvendor->description = $vendor['description'];  
            $newvendor->qty = $vendor['qty'];  
            $newvendor->uom = $vendor['uom'];  
            $newvendor->unit_price = $vendor['unit_price'];  
            $newvendor->discount = $vendor['discount'];  
            $newvendor->gst_vat = $vendor['gst_vat'];  
            $newvendor->currency = $vendor['currency'];  
            $newvendor->charge = $vendor['charge'];
            $newvendor->attachment = $vendor['attachment'];  
            $newvendor->notes = $vendor['notes'];  
            $newvendor->link_to = $vendor['link_to'];
            $newvendor->status = 1;    
            $newvendor->type = $vendor['type'];       
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
                ->orwhere('status', 0);
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