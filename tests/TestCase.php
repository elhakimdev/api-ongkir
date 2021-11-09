<?php

namespace ElhakimDev\ApiShipment\Test;

use ElhakimDev\ApiShipment\ShipmentFacade;
use ElhakimDev\ApiShipment\ShipmentServiceProvider;
use Orchestra\Testbench\TestCase as TestbenchTestCase;

class TestCase extends TestbenchTestCase
{
       protected function getPackageProviders($app)
       {
              return [ShipmentServiceProvider::class];
       }
       protected function getPackageAliases($app)
       {
              return [
                     "Shipment" => ShipmentFacade::class
              ];
       }
}
