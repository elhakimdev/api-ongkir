<?php

namespace ElhakimDev\ApiShipment\Test;

use Dotenv\Dotenv;
use ElhakimDev\ApiShipment\ShipmentServiceProvider;
use Illuminate\Container\Container;
use Orchestra\Testbench\TestCase as TestbenchTestCase;

class TestCase extends TestbenchTestCase
{
       protected function getPackageProviders($app)
       {
              return [ShipmentServiceProvider::class];
       }
       protected function setUp(): void
       {
              (Dotenv::createImmutable(__DIR__ . '../../'))->load();
       }
}
