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

        $snt = "SELECT img, name, name_skill, capacity, day, hour FROM class 
        INNER JOIN worker ON worker.id_worker =class.id_worker
        INNER JOIN person ON worker.id_person = person.id_person
        INNER JOIN skill ON skill.id_skill = class.id_skill";
        $this->consult($snt);
        return $this->result();
    }

    public function showSkillWorker()
    {
        $snt = "SELECT name_skill FROM skill 
        INNER JOIN worker_skill ON skill.id_skill=worker_skill.id_skill
        INNER JOIN worker ON worker.id_worker=worker_skill.id_worker
        WHERE worker.id_worker= 1";
        $this->consult($snt);
        return $this->result();
    }

    public function showSkill()
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

        $snt2 = "INSERT INTO `worker_skill` (`id_worker`, `id_skill`) VALUES (:id_worker, :id_skill);";
        $this->consult($snt2);
        $this->link(":id_worker", $_POST['addWorker']);
        $this->link(":id_skill", $_POST['addSkill']);
        
        $this->launch();

        $snt = "INSERT INTO `class` (`id_class`, `id_worker`, `id_skill`, `capacity`, `day`, `hour`) VALUES (NULL, :id_worker, :id_skill, :capacity, :day, :hour);";

        $this->consult($snt);
        // $this->link(":id_worker", $_POST['addWorker']);
        // $this->link(":id_skill", $_POST['addSkill']);
        $this->link(":capacity", $_POST['addCapacity']);
        $this->link(":day", $_POST['addDay']);
        $this->link(":hour", $_POST['addHour']);
        $this->launch();
    }

    public function addSkill()
    {
        // var_dump($_POST);
        //var_dump($_FILES);

        $snt = "INSERT INTO `skill` (`img`, `id_skill`, `name_skill`, `level`) VALUES (:img, NULL, :name_skill, :level);";

        $this->consult($snt);
        $this->upImg(":img", $_FILES['addImg']);
        $this->link(":name_skill", $_POST['addNameSkill']);
        $this->link(":level", $_POST['addLevel']);
        $this->launch();
    }
}



?>