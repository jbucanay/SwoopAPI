<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About SwoopAPI

The Swoop data Api provides methods for requesting, creating, updating and deleting specific records about student information. Below are the CRUD operations one can perform on this API. 

### HTTP requests

#### GET http://localhost/api/university
    returns a json object
    sample return object:
    {
    "data": {
        "id": 1,
        "first_name": "gilbert",
        "last_name": "baracka",
        "address": "1234 utah",
        "city": "salt lake city",
        "state": "utah",
        "created_at": "2022-07-04T15:08:21.000000Z"
    }
}
    

### POST http://localhost/api/university
    accepts body:
       ```json
        {
            "first_name": string,
            "last_name": string,
            "address": string,
            "city": string,
            "state": string
        }
        ``` 
   returns a json object

#### PUT/PATCH http://localhost/api/university/{id}
    accepts body:
   {
            "first_name": string,
            "last_name": string,
            "address": string,
            "city": string,
            "state": string
        }
    returns a json object

### Delete http://localhost/api/university/{id}


### installation

0) Have docker installed and running before starting. Make sure to also install PHP, Laravel, and composer
1) Fork and clone: https://github.com/jbucanay/SwoopAPI
2) CD into SwoopAPI
3) Run: composer install
4) Run: cp .env.example .env
5) Run: ./vendor/bin/sail up
6) Run: ./vendor/bin/sail artisan migrate
5) I recommend Postman to test the http requests listed above 



