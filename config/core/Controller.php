<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->

<?php
//This means that if you try enter by URL it will not allow it.
//defined('BASEPATH') or exit('No direct script access allowed');

abstract class Controller
{

    public function __construct()
    {
    }

    abstract public function index();

    //****  Methods ****//
    protected function loadView($view, $params = array())
    {
        return new View($view, $params);
    }

    protected function loadModel($model)
    {
        if (is_file(ROOT . PATH_MODELS . $model . ".php")) {
            include ROOT . PATH_MODELS . $model . ".php";
            return new $model();
        } else {
            throw new Exception("Error, model does not exist");
        }
    }
} //End class Controller
?>