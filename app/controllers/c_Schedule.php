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
        $this->loadView("v_Schedule");
    }
}


?>