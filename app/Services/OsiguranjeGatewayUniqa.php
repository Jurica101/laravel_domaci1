<?php

namespace App\Services;
use App\Services\Osiguranje;

class OsiguranjeGatewayUniqa implements Osiguranje
{
    private $odabranoOsiguranje;

    public function __construct(string $odabranoOsiguranje)
    {
        $this->odabranoOsiguranje = $odabranoOsiguranje;
    }

    public function process()
    {
        return  $this->execute() . " " . $this->price();
    }

    public function execute()
    {
        return "Želite ugovoriti osuiguranje kod Uniqa osiguranja.";
    }

    public function price()
    {
        return "Cijena osiguranja je: 109kn mjesečno.";
    }
}
