<?php

namespace App\Repository;

use App\Models\Vendor;

class VendorRepository
{
    public function createVendorFromArray(array $vendor)
    {
        try {
            $newvendor = new Vendor();
            // $newvendor->instruction_id = $vendor['instruction_id'];
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
        return Vendor::where(function ($query) {
            $query->where('status', 1);
         })->get();
    }

    public function updateVendorFromArray(array $vendor)
    {
        try {
            $newvendor = Vendor::find($vendor['id']);
            $newvendor->assign_vendor = $vendor['assign_vendor'] ?? $newvendor->assign_vendor;
            $newvendor->attention = $vendor['attention'] ?? $newvendor->attention;
            $newvendor->quotation = $vendor['quotation'] ?? $newvendor->quotation;
            $newvendor->invoice = $vendor['invoice'] ?? $newvendor->invoice;
            $newvendor->customer_contract = $vendor['customer_contract'] ?? $newvendor->customer_contract;
            $newvendor->vendor_address = $vendor['vendor_address'] ?? $newvendor->vendor_address;
            $newvendor->customer_po = $vendor['customer_po'] ?? $newvendor->customer_po;
            $newvendor->description = $vendor['description'] ?? $newvendor->description;
            $newvendor->qty = $vendor['qty'] ?? $newvendor->qty;
            $newvendor->uom = $vendor['uom'] ?? $newvendor->uom;
            $newvendor->unit_price = $vendor['unit_price'] ?? $newvendor->unit_price;
            $newvendor->discount = $vendor['discount'] ?? $newvendor->discount;
            $newvendor->gst_vat = $vendor['gst_vat'] ?? $newvendor->gst_vat;
            $newvendor->currency = $vendor['currency'] ?? $newvendor->currency;
            $newvendor->change = $vendor['change'] ?? $newvendor->change;
            $newvendor->attachment = $vendor['attachment'] ?? $newvendor->attachment;
            $newvendor->notes = $vendor['notes'] ?? $newvendor->notes;
            $newvendor->link_to = $vendor['link_to'] ?? $newvendor->link_to;
            $newvendor->save();

            return 0;
        } catch (\Throwable $th) {
            return 1;
        }
    }


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

    public function cancelation(array $cancel)
    {
        try {
            $cancelaion = Vendor::find($cancel['id']);
            $cancelaion->cancel_description = $cancel['cancel_description'];
            // $cancelaion->cancel_attachment = $cancel['cancel_attachment'];
            // $cancelaion->status = 2;
            $cancelaion->status = 0;
            $cancelaion->save();

            return 0;
        } catch (\Throwable $th) {
            return 1;
        }
    }

    public function getSingleData(object $id)
    {
        return Vendor::where('_id', $id)->get() ?? ["dssd"];
    }
}
