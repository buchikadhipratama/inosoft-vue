<?php

namespace Database\Seeders;
use App\Models\AssignVendor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * return void
     */
    public function run()
    {

        DB::collection('assign_vendors')->delete();
        DB::collection('invoices')->delete();
        DB::collection('customer_contracts')->delete();
        DB::collection('vendor_addresses')->delete();
        DB::collection('uoms')->delete();
        DB::collection('currencys')->delete();
        DB::collection('changes')->delete();
        DB::collection('link_tos')->delete();
        DB::collection('statusses')->delete();
        DB::collection('recipients')->delete();
        DB::collection('vendors')->delete();

        DB::collection('assign_vendors')->insert([
            ['assign_vendor' => 'Amarit & Associates Co Ltd'],
            ['assign_vendor' => 'Amarit & Associates Logistics Co Ltd'],
            ['assign_vendor' =>'Alphatrans Pte Ltd'], 
            ['assign_vendor' =>'Bangkok Freight Forwarders Co Ltd']
        ]);


        DB::collection('invoices')->insert([
            ['invoice' => 'Marubeni-Ithochu Tubulars'],
            ['invoice' => 'Marubeni-Ithochu Steel'], 
            ['invoice' => 'MITME'], 
            ['invoice' => 'MITE']
        ]);

        DB::collection('customer_contracts')->insert([
            ['customer_contract' => 'Hail & Gasha'],
            ['customer_contract' => 'OFFSHORE'], 
            ['customer_contract' => 'ONSHORE'], 
            ['customer_contract' => 'Sour Gas']
        ]);

        DB::collection('vendor_addresses')->insert(
            ['vendor_address' => 'Soi Pridhi']);
    
        DB::collection('uoms')->insert(
            ['uom' => 'SHP']);

        DB::collection('currencys')->insert([
            ['currency' => 'USD'],
            ['currency' => 'AED']
        ]);

        DB::collection('changes')->insert([
            ['change' => 'MITME'],
            ['change' => 'Customer']
        ]);

        DB::collection('link_tos')->insert([
            ['link_to' => 'INSP-2020-0001'],
            ['link_to' => 'INSP-2020-0002'],
            ['link_to' =>  'INSP-2020-0003'], 
            ['link_to' =>  'INSP-2020-0004']
        ]);

        DB::collection('statusses')->insert([
            ['status_id' => '1', 'status' => 'in progress'],
            ['status_id' => '2', 'status' => 'completed'],
            ['status_id' => '0', 'status' =>  'canceled']
        ]);

        DB::collection('recipients')->insert(
            ['recipient' => 'thiar@inosoft.com']);

        DB::collection('vendors')->insert(
            [
                [
                    'instruction_id' => 'LI-2021-0199 R02',
                    'assign_vendor' => 'AGILITY (ABU DHABI) PJSC',
                    'attention' => 'Priyesh Thattarath',
                    'quotation' => 'MITME-AGL-01 (Appendix 1)',
                    'invoice' => ['Invoice1'],
                    'customer_contract' => 'Hail & Gasha',
                    'vendor_address' => 'Soi Pridi',
                    'customer_po' => '',
                    'description' => 'Rigprep Transportation',
                    'qty' => 5,
                    'uom' => 'SHP', 
                    'unit_price' => 100,
                    'discount' => 5,
                    'gst_vat' => 0,
                    'currency' => 'USD',
                    'charge' => 'MITME',
                    'attachment' => 'Attacthement 1',
                    'notes' => 'Rigprep Transportation',
                    'link_to' => '-',
                    'status' => 1,
                    'type' => 'LI'
                ],
                [
                    'instruction_id' => 'LI-2021-0203',
                    'assign_vendor' => 'AGILITY (ABU DHABI) PJSC',
                    'attention' => 'Priyesh Thattarath',
                    'quotation' => 'MITME-AGL-01 (Appendix 1)',
                    'invoice' => ['Invoice1'],
                    'customer_contract' => 'Hail & Gasha',
                    'vendor_address' => 'Soi Pridi',
                    'customer_po' => '',
                    'description' => 'Rigprep Transportation',
                    'qty' => 5,
                    'uom' => 'SHP', 
                    'unit_price' => 100,
                    'discount' => 5,
                    'gst_vat' => 0,
                    'currency' => 'USD',
                    'charge' => 'MITME',
                    'attachment' => 'Attacthement 1',
                    'notes' => 'Rigprep Transportation',
                    'link_to' => 'MR-2021-0134',
                    'status' => 1,
                    'type' => 'LI'
                ],
                [
                    'instruction_id' => 'LI-2021-0213',
                    'assign_vendor' => 'AGILITY (ABU DHABI) PJSC',
                    'attention' => 'Priyesh Thattarath',
                    'quotation' => 'MITME-AGL-01 (Appendix 1)',
                    'invoice' => ['Invoice1'],
                    'customer_contract' => 'Hail & Gasha',
                    'vendor_address' => 'Soi Pridi',
                    'customer_po' => '',
                    'description' => 'Rigprep Transportation',
                    'qty' => 5,
                    'uom' => 'SHP', 
                    'unit_price' => 100,
                    'discount' => 5,
                    'gst_vat' => 0,
                    'currency' => 'USD',
                    'charge' => 'MITME',
                    'attachment' => 'Attacthement 1',
                    'notes' => 'Rigprep Transportation',
                    'link_to' => 'RRIN-2021-0054',
                    'status' => 1,
                    'type' => 'LI'
                ],
                [
                    'instruction_id' => 'LI-2021-0218',
                    'assign_vendor' => 'AGILITY (ABU DHABI) PJSC',
                    'attention' => 'Priyesh Thattarath',
                    'quotation' => 'MITME-AGL-01 (Appendix 1)',
                    'invoice' => ['Invoice1'],
                    'customer_contract' => 'Hail & Gasha',
                    'vendor_address' => 'Soi Pridi',
                    'customer_po' => '',
                    'description' => 'Rigprep Transportation',
                    'qty' => 5,
                    'uom' => 'SHP', 
                    'unit_price' => 100,
                    'discount' => 5,
                    'gst_vat' => 0,
                    'currency' => 'USD',
                    'charge' => 'MITME',
                    'attachment' => 'Attacthement 1',
                    'notes' => 'Rigprep Transportation',
                    'link_to' => '-',
                    'status' => 1,
                    'type' => 'LI'
                ],
                [
                    'instruction_id' => 'SI-2022-0002',
                    'assign_vendor' => 'Amarit & Associates Co Ltd',
                    'attention' => 'Rigsite Transportation',
                    'quotation' => 'MITME-AGL-001',
                    'invoice' => ['Invoice1'],
                    'customer_contract' => 'Hail & Gasha',
                    'vendor_address' => 'Soi Pridi',
                    'customer_po' => 'PO003',
                    'description' => 'Rigsite Transportation',
                    'qty' => 5,
                    'uom' => 'SHP', 
                    'unit_price' => 100,
                    'discount' => 5,
                    'gst_vat' => 0,
                    'currency' => 'USD',
                    'charge' => 'MITME',
                    'attachment' => 'Attacthement 1',
                    'notes' => 'Rigsite Transportation',
                    'link_to' => '-',
                    'status' => 2,
                    'type' => 'SI'
                ],
                [
                    'instruction_id' => 'SI-2022-0001 R01',
                    'assign_vendor' => 'Amarit & Associates Logistics Co Ltd',
                    'attention' => 'Rigprep Transportation from Agility Kizad',
                    'quotation' => 'MITME-AGL-001',
                    'invoice' => ['Invoice1'],
                    'customer_contract' => 'Hail & Gasha',
                    'vendor_address' => 'Soi Pridi',
                    'customer_po' => 'PO01',
                    'description' => 'Rigprep Transportation from Agility Kizad',
                    'qty' => 5,
                    'uom' => 'SHP', 
                    'unit_price' => 100,
                    'discount' => 5,
                    'gst_vat' => 0,
                    'currency' => 'USD',
                    'charge' => 'MITME',
                    'attachment' => 'Attacthement 1',
                    'notes' => 'Rigprep Transportation',
                    'link_to' => 'INSP-2020-0001',
                    'status' => 0,
                    'type' => 'SI'
                ],
                [
                    'instruction_id' => 'SI-2021-0116 R01',
                    'assign_vendor' => 'ALMANSOORI INSPECTION SERVICE COMPANY LLC',
                    'attention' => 'ALMANSOORI INSPECTION SERVICE COMPANY LLC',
                    'quotation' => 'MITME-AGL-001 (Appendix 1)',
                    'invoice' => ['Invoice1'],
                    'customer_contract' => 'Hail & Gasha',
                    'vendor_address' => 'Soi Pridi',
                    'customer_po' => '',
                    'description' => 'ALMANSOORI INSPECTION SERVICE COMPANY LLC',
                    'qty' => 5,
                    'uom' => 'SHP', 
                    'unit_price' => 100,
                    'discount' => 5,
                    'gst_vat' => 0,
                    'currency' => 'USD',
                    'charge' => 'MITME',
                    'attachment' => 'Attacthement 1',
                    'notes' => 'ALMANSOORI INSPECTION SERVICE COMPANY LLC',
                    'link_to' => '-',
                    'status' => 2,
                    'type' => 'SI'
                ],
                [
                    'instruction_id' => 'SI-2021-0115',
                    'assign_vendor' => 'NOV Tuboscope Middle East LLC',
                    'attention' => 'NOV Tuboscope Middle East LLC',
                    'quotation' => 'MITME-AGL-001 (Appendix 1)',
                    'invoice' => ['Invoice1'],
                    'customer_contract' => 'Hail & Gasha',
                    'vendor_address' => 'Soi Pridi',
                    'customer_po' => '',
                    'description' => 'NOV Tuboscope Middle East LLC',
                    'qty' => 5,
                    'uom' => 'SHP', 
                    'unit_price' => 100,
                    'discount' => 5,
                    'gst_vat' => 0,
                    'currency' => 'USD',
                    'charge' => 'MITME',
                    'attachment' => 'Attacthement 1',
                    'notes' => 'NOV Tuboscope Middle East LLC',
                    'link_to' => '-',
                    'status' => 2,
                    'type' => 'SI'
                ],
            ]
        );
    }
}
