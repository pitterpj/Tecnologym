<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->


<?php
class m_PersonalTraining extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // Show all personal Trainings
    // TODO hacer que solo muestre el del entrenador que está logeado
    public function showPersonalTraining()
    {
        $snt = "SELECT * FROM person INNER JOIN client ON client.id_person = person.id_person;";
        $this->consult($snt);
        return $this->result();
    }
} //End m_PersonalTraining
?>