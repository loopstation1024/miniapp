<?php

class FrontController
{
 
    static function main()
    {    
        require 'libs/config.php'; 
        
        $controllerName = (!empty($_GET["controller"])) ? $_GET["controller"] . "Controller" : "IndexController";
        $actionName = (!empty($_GET["action"])) ? $_GET["action"] : "index";
        
        $controllerPath = "controller/" . $controllerName . ".php";

        if (is_file($controllerPath)){
            require($controllerPath);
        }else {
            die("No existe la ruta");
        }

        $controller = new $controllerName();
        $controller->$actionName();
    }
}