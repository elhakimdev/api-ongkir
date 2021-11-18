<?php

namespace ElhakimDev\ApiShipment;

use Illuminate\Support\Facades\Facade;
/**
 * @method \Illuminate\Http\Client\Response|void call(string $method, string $uri, mixed $payload) Call request
 */
class ShipmentFacade extends Facade
{
       protected static function getFacadeAccessor()
       {
              return 'Shipment';
       }
}
