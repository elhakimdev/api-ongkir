<?php

namespace ElhakimDev\ApiShipment;

use Illuminate\Support\Facades\Http;

class Shipment
{
    /**
     * The api key
     */
    private $key;
    /**
     * consstructor 
     */
    public function __construct(string $key)
    {
        $this->key = $key;
    }
    /**
     * Call request
     */
    public function call(string $method, string $uri, mixed $payload)
    {
        if($method === 'GET'){
            return Http::withHeaders(['key'=> $this->key])->get($uri);
        }
        if($method === 'POST'){
            return Http::withHeaders(['key'=> $this->key])->post($uri, $payload);
        }
    }
}
