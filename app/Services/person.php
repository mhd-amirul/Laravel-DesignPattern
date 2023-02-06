<?php

namespace App\Services;

use App\Services\Interfaces\ReaderBookInterface;

class person {
    public function read(ReaderBookInterface $book)
    {
        return [
            "1" => $book->open(),
            "2" => $book->turnPage()
        ];
    }
}
