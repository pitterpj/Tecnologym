<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->



<?php
class c_Users extends Controller
{

    private $m_Users; //Property to instantiate the model

    public function __construct()
    {
        $this->m_Users = $this->loadModel("m_Users");
    }

    public function index()
    {
        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        $this->loadView("v_Dashboard");
        $this->loadView("templates/footer");
    }

    public function authenticate()
    {
        //We recibed the user and pass and send to m_Users
        $row = $this->m_Users->authenticate($_REQUEST['user'], $_REQUEST['password']);
        if ($row) {
            $_SESSION['session'] = [
                'user' => $row['user'],
                'password' => $row['password']
                // 'user'=> $row['user'].
            ];
            header("Location:" . BASE_URL . "c_Users/index");
        } else {
            //Si no existe error y al login con mensaje de error
            $_SESSION['errorMessage'] = 'Usuario o contraseña incorrectos';
            header("Location:" . BASE_URL);
        }
    }
}

?>