<?php

namespace App\Services;


// definira se interface kojeg će moći implementirati različiti Osiguranje provideri (Uniqa ili Jadransko)
interface  Osiguranje
{
    public function process();
}
