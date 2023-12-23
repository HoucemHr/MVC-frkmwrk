<?php
namespace app\Core;
    //require_once "c:/xampp/htdocs/Project/vendor/autoload.php"; 
    
/**
* Class Application
* 
* @author HoucemHr <houcem-eddin.hrichi@enis.tn>
* @package app\Core
*/


    class Application{
        
        
        public Router $router;//public bcz we call it to call router methods
        public Request $request;
        
        
        public function __construct(){
            $this->request = new Request();
            //we want to be able to access the router via application, therefore the app request needs to be 
            //the router's request
            $this->router = new Router($this->request);
        }
        


        public function run(){

            $this->router->resolve(); 

        }


        
    }


    