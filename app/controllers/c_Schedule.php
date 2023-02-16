<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->

<?php
class c_Schedule extends Controller
{

    private $c_schedule;

    public function __construct()
    {
        // $this->c_person= $this->loadModel("m_Person");
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
}


?>