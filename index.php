<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->

<!-- 
    How the Model-View-Controller works:
        URI: http://domain.com[0]/subfolders[1]/controller[2]/method[3]/param1/param2/param3...
        -> Domain: domain where the MVC is
        -> Folders and subfolders: where resource is
        -> Controller: Controller where methods are
        -> Method: Methods with the parameters
        ->Parameter: Parameters used  
-->
<?php

if (!session_id()) session_start();

// As always happens by index we load the basic configuration and the core here.
require("system/config.php");
require("system/core/autoload.php");

// Instantiate the Router
$router = new Router();

$controller = $router->getController();
$method = $router->getMethod();
$parameters = $router->getParams();

// Include the controller that is in the URI
//      If not exists the controller redirect to error page in controllers
if (!is_file(PATH_CONTROLLERS . $controller . ".php")) $controller = "c_ErrorPage";
include PATH_CONTROLLERS . $controller . ".php";

// Instantiate the Controller
$myController = new $controller();

// Validate that method exist in the Uri
//      If not exists the controller redirect to index page
if (!method_exists($myController, $method)) $method = "index";

// Call controller method with the parameters
if (empty($parameters)) {
    $myController->$method();
} else {
    $myController->$method($parameters);
}
?>