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
    public function countLogTraining($id_person)
    {
        $snt = "SELECT COUNT(*) as log FROM `log_training` 
        INNER JOIN worker ON worker.id_worker = log_training.id_worker
        INNER JOIN person ON person.id_person = worker.id_person
        WHERE worker.id_person = :id_person";
        $this->consult($snt);
        $this->link(":id_person", $id_person);
        return $this->row();
    }
} //End m_PersonalTraining
?>