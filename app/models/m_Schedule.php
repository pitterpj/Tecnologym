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

    public function addClass(){

        $snt="INSERT INTO `class` (`avatar`, `id_class`, `id_worker`, `id_skill`, `capacity`, `day`, `hour`) VALUES (:img, NULL, :id_worker, :id_skill, :capacity, :day, :hour);";

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