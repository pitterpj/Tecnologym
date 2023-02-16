<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->

<?php

class c_PersonalTraining extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
    }

    public function personalTraining()
    {
        $contenido = "monitor/v_PersonalTraining";
        $this->loadView("templates/header");
        $this->loadView("templates/sidebar");
        $this->loadView($contenido);
        $this->loadView("templates/footer");
    }
}


?>