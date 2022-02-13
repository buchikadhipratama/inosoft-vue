<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::collection('customer')->delete();

        DB::collection('customer')->insert([['id' => 1, 'name' => 'Hail & Gasha'], ['id' => 2, 'name' => 'OFFSHORE'], ['id' => 3, 'name' => 'ONSHORE'], ['id' => 4, 'name' => 'Sour Gas']]);
    }
}
