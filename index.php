<?php 

require "services/Router.php";

$leRouter = new Router();

$route = "";

if(isset($_GET["route"]) && !empty($_GET["route"])){
        
        $route = $_GET["route"];
    }


// echo $route ; 


$leRouter->checkRoute($route);

?>