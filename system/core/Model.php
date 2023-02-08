<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->

<?php

class Model
{
    //****  Properties ****//
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $dbh; // Database manipulator
    public $error; // Variable to set an error in case there is one.
    private $stmt; // Object sentence to read

    function __construct()
    {
        
    }
} //End class Model
?>