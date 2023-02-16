<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->



<?php
class c_Users extends Controller{

    public function __construct()
    {
        $this->loadModel("m_Users");
    }

    public function index()
    {
        $this->loadView("v_login");
    }


}

?>
