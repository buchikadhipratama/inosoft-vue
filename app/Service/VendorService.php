<?php

namespace App\Service;

use App\Repository\VendorRepository;

class VendorService{
    public function createVendorFromArray(array $vendor)
    {
        $error = (new VendorRepository)->createVendorFromArray($vendor);
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

    public function getAllVendor()
    {
        return (new VendorRepository)->getAll();
    }

    public function updateVendorFromArray(array $vendor)
    {
        $error = (new VendorRepository)->updateVendorFromArray($vendor);
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

    // public function deleteVendorbyId(string $vendorId)
    // {
    //     $error = (new VendorRepository)-> deleteById($vendorId);
    //     if ($error){
    //         return [
    //             'error' => 1
    //         ];
    //     }else{
    //         return [
    //             'error' => 0
    //         ];
    //     }
    // }

    public function getCompleted()
    {
        return (new VendorRepository)->getAllCompleted();
    }

    public function changeVendorStatus(array $vendor)
    {
        $error = (new VendorRepository())->changeVendorStatus($vendor);
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

    public function cancelation(array $cancel)
    {
        $error = (new VendorRepository)-> cancelation($cancel);
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

    public function getSingleData($id)
    {
        $error = (new VendorRepository())->getSingleData($id);
        if($error){
            return [
                'error' => 1
            ];
        }

        return [
            'error' => 0
        ];
    }
}