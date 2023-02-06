<?php

namespace App\Services;

use App\Services\Interfaces\eReader;

class MobileReader implements eReader
{
    public function turnOn()
    {
        return "turn on device and open app.";
    }

    public function pressNextButton()
    {
        return "press next button to turn the page.";
    }
}
