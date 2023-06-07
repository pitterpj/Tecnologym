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
    public function addWorker()
    {
        $contenido = "v_AddWorker";
        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        $this->loadView($contenido);
        $this->loadView("templates/footer");
    }
    // Add clients to database
    public function addPersonalTraining()
    {
        $contenido = "v_AddPersonalTraining";
        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        $this->loadView($contenido);
        $this->loadView("templates/footer");
    }

    public function addClient()
    {
        $this->m_personalTraining->addClient();
        $this->showPersonalTraining();
    }

    // Update worker
    public function updateClients($id_person)
    {
        $datos["client"] = $this->m_personalTraining->showClient($id_person[0]);
        $contenido = "v_UpdateClient";
        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        $this->loadView($contenido, $datos);
        $this->loadView("templates/footer");
    }

}
?>