<?php

namespace app\Core;


/**
* Class Request
* 
* @author HoucemHr <houcem-eddin.hrichi@enis.tn>
* @package app\Core
*/



    class Request{


        public function getMethod(){
            return strtolower($_SERVER["REQUEST_METHOD"]);
        }

        public function getPath(){
            return $_SERVER["PATH_INFO"] ?? "/";
        }
    }