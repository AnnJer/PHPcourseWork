<?php
namespace core;



    class Router
    {
        protected $routes;

        public function __construct()
        {
            $this->routes = require_once (ROOT . '/config/routes.php');
        }


        public function run(){

            $request = RequestFormer::getRequest();

            foreach ($this->routes as $route){
                if($route->checkRequest($request)){

                    $controllerName = $route->getController();
                    require_once (ROOT . '/controllers/' . $controllerName . '.php');

                    $controller = new $controllerName;
                    $methodName = $route->getFunction();

                    $params = $route->getUriParams($request->uri);

                    $result = call_user_func_array([$controller, $methodName], $params);

                    $this->processResult($result);
                    return;
                }
            }

            echo '<h1>Page not found</h1>';

        }



        protected function processResult($result) {
            if(is_string($result)) {
                echo $result;
                return;
            }

            if(is_array($result)) {
                echo json_encode($result);
                return;
            }

            if($result instanceof View) {
                $result->show();
            }
        }

    }


