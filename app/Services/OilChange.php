<?php

namespace App\Services;

use App\Services\Interfaces\CarServiceInterface;

class OilChange implements CarServiceInterface
{

    protected $carServices;

    public function __construct(CarServiceInterface $carServices)
    {
        $this->carServices = $carServices;
    }

    public function getCost()
    {
        return 25 + $this->carServices->getCost();
    }

    public function getDescription()
    {
        return "Oil Change, " . $this->carServices->getDescription();
    }
}
