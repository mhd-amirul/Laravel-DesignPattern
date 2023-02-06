<?php

namespace App\Services;

use App\Services\Interfaces\ReaderBookInterface;

class ReadBook implements ReaderBookInterface
{
    public function open()
    {
        return "open the book.";
    }

    public function turnPage()
    {
        return "turn page if the book.";
    }
}
