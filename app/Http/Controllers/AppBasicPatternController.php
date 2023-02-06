<?php

namespace App\Http\Controllers;

use App\Services\BasicInspection;
use App\Services\MobileReader;
use App\Services\OilChange;
use App\Services\person;
use App\Services\ReaderAdapter;
use App\Services\TireRotation;
use App\Services\VeggieSub;
use Illuminate\Http\Request;

class AppBasicPatternController extends Controller
{
    public function basic_pattern()
    {
        $services = (new TireRotation(new OilChange(new BasicInspection)));

        return response()->json([
            "cost" => $services->getCost(),
            "description" => $services->getDescription()
        ], 200);
    }

    public function implementation_adapter()
    {
        return (new person)->read(new ReaderAdapter(new MobileReader));
    }

    public function template_pattern()
    {
        return response()->json((new VeggieSub)->makesub(), 200);
    }
}
