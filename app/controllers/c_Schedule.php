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
        $contenido = "manager/v_createSchedule";
        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        $this->loadView($contenido);
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

        $contenido = "v_Schedule";
        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        $this->loadView($contenido,$datos);
        $this->loadView("templates/footer");
    }
}


?>