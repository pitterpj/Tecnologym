<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->

<?php
class c_Users extends Controller
{
    private $m_users; //Property to instantiate the model
    private $m_schedule; //Property to instantiate the model
    private $m_logTraining; //Property to instantiate the model

    public function __construct()
    {
        $this->m_users = $this->loadModel("m_Users");
        $this->m_schedule = $this->loadModel("m_Schedule");
        $this->m_logTraining = $this->loadModel("m_PersonalTraining");
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

            header("Location:" . BASE_URL . "c_Home/logOutLanding");
        }
    }

    // Display the home page of each coach according to their role
    public function dashboard($calendar = "today")
    {
        $datos["personalScheduleToday"] = $this->m_schedule->showPersonalSchedule($_SESSION['session']['id_person'], $calendar);

        //$avatar['avatar'] = $_SESSION['session']['avatar'];

        $datos['logTraining'] = $this->m_logTraining->countLogTraining($_SESSION['session']['id_person']);

        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");

        switch ($_SESSION['session']['role']) {
            case "Director":
                $this->loadView("/director/v_Director", $datos);
                break;
            case "Monitor":
                $this->loadView("/monitor/v_Monitor", $datos);
                break;
            case "Coordinador":
                $this->loadView("/manager/v_Manager", $datos);
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
        $this->m_users->updateWorker($id_worker[0]);
        //var_dump($datos);
        $this->managePersonal();
    }

    // TODO funcion para añadir trabajador
    public function addWorker()
    {
        //var_dump($_POST);
        //var_dump($_FILES);
        $this->m_users->addWorker();
        // //var_dump($datos);
        $this->managePersonal();
    }

    public function deletePerson($id_person)
    {
        $this->m_users->deletePerson($id_person[0]);
        $this->managePersonal();
    }

    // Update worker
    public function updateClient($id_person)
    {
        $this->m_users->updateClient($id_person[0]);
        $this->managePersonal();
    }

    public function settings($id_worker)
    {
       // $datos["person"] = ['pepe','luis'];
        $datos["worker"] = $this->m_users->showWorker($id_worker[0]);
        //var_dump($datos["person"]);

        $contenido = "v_Settings";
        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        $this->loadView($contenido,$datos);
        $this->loadView("templates/footer");
    }

} //End c_Users
?>