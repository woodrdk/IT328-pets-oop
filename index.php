<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Required file
require_once('vendor/autoload.php');


//Start a session
session_start();

//Instantiate Fat-Free
$f3 = Base::instance();

//Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function($f3) {
        $pet1 = new Pet("Sparky", "Red");
        $pet2 = new Pet();
        //$pet2->eat();
        //var_dump($pet1);
        $pet2->setName("Igor");
        $f3->set('pet1',$pet1);
        $f3->set('pet2',$pet2);

    $view = new Template();
    echo $view->render('views/my-pets.html');
});

//Run Fat-Free
$f3->run();