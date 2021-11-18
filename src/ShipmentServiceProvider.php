<?php

namespace ElhakimDev\ApiShipment;

use Illuminate\Support\ServiceProvider;

class ShipmentServiceProvider extends ServiceProvider
{
       public function register()
       {
              // $this->app->singleton(Shipment::class, function () {
              //        return new Shipment(env('API_KEY'));
              // });
              $this->app->bind('Shipment', function(){
                     return new Shipment(env('API_KEY'));
              });
       }
}
