<?php

namespace App\Services;

use App\Services\Interfaces\eReader;
use App\Services\Interfaces\ReaderBookInterface;

class ReaderAdapter implements ReaderBookInterface
{

    protected $eReader;

    public function __construct(eReader $eReader)
    {
        $this->eReader = $eReader;
    }

    public function open()
    {
        return $this->eReader->turnOn();
    }

    public function turnPage()
    {
        return $this->eReader->pressNextButton();
    }
}
