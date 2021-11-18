<?php

namespace ElhakimDev\ApiShipment;

use Dotenv\Dotenv;
use Illuminate\Support\ServiceProvider;

class ShipmentServiceProvider extends ServiceProvider
{
       public function register()
       {
              $this->app->bind('Shipment', function(){
                     return new Shipment(env('API_KEY'));
              });
       }
}
