<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Instantiate the F3 Base class
$f3 = Base::instance();   //a Fat Free object

//Define a default route
$f3->route('GET /', function() {
    $view = new Template();
    echo $view->render('views/pet-home.html');
});

//Define an order route
$f3->route('GET /order', function() {
    echo '<h1>Order Page</h1>';

    $view = new Template();
    echo $view->render('views/pet-order.html');
});

//Run fat free
$f3->run();