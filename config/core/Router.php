<?php

class Router
{
    //****  Properties ****//
    private $uri; // Array containing the uri
    private $controller;
    private $method;
    private $params; // Array of parameters

    public function __construct()
    {
        //Get the values of the uri with setters methods
        $this->setUri();
        $this->setController();
        $this->setMethod();
        $this->setParams();
    }


    //****  Setters Methods ****//
    public function setUri()
    {
        //Explode returns an array of strings using the delimiter you set.
        $this->uri = explode("/", URI);
    }

    public function setController()
    {
        //If the controller don´t exist in the URI this will be the default_method. If it exists put this controller.
        $this->controller = empty($this->uri[2]) ? DEFAULT_CONTROLLER : $this->uri[2];
    }

    public function setMethod()
    {
        // Put the index 3 of array Uri
        $this->method = empty($this->uri[3]) ? DEFAULT_METHOD : $this->uri[3];
    }

    public function setParams()
    {
        // Set all the parameters that may exist
        for ($i = 4; $i < count($this->uri); $i++) {
            // Start counting form Uri four and put each parameter in the array
            $this->params[] = !isset($this->uri[$i]) ? "" : $this->uri[$i];
        }
    }


    //****  Setters Methods ****//
    public function getUri()
    {
        return $this->uri;
    }

    public function getController()
    {
        return $this->controller;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getParams()
    {
        return $this->params;
    }
} //End class Router
?>