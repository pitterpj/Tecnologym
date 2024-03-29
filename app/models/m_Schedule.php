<?php
// <!-- Pedro.J (Pitter) -->
// <!-- https://github.com/pitterpj -->

class m_Schedule extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // Display all available skills 
    public function showSkill()
    {
        $snt = "SELECT name_skill, id_skill FROM skill";
        $this->consult($snt);
        return $this->result();
    }

    // Display the schedule of all coaches
    public function completeSchedule()
    {
        $snt = "SELECT id_class, img, name, name_skill, level, capacity, day, hour FROM `class` 
        INNER JOIN skill ON skill.id_skill = class.id_skill
        INNER JOIN worker ON worker.id_worker = class.id_worker
        INNER JOIN person ON worker.id_person = person.id_person
        WHERE day >= CURRENT_DATE";
        $this->consult($snt);
        return $this->result();
    }

    // Show the all worker names
    public function showName()
    {
        $snt = "SELECT name, worker.id_worker FROM `worker` 
        INNER JOIN person ON person.id_person=worker.id_person";
        $this->consult($snt);
        return $this->result();
    }

    // Insert class in the db
    public function addClass()
    {
        $snt = "INSERT INTO `class` (`id_class`, `id_worker`, `id_skill`, `capacity`, `day`, `hour`) VALUES (NULL, :id_worker, :id_skill, :capacity, :day, :hour);";

        $this->consult($snt);
        $this->link(":id_worker", $_POST['addWorker']);
        $this->link(":id_skill", $_POST['addSkill']);
        $this->link(":capacity", $_POST['addCapacity']);
        $this->link(":day", $_POST['addDay']);
        $this->link(":hour", $_POST['addHour']);
        $this->launch();

        $snt2 = "INSERT INTO `notifications` (`id`, `id_person`, `notification`) VALUES (NULL, :id_person, '¡Nueva clase añadida a tu horario!');";
        $this->consult($snt2);
        $this->link(":id_person", $_POST['addWorker']);
        $this->launch();
    }

    // Insert skill in the db
    public function addSkill()
    {
        $snt = "INSERT INTO `skill` (`img`, `id_skill`, `name_skill`, `level`) VALUES (:img, NULL, :name_skill, :level);";

        $this->consult($snt);
        $this->upImg(":img", $_FILES['addImg']);
        $this->link(":name_skill", $_POST['addNameSkill']);
        $this->link(":level", $_POST['addLevel']);
        $this->launch();
    }

    //Show the personal schedule of one coach
    public function showPersonalSchedule($id_person, $calendar)
    {
        switch ($calendar[1]) {
            case "today":
                $snt = "SELECT DISTINCT id_class, img, name, name_skill, level, capacity, day, hour FROM `class` INNER JOIN skill ON skill.id_skill = class.id_skill INNER JOIN worker ON worker.id_worker = class.id_worker INNER JOIN person ON worker.id_person = person.id_person WHERE person.id_person = :id_person AND CURDATE() = day ORDER BY day, hour";
                $this->consult($snt);
                $this->link(":id_person", $id_person);
                return $this->result();
                break;
            case "week":
                $snt = "SELECT DISTINCT id_class, img, name, name_skill, level, capacity, day, hour FROM `class` 
                INNER JOIN skill ON skill.id_skill = class.id_skill 
                INNER JOIN worker ON worker.id_worker = class.id_worker 
                INNER JOIN person ON worker.id_person = person.id_person 
                WHERE person.id_person = :id_person
                AND day >= NOW() AND day <= date_add(NOW(), INTERVAL +7 DAY)";
                $this->consult($snt);
                $this->link(":id_person", $id_person);
                return $this->result();
                break;
            default:
                $snt = "SELECT DISTINCT id_class, img, name, name_skill, level, capacity, day, hour FROM `class` INNER JOIN skill ON skill.id_skill = class.id_skill INNER JOIN worker ON worker.id_worker = class.id_worker INNER JOIN person ON worker.id_person = person.id_person WHERE person.id_person = :id_person AND CURDATE() = day ORDER BY day, hour";
                $this->consult($snt);
                $this->link(":id_person", $id_person);
                return $this->result();
                break;
        }
    }

    // Showcase a worker's skills
    public function showSkillsWorker($id_person)
    {
        $snt = "SELECT name_skill, skill.id_skill FROM `worker_skill` 
        INNER JOIN worker ON worker.id_worker = worker_skill.id_worker
        INNER JOIN skill ON skill.id_skill = worker_skill.id_skill
        INNER JOIN person ON person.id_person = worker.id_person
        WHERE worker.id_worker = :id_person;";

        $this->consult($snt);
        $this->link(":id_person", $id_person);
        return $this->result();
    }

    // Display the data of a class
    public function showClass($id_class)
    {
        $snt = "SELECT * FROM `class` WHERE id_class=:id_class";

        $this->consult($snt);
        $this->link(":id_class", $id_class);
        return $this->result();
    }

    // Update class
    public function updateClass($id_class)
    {

        $snt2 = "INSERT INTO `notifications` (`id`, `id_person`, `notification`) VALUES (NULL, :id_person, '¡Existen cambios en tu horario!');";

        $this->consult($snt2);
        $this->link(":id_person", $_POST['id_worker']);
        $this->launch();


        $snt = "UPDATE `class` SET `capacity` = :capacity, `day` = :day, `hour` = :hour WHERE `class`.`id_class` = :id_class;";

        $this->consult($snt);
        $this->link(":capacity", $_POST["addCapacity"]);
        $this->link(":day", $_POST["addDay"]);
        $this->link(":hour", $_POST["addHour"]);
        $this->link(":id_class", $id_class);
        return $this->result();
    }

    // Delete class
    public function deleteClass($id_class)
    {
        $snt = "DELETE FROM class WHERE `class`.`id_class` = :id_class";

        $this->consult($snt);
        $this->link(":id_class", $id_class);
        return $this->result();
    }
} //En m_Schedule
