SELECT name_skill FROM class
        INNER JOIN skill ON skill.id_skill=class.id_skill
        INNER JOIN worker ON worker.id_worker=class.id_worker
        INNER JOIN person ON person.id_person=worker.id_person;
----------------------

        public function showSchedule()
    {

        $snt = "SELECT name_skill FROM skill";
        $this->consult($snt);
        return $this->result();
    }
--------------------

    SELECT class.avatar, name,
(
    SELECT name_skill FROM skill 
    INNER JOIN worker_skill ON skill.id_skill=worker_skill.id_skill
    INNER JOIN worker ON worker.id_worker=worker_skill.id_worker
    WHERE worker.id_worker= 1


), capacity, day, hour FROM class 

        INNER JOIN worker ON worker.id_worker =class.id_worker
        INNER JOIN person ON worker.id_person= person.id_person
        INNER JOIN skill ON skill.id_skill=class.id_skill

        --------------------------------------