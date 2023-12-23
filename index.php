<?php

use app\Core\Application;
require_once __DIR__ . "/vendor/autoload.php";
    

    $app = new Application();
    
    $app->router->get("/", function(){
        echo "Success<br>";
    });

    $app->run();

    