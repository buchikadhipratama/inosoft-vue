<?php

namespace App\Service;

use App\Repository\EmailRepository;

class EmailService
{
    public function sentMail(array $mail)
    {
        $error = (new EmailRepository)-> sentMail($mail);
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