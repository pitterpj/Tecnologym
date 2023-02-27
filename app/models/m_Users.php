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
        $snt = "SELECT * FROM person WHERE user=:user OR email=:user;";
        $this->consult($snt);
        $this->link(":user", $user);
        $row = $this->row();
        if ($row) {
            //Check password
            if ($password != $row['password']) {
                return null;
            }
        }
        return $row;
    }

    public function role($user)
    {
        //Return of rol of person authenticate
        $snt = "SELECT type.role AS role FROM type INNER JOIN worker_type ON worker_type.id_type=type.id_type INNER JOIN worker ON worker_type.id_worker=worker.id_worker INNER JOIN person ON person.id_person=worker.id_person WHERE user=:user;";
        $this->consult($snt);
        $this->link(":user", $user);
        $row = $this->row();
        return $row;
    }


    public function showWorkers()
    {
        //Show all workers that not be a Director
        $snt = " SELECT * FROM person 
        INNER JOIN worker ON person.id_person=worker.id_person 
        INNER JOIN worker_type ON worker_type.id_worker=worker.id_worker
        INNER JOIN type ON type.id_type=worker_type.id_type
        WHERE role != 'Director'";
        $this->consult($snt);
        $row = $this->result();
        return $row;
    }

    public function showWorker($id_worker)
    {
        //Show all workers that not be a Director
        $snt = " SELECT * FROM person 
        INNER JOIN worker ON person.id_person=worker.id_person 
        INNER JOIN worker_type ON worker_type.id_worker=worker.id_worker
        INNER JOIN type ON type.id_type=worker_type.id_type
        WHERE worker.id_worker= :id_worker";
        $this->consult($snt);
        $this->link(":id_worker", $id_worker);
        $row = $this->row();
        return $row;
    }

} //End m_Users



// SELECT type.role FROM type INNER JOIN worker_type ON worker_type.id_type=type.id_type INNER JOIN worker ON worker_type.id_worker=worker.id_worker INNER JOIN person ON person.id_person=worker.id_person WHERE user="director01";




?>