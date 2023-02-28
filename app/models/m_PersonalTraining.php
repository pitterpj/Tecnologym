<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->


<?php

class m_PersonalTraining extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function showPersonalTraining()
    {
        $snt = "SELECT * FROM person INNER JOIN client ON client.id_person = person.id_person;";
        $this->consult($snt);
        $row = $this->result();
        return $row;
    }

    public function showLogTraining($id_person)
    {
        $snt = "SELECT * FROM `log_training` WHERE id_worker=4";
        $this->consult($snt);
        //$this->link(":id_worker", $id_person);
        $row = $this->result();
        return $row;
    }
}

?>