<?php

namespace App\Providers;

use App\Services\OsiguranjeGatewayUniqa;
use Illuminate\Support\ServiceProvider;
use App\Services\Osiguranje;
use App\Services\OsiguranjeGatewayJadransko;
use Symfony\Component\HttpFoundation\Request;

class OsiguranjeProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Osiguranje::class, function($gateway){
            if (request()->gateway == 'uniqa')
            {
                return new OsiguranjeGatewayUniqa("Uniqa"); // dajemo harkodirani podatak Uniqa za kontruktor gatewaya
            } elseif (request()->gateway == 'jadransko')
            {
                return new OsiguranjeGatewayJadransko("Jadransko"); // dajemo harkodirani podatak Jadransko za kontruktor gatewaya
            }
        }); /* preko app helper funkcije Laravela, korištenjem metode bind vršimo registraciju povezivanja
        nekog Service Providera s nekim  Service Containerom - prvi parametar binda je sam service container na koji vežemo
        a drugi parametar je funkcija koja će se odraditi za bindinje na taj Service Provider - funkcija će
        izvršiti instanciranje OsiguranjeGatewayUniqa klase s ulaznim parametrom Uniqa. Ovdje smo zapravo rekli
        da, svaki puta kada će netko htjeti instancirati Osiguranje klasu, da će se instancirati OsiguranjeGatewayUniqa.*/
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
