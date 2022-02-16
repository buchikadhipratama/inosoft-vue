<?php

namespace App\Service;

use App\Repository\CancelationRepository;

class CancelationService
{
    public function cancelation(array $cancel)
    {
        $error = (new CancelationRepository)-> cancelation($cancel);
        if ($error){
            return [
                'error' => 1
            ];
        }else{
            return [
                'error' => 0
            ];
        }
    }

}