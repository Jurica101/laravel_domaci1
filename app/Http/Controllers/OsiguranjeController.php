<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Osiguranje;

class OsiguranjeController extends Controller
{
    public function show(Osiguranje $osig) // u $osig spremamo insancu klase Osiguranje - dependency injectanjem
    {
        echo($osig->process()); // sada pomoću $osig objekta možemo pozvati metodu process() iz klase OsiguranjeGatewayUniqa
        // ili OsiguranjeGatewayJadransko čija instanca je već $osig
    }
}
