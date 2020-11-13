<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use App\Http\Controllers\BookController;

$router->get('/', function(){
    return view('welcome');
});

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/books', 'BookController@books');
$router->get('/books/{id}', 'BookController@getbook');
$router->delete('books/delete/', 'BookController@deletebook');

$router->get('/checkouts', 'CheckoutController@checkouts');
$router->put('/checkouts/changestatus/', 'CheckoutController@changestatus');
$router->post('/checkouts/createcheck', 'CheckoutController@createchecked');
$router->delete('/checkouts/delete', 'CheckoutController@deleteone');

$router->get('/users', 'UsersController@users');
