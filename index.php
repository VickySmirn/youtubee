
<?php
session_start();


require_once 'vendor/autoload.php';



$klein = new \Klein\Klein();


$klein->respond('GET', '/', function () {
    Controllers\Homepage::index();
});


$klein->respond('GET', '/category/[:id]', function ($request) {
    return Controllers\Homepage::byCategory($request);
});


$klein->respond('GET', '/login', function () {
    return Controllers\Auth::loginIndex();
});


$klein->respond('POST', '/login', function () {
    return Controllers\Auth::processLogin();
});


$klein->respond('GET', '/register', function () {
    return Controllers\Auth::registerIndex();
});

$klein->respond('POST', '/register', function () {
    return Controllers\Auth::processRegistration();
});

$klein->dispatch();



