<?php
//  **** GENERAL CONFIGURATION  **** //
define("URI", $_SERVER['REQUEST_URI']); // Return the URI of th current page
define("DEFAULT_CONTROLLER", "c_Home"); // This is the default controller
define("DEFAULT_METHOD", "Index"); // This is the default method
define("CORE", "config/core/"); // Path to the core
define("PATH_CONTROLLERS", "app/controllers/"); // Path to the controllers
define("PATH_VIEWS", "app/views/"); // Path to the views
define("PATH_MODELS", "app/models/"); // Path to the models

// **** Change this setting for each project **** //
define("ROOT", $_SERVER['DOCUMENT_ROOT'] . '/Tecnologym/');
define("BASE_URL", "http://localhost/Tecnologym/");
define("IMG_URL", "app\assets\img\uploaded_images/");

// **** DATABASE **** //
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","tecnologym"); // Change this!

?>



<?php
// //  **** GENERAL CONFIGURATION  **** //
// define("URI", $_SERVER['REQUEST_URI']); // Return the URI of th current page
// define("DEFAULT_CONTROLLER", "c_Home"); // This is the default controller
// define("DEFAULT_METHOD", "Index"); // This is the default method
// define("CORE", "config/core/"); // Path to the core
// define("PATH_CONTROLLERS", "app/controllers/"); // Path to the controllers
// define("PATH_VIEWS", "app/views/"); // Path to the views
// define("PATH_MODELS", "app/models/"); // Path to the models

// // **** Change this setting for each project **** //
// define("ROOT", '/home/pjorgec04/public_html/');
// define("BASE_URL", "http://jmlcasa.dyndns.info:8080/~pjorgec04/");

// // **** DATABASE **** //
// define("DB_HOST","localhost");
// define("DB_USER","pjorgec04");
// define("DB_PASS","3569552");
// define("DB_NAME","pjorgec04"); // Change this!

?>

