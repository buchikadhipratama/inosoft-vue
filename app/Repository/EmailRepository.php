<?php

namespace App\Repository;

use App\Models\Email;

class EmailRepository
{
    public function sentMail(array $email)
    {
        try {
            $email = new Email();
            $email->description = $email['recipient'];            
            $email->save();

            return 0;
        } catch (\Throwable $th) {
            return 1;
        }
    }
}