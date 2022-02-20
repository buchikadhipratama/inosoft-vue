<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinkToSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::collection('link_to')->delete();

        DB::collection('link_to')->insert(
            [
                ['id' => 1, 'name' => 'INSP-2020-0001'], 
                ['id' => 2, 'name' => 'INSP-2020-0002'], 
                ['id' => 3, 'name' => 'INSP-2020-0003'], 
                ['id' => 4, 'name' => 'INSP-2020-0004'],
                ['id' => 5, 'name' => 'INSP-2020-0005'],
                ['id' => 6, 'name' => 'INSP-2020-0006'],
                ['id' => 7, 'name' => 'INSP-2020-0007'],
                ['id' => 8, 'name' => 'INSP-2020-0008'],
                ['id' => 9, 'name' => 'INSP-2020-0009'],
                ['id' => 10, 'name' => 'INSP-2020-0010'],
                ['id' => 11, 'name' => 'INSP-2020-0011']
            ]
        );
    }
}
