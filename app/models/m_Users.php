<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->


<?php

class m_Users extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function authenticate($user, $password)
    {
        $snt = "SELECT * FROM person WHERE user=:user;";
        $this->consult($snt);
        $this->link(":user", $user);
        $row = $this->row();
        var_dump($row);
        if ($row) {
            //Check password
            if ($password != $row['password']) {
                echo "paaaaatata";
                return null;
            }
            var_dump($row);
        }
        return $row;
    }
} //End m_Users




?>