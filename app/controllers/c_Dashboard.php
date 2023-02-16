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
        $this->loadView("v_Dashboard");
    }
}


?>