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
        // Create DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        );

        // Test connection
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            // Capture all PDOExcepction errors
            $this->error = $e->getMessage();
        }
    } //End construct

    //****  Methods ****//
    public function consult($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    public function link($param, $value, $type = null)
    {
        // Performs the bindValue and sets the type of params
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    public function launch()
    {
        // Return a result object with all selected rows.
        return $this->stmt->execute();
    }

    public function resultado()
    { // Returns the results in an associative array
        // Calls the launch function to execute the query
        $this->launch();

        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function row()
    { // Returns a single result
        // Calls the launch function to execute the query
        $this->launch();

        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
} //End class Model
?>