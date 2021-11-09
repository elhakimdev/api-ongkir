<?php

use ElhakimDev\ApiShipment\Shipment;
use ElhakimDev\ApiShipment\Test\TestCase;

class BasicTest extends TestCase
{
       public function test_initial_test()
       {
              $instance = new Shipment();

              $this->assertInstanceOf('ElhakimDev\ApiShipment\Shipment', $instance, 'This instance are same');
       }
}
