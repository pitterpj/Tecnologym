<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->

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
    public function schedule()
    {
        $contenido = "monitor/v_Schedule";
        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        $this->loadView($contenido);
        $this->loadView("templates/footer");
    }
    public function createSchedule()
    {
        $datos['datas'] = $this->m_schedule->showSkill();
        $datos['workers'] = $this->m_schedule->showName();
        $datos["classes"] = $this->m_schedule->showSchedule();

        //   var_dump($datos['datas']);
        $contenido = "v_createSchedule";
        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        $this->loadView($contenido, $datos);
        $this->loadView("templates/footer");
    }
    public function managePersonal()
    {
        $contenido = "director/v_managePersonal";
        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        $this->loadView($contenido);
        $this->loadView("templates/footer");
    }

    public function personalSchedule()
    {

        $datos["classes"] = $this->m_schedule->showSchedule();

        //var_dump($datos["classes"]);
        $contenido = "v_Schedule";
        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        $this->loadView($contenido, $datos);
        $this->loadView("templates/footer");
    }

    // public function addClass()
    // {
    //     $this->m_schedule->addClass();

    //     $this->personalSchedule();
    // }

    public function addClass()
    {
        $this->m_schedule->addClass();
    }

    public function addSkill()
    {
        //redirect to editar personal para añadir la skill nueva
        $datos["skills"] = $this->m_schedule->addSkill();

        //var_dump($datos["skills"]);

        $this->createSchedule();
    }
}


?>