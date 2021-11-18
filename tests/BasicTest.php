<?php


use ElhakimDev\ApiShipment\Shipment;
use ElhakimDev\ApiShipment\Test\TestCase;
use Illuminate\Support\Facades\Http;

class BasicTest extends TestCase
{
       public function test_initial_test()
       {
              $instance = new Shipment(getenv('API_KEY'));

              $this->assertInstanceOf('ElhakimDev\ApiShipment\Shipment', $instance, 'This instance are same');

              $this->assertClassHasAttribute('key', 'ElhakimDev\ApiShipment\Shipment');
       }
       public function test_class_can_get_env_value()
       {
              $env = env('API_KEY');

              $this->assertFileExists('.env');

              $this->assertEquals('api_key_raja_ongkir', $env);
       }
}
