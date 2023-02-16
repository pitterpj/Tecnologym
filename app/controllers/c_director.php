<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->

<?php
class c_Director extends Controller
{

    private $c_director;

    public function __construct()
    {
        $this->c_director = $this->loadModel("m_Director");
    }


    public function index()
    {
        $this->loadView("v_Director");
    }
}


?>