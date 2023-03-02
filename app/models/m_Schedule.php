<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->


<?php
class m_Schedule extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function showSchedule()
    {

        $snt = "SELECT * FROM `class` 
        INNER JOIN skill ON skill.id_skill=class.id_skill
        INNER JOIN worker ON worker.id_worker=class.id_worker
        INNER JOIN person ON person.id_person=worker.id_person;";
        $this->consult($snt);
        return $this->result();
    }
}



?>