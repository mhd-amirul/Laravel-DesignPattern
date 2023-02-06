<?php

namespace App\Services\Interfaces;

interface ReaderBookInterface {
    public function open();
    public function turnPage();
}
