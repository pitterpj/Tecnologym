<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->

<?php
class c_Home extends Controller
{
    public function __construct()
    {
    }
    public function index()
    {
        $this->loadView("v_Index");
    }
}
