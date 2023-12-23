<?php

namespace app\Core;

/**
* Class Router
* 
* @author HoucemHr <houcem-eddin.hrichi@enis.tn>
* @package app\Core
*/


    class Router{

        protected array $routes = [];
        protected Request $request;
        
        function __construct($request){
            $this->request = $request;
        }

        public function get($path, $callback){
            $this->routes['get'][$path] = $callback;
        }

        public function post($path, $callback){
            $this->routes['post'][$path] = $callback;
        }


        //based on Request calls adequate action,basically dispatch
        public function resolve(){
            $method = $this->request->getMethod(); 
            $path = $this->request->getPath();



            if(isset($this->routes[$method][$path])){
                $this->routes[$method][$path]();//calling callback here, trailing () needed whether function registred by name string
                //or an anonymous function
            }else{
                echo "404 NOT FOUND";
            }
        }
    
    }  