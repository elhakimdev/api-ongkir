<?php

namespace ElhakimDev\ApiShipment;

use Illuminate\Support\ServiceProvider;

class ShipmentServiceProvider extends ServiceProvider
{
       public function register()
       {
              $this->app->singleton(Shipment::class, function () {
                     return new Shipment();
              });
              $this->app->alias(Shipment::class, 'Shipment');
       }
}
