<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Vendor extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'vendors';

    protected $fillable = [
        'instruction_id',
        'assign_vendor',
        'attention',
        'quotation',
        'invoice',
        'customer_contract',
        'vendor_address',
        'customer_po',
        'description',
        'qty',
        'uom',
        'unit_price',
        'discount',
        'gst_vat',
        'currency',
        'charge',
        'attachment',
        'notes',
        'link_to',
        'status',
        'type'
    ];
}
