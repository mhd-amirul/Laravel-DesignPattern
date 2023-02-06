<?php

namespace App\Services;

use App\Services\Interfaces\CarServiceInterface;

class BasicInspection implements CarServiceInterface
{
    public function getCost()
    {
        return 20;
    }

    public function getDescription()
    {
        return "Basic Inspection.";
    }
}
