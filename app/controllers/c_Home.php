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
        $this->loadView("v_landing");
    }

    // Destroy session
    public function logOut()
    {
        unset($_SESSION['session']);
        header("Location:" . BASE_URL);
    }
}
?>