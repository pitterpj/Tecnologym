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

        $snt = "SELECT name_skill FROM skill";
        $this->consult($snt);
        return $this->result();
    }

    public function showName()
    {

        $snt = "SELECT name, worker.id_worker FROM `person` 
        INNER JOIN worker ON worker.id_worker=person.id_person
        INNER JOIN worker_type ON worker.id_worker=worker_type.id_worker
        INNER JOIN type ON worker_type.id_type=type.id_type
        WHERE type.id_type = 1 OR 2 OR 3";
        $this->consult($snt);
        return $this->result();
    }

    public function addClass()
    {

        $snt = "INSERT INTO `class` (`avatar`, `id_class`, `id_worker`, `id_skill`, `capacity`, `day`, `hour`) VALUES (:img, NULL, :id_worker, :id_skill, :capacity, :day, :hour);";

        $this->consult($snt);
        $this->link(":img", $_POST['addImg']);
        $this->link(":id_worker", $_POST['addWorker']);
        $this->link(":id_skill", $_POST['addSkill']);
        $this->link(":capacity", $_POST['addCapacity']);
        $this->link(":day", $_POST['addDay']);
        $this->link(":hour", $_POST['addHour']);
        $this->launch();
    }
}



?>