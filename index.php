<?php

use ElhakimDev\ApiShipment\Shipment;
use ElhakimDev\ApiShipment\ShipmentFacade;

require_once '../api-ongkir/vendor/autoload.php';
// contoh penggunaan service nya kaak gini ya mas rian 
$service = new Shipment('akjsdjakdsjdbs'); // isikan key dari raja ongkir, kedepanya aku buat dinamis
$response = $service->call('GET', '', []); // param pertama, METHOD REQUEST, PARAM KEDUA URL, PARAM KETIGA DATA 
$response->json(); // UBAH RESPONSE JADI JSON dah selesai !!.