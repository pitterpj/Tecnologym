<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->



<?php
class c_Users extends Controller
{

    private $m_Users; //Property to instantiate the model
    private $m_PersonalTraining;

    public function __construct()
    {
        $this->m_Users = $this->loadModel("m_Users");
    }

    public function index()
    {
        // $this->loadView("templates/header");
        // $this->loadView("templates/sidebar");
        // $this->loadView("v_Dashboard");
        // $this->loadView("templates/footer");
    }

    public function authenticate()
    {
        //We recibed the user and pass and send to m_Users
        $row = $this->m_Users->authenticate($_REQUEST['user'], $_REQUEST['password']);
        $role = $this->m_Users->role($_REQUEST['user']);
        if ($row) {
            $_SESSION['session'] = [
                'user' => $row['user'],
                'id_person' => $row['id_person'],
                'password' => $row['password'],
                'name' => $row['name'],
                'lastname' => $row['lastname'],
                'email' => $row['email'],
                'phone' => $row['phone'],
                'avatar' => $row['avatar'],
                'role' => $role['role']
            ];
            header("Location:" . BASE_URL . "c_Users/dashboard");
        } else {
            //Si no existe error y al login con mensaje de error
            $_SESSION['errorMessage'] = 'Usuario o contraseña incorrectos';
            header("Location:" . BASE_URL);
        }
    }

    public function dashboard()
    {
        define("ROLE",  $_SESSION['session']['role']);

        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        switch (ROLE) {
            case "Director":
                $this->loadView("/director/v_Director");
                break;
            case "Monitor":
                $this->m_PersonalTraining = $this->loadModel("m_PersonalTraining");

                $datos['logs'] = $this->m_PersonalTraining->showLogTraining($_SESSION['session']['id_person']);

                $this->loadView("/monitor/v_Monitor", $datos);
                break;
            case "Corrdinador":
                $this->loadView("/manager/v_Manager");
                break;
        };
        $this->loadView("templates/footer");
    }

    public function managePersonal()
    {
        $datos["workers"] = $this->m_Users->showWorkers();

        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        $this->loadView("v_ManagePersonal", $datos);
        $this->loadView("templates/footer");
    }

    public function updateWorkers($id_worker)
    {
        $datos["worker"] = $this->m_Users->showWorker($id_worker[0]);

        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        $this->loadView("v_UpdateWorker", $datos);
        $this->loadView("templates/footer");
    }

    public function updateWorker($id_worker)
    {

        $this->m_Users->updateWorker($id_worker[0], $_POST);

        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        $this->loadView("v_UpdateHour");
        $this->loadView("templates/footer");
    }
}

?>