<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->

<?php
class c_Dashboard extends Controller
{

    private $c_person;

    public function __construct()
    {
        // $this->c_person= $this->loadModel("m_Person");
    }

    public function index()
    {
    }
    public function dashboard()
    {
        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        $this->loadView("v_Dashboard");
        $this->loadView("templates/footer");
    }
    public function settings()
    {
        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        $this->loadView("monitor/v_Settings");
        $this->loadView("templates/footer");
    }
    public function logOut()
    {
        // Destroe session
        unset($_SESSION['session']);
        header("Location:" . BASE_URL . "v_Landing");
    }
}


?>