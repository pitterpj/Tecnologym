<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->

<?php
class c_Users extends Controller
{
    private $m_users; //Property to instantiate the model

    public function __construct()
    {
        $this->m_users = $this->loadModel("m_Users");
    }

    public function index()
    {
    }

    // Initialise session and authenticate user
    public function authenticate()
    {
        $user = $this->m_users->authenticate($_REQUEST['user'], $_REQUEST['password']);
        $role = $this->m_users->role($_REQUEST['user']);

        if ($user) {
            $_SESSION['session'] = [
                'id_person' => $user['id_person'],
                'user' => $user['user'],
                'password' => $user['password'],
                'name' => $user['name'],
                'lastname' => $user['lastname'],
                'email' => $user['email'],
                'phone' => $user['phone'],
                'avatar' => $user['avatar'],
                'role' => $role['role']
            ];
            header("Location:" . BASE_URL . "c_Users/dashboard");
        } else {
            // TODO HACER QUE MUESTRE EL ERROR EN ALGÚN LADO
            $_SESSION['errorMessage'] = 'Usuario o contraseña incorrectos';
            header("Location:" . BASE_URL);
        }
    }

    // Display the home page of each coach according to their role
    public function dashboard()
    {
        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        switch ($_SESSION['session']['role']) {
            case "Director":
                $this->loadView("/director/v_Director");
                break;
            case "Monitor":
                $this->loadView("/monitor/v_Monitor");
                break;
            case "Coordinador":
                $this->loadView("/manager/v_Manager");
                break;
        };
        $this->loadView("templates/footer");
    }

    // Showthe coachs to update them
    public function managePersonal()
    {
        $datos["workers"] = $this->m_users->showWorkers();

        $contenido = "v_ManagePersonal";
        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        $this->loadView($contenido, $datos);
        $this->loadView("templates/footer");
    }

    // Show worker to update
    public function updateWorkers($id_worker)
    {
        $datos["worker"] = $this->m_users->showWorker($id_worker[0]);
        $datos["roles"] = $this->m_users->selectRoles();
        $datos["skills"] = $this->m_users->showSkill();

        $contenido = "v_UpdateWorker";
        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        $this->loadView($contenido, $datos);
        $this->loadView("templates/footer");
    }

    // Update worker
    public function updateWorker($id_worker)
    {
        $this->m_users->updateWorker($id_worker[0], $_POST);
        $this->managePersonal();
    }

    // TODO funcion para añadir trabajador
    public function addWorker()
    {
        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        $this->loadView("v_AddWorker");
        $this->loadView("templates/footer");
    }
} //End c_Users
?>