<?php

namespace App\Services;

use App\Services\Interfaces\CarServiceInterface;

class TireRotation implements CarServiceInterface
{

    protected $carServices;

    public function __construct(CarServiceInterface $carServices)
    {
        $this->carServices = $carServices;
    }

    public function getCost()
    {
        return 50 + $this->carServices->getCost();
    }

    public function getDescription()
    {
        return "Tire Rotation, " . $this->carServices->getDescription();
    }
}
