<?php

namespace ElhakimDev\ApiShipment;

use Illuminate\Support\Facades\Facade;

class ShipmentFacade extends Facade
{
       protected static function getFacadeAccessor()
       {
              return 'Shipment';
       }
}
