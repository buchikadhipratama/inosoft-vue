<?php

namespace App\Repository;

use App\Models\Cancelation;

class CancelationRepository
{
    public function cancelation(array $cancel)
    {
        try {
            $cancel = new Cancelation();
            $cancel->description = $cancel['description'];  
            $cancel->attachment = $cancel['attachment'];
            $cancel->status = 2;           
            $cancel->save();

            return 0;
        } catch (\Throwable $th) {
            return 1;
        }
    }
}