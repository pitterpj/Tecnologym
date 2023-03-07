<?php
class c_Schedule extends Controller
{

    private $m_schedule;

    public function __construct()
    {
        $this->m_schedule = $this->loadModel("m_Schedule");
    }

    public function index()
    {
    }

    //create schedules of each coach
    public function createSchedule()
    {
        $datos['skills'] = $this->m_schedule->showSkill();
        $datos['workers'] = $this->m_schedule->showName();

        // var_dump($datos['datas']);

        $contenido = "v_CreateSchedule";
        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        $this->loadView($contenido, $datos);
        $this->loadView("templates/footer");
    }

    //Display the complete calendar of all coaches
    public function completeSchedule()
    {
        $datos["classes"] = $this->m_schedule->completeSchedule();

        //var_dump($datos["classes"]);
        $contenido = "v_Schedule";
        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        $this->loadView($contenido, $datos);
        $this->loadView("templates/footer");
    }

    // Add a new class to the db
    public function addClass()
    {
        $this->m_schedule->addClass();
        $this->completeSchedule();
    }

    // Add a new skill to the db
    // TODO por redireccionar al crear una nueva skill para juntarla con el monitor
    public function addSkill()
    {
        $this->m_schedule->addSkill();

        $this->createSchedule();
    }

    // Display the personal schedule for coach
    public function showPersonalSchedule($calendar="today")
    {
        $datos["personalSchedule"] = $this->m_schedule->showPersonalSchedule($_SESSION['session']['id_person'],$calendar);

        //var_dump($datos["personalSchedule"] );
        $contenido = "v_PersonalSchedule";
        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        $this->loadView($contenido, $datos);
        $this->loadView("templates/footer");
    }

    public function showSkillsWorkers()
    {
        $datosW = $this->m_schedule->showSkill();

        echo json_encode($datosW);
    }

    public function showSkillsWorker()
    {
        $datos = $this->m_schedule->showSkillsWorker($_POST['id_person']);
        //var_dump($datos["skills"]);
        echo json_encode($datos);
        // echo json_encode($id_person);
    }

    public function prueba()
    {
        echo "hola";
    }
} //End class c_Schedule
