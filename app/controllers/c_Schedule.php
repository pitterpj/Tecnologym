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
    public function showPersonalSchedule($calendar = "today")
    {
        $datos["personalSchedule"] = $this->m_schedule->showPersonalSchedule($_SESSION['session']['id_person'], $calendar);

        $contenido = "v_PersonalSchedule";
        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        $this->loadView($contenido, $datos);
        $this->loadView("templates/footer");
    }

    // Output a JSON with the workers' skills
    public function showSkillsWorkers()
    {
        $datosW = $this->m_schedule->showSkill();
        echo json_encode($datosW);
    }

    // Output a JSON with the skills of a single worker
    public function showSkillsWorker()
    {
        $datos = $this->m_schedule->showSkillsWorker($_POST['id_person']);
        echo json_encode($datos);
    }

    public function prueba()
    {
        echo "hola";
    }

    // Leads to update by loading the data of that class
    public function updateClasses($id_class)
    {
        $datos["class"] = $this->m_schedule->showClass($id_class[0]);

        $contenido = "v_UpdateClass";
        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        $this->loadView($contenido, $datos);
        $this->loadView("templates/footer");
    }

    // Update classes 
    public function updateClass($class)
    {
        $datos=$this->m_schedule->updateClass($class[0]);
        $this->showPersonalSchedule();
    }

    // Delete classes 
    public function deleteClass($id_class)
    {
        $this->m_schedule->deleteClass($id_class[0]);
        $this->showPersonalSchedule();
    }
} //End class c_Schedule
