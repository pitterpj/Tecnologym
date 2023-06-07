<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->

<?php
class c_Users extends Controller
{
    private $m_users; //Property to instantiate the model
    private $m_schedule; //Property to instantiate the model

    public function __construct()
    {
        $this->m_users = $this->loadModel("m_Users");
        $this->m_schedule = $this->loadModel("m_Schedule");
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
            $_SESSION['errorMessage'] = 'Usuario o contraseña incorrectos';
            header("Location:" . BASE_URL . "c_Home/logOutLanding");
        }
    }

    // Display the home page of each coach according to their role
    public function dashboard($calendar = "today")
    {
        $datos["personalScheduleToday"] = $this->m_schedule->showPersonalSchedule($_SESSION['session']['id_person'], $calendar);
        $datos['notifications'] = $this->m_users->notifications($_SESSION['session']['id_person']);

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
        $this->dashboard();
    }

    // New worker
    public function addWorker()
    {
        $this->m_users->addWorker();
        $this->managePersonal();
    }

    // Delete worker
    public function deletePerson($id_person)
    {
        $this->m_users->deletePerson($id_person[0]);
        $this->dashboard();
    }

    // Delete notifications
    public function deleteNotification($id_not)
    {
        $this->m_users->deleteNotification($id_not[0]);
        $this->dashboard();
    }

    // Update Client
    public function updateClient($id_person)
    {
        $this->m_users->updateClient($id_person[0]);
        $this->dashboard();
    }

    // Functions to settings
    public function settings($id_worker)
    {
        $datos["worker"] = $this->m_users->showWorker($id_worker[0]);

        $contenido = "v_Settings";
        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        $this->loadView($contenido, $datos);
        $this->loadView("templates/footer");
    }
} //End c_Users
?>