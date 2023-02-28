<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->

<?php

class c_PersonalTraining extends Controller
{
    private $m_PersonalTraining;

    public function __construct()
    {
        $this->m_PersonalTraining = $this->loadModel("m_PersonalTraining");
    }

    public function index()
    {
    }

    public function personalTraining()
    {
        $contenido = "v_PersonalTraining";
        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        $this->loadView($contenido);
        $this->loadView("templates/footer");
    }

    public function showPersonalTraining()
    {
        $datos['clients'] = $this->m_PersonalTraining->showPersonalTraining();
        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        $this->loadView("v_PersonalTraining",$datos);
        $this->loadView("templates/footer");
    }
}


?>