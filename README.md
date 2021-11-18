# Project Title

A minimalis shipment cost service for laravel indonesian shipping company.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

The things you need before installing the software.

* orchestra/testbench: ^6.22
* phpunit/phpunit: ^9.5
* php: ^7.3

### Installation

A step by step guide that will tell you how to get the development environment up and running.

```
$ composer require elhakim_dev/api-ongkir
```

after this installation was done, go to ```config/app.php``` to register service provider by adding ```ShipmentServiceProvider::class,``` on ```providers``` array,

after it, register facade class to using facade provided by laravel core, following instruction :
1. in ```config/app.php``` adding a ```'Shipment' => ShipmentFacade::class,``` in array of ```aliases```.

after all step done, ```composer dump-autoload``` to refresh autoload class map.

installation done !!. 

## Usage

A few examples of useful commands and/or tasks.


before use this package, dont forget to adding a environment variable 
```
PROVIDER_API_KEY=0fa2fbc1bf32432b00e487b7cc964179
PROVIDER_ACCOUNT_TYPE=starter
PROVIDER_NAME=rajaongkir
```
in your ```.env``` configuration file, to make sure that this package is run normally.


since we have done to registering service provider and facade alias, so we can use its package via facade or class, because using facade is free to use in anything place, ex: route, controller,etc. facade is available globally after we have done registering this package into lravel app.


we recommended using facade class. please follow this instruction
```
example using facade in route :

Route::get('/test',function(Request $request){
    return Shipment::call('GET','http://api.rajaongkir.com/starter/province',[]); 
}); // test get

Route::post('/test',function(Request $request){
    return Shipment::call('POST','http://api.rajaongkir.com/starter/province',[
        
    ]); // tes post
});
```

note: use HTTP instead HTTPS;


### Branches

* Master: main branch for deployment
* Develop: stagging and testing branch
* Feature: To research and adding new feature
