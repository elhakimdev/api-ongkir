<?php

use ElhakimDev\ApiShipment\Shipment;

$response = new Shipment(env('sdklsdknsndls'));
$res = $response->call('','',[]);
dd($res->json());
