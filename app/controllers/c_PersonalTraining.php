<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->

<?php
class c_PersonalTraining extends Controller
{
    private $m_personalTraining;

    public function __construct()
    {
        $this->m_personalTraining = $this->loadModel("m_PersonalTraining");
    }

    public function index()
    {
    }

    // Shows the personal workouts of each coach
    public function showPersonalTraining()
    {
        $datos['clients'] = $this->m_personalTraining->showPersonalTraining();

        $contenido = "v_PersonalTraining";
        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        $this->loadView($contenido, $datos);
        $this->loadView("templates/footer");
    }

    // Add personal coachs to database
    public function addPersonalTraining()
    {

        // $datos['clients'] = $this->m_PersonalTraining->showPersonalTraining();

        $contenido = "v_AddPersonalTraining";
        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        $this->loadView($contenido);
        $this->loadView("templates/footer");
    }
}
?>