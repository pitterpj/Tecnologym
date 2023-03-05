<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->


<?php
class m_Users extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // Search in db for a user and its pass
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

    // Returns the role of authenticated person
    public function role($user)
    {
        $snt = "SELECT type.role AS role FROM type INNER JOIN worker_type ON worker_type.id_type=type.id_type INNER JOIN worker ON worker_type.id_worker=worker.id_worker INNER JOIN person ON person.id_person=worker.id_person WHERE user=:user;";
        $this->consult($snt);
        $this->link(":user", $user);
        return $this->row();
    }

    // Show all workers who are not Directors
    public function showWorkers()
    {

        $snt = " SELECT * FROM person 
        INNER JOIN worker ON person.id_person=worker.id_person 
        INNER JOIN worker_type ON worker_type.id_worker=worker.id_worker
        INNER JOIN type ON type.id_type=worker_type.id_type
        WHERE role != 'Director'";
        $this->consult($snt);
        return $this->result();
    }

    // Show a coach to be updated later
    public function showWorker($id_worker)
    {
        $snt = " SELECT * FROM person 
        INNER JOIN worker ON person.id_person=worker.id_person 
        INNER JOIN worker_type ON worker_type.id_worker=worker.id_worker
        INNER JOIN type ON type.id_type=worker_type.id_type
        WHERE worker.id_worker= :id_worker";
        $this->consult($snt);
        $this->link(":id_worker", $id_worker);
        return $this->row();
    }

    // Easy, update worker
    public function updateWorker($id_worker, $datos)
    {
        $snt = "UPDATE worker SET hours = :hours WHERE id_worker = :id_worker";

        $this->consult($snt);
        $this->link(":id_worker", $id_worker);
        $this->link(":hours", $datos['updateHours']);
        $this->launch();


        $snt2 = "UPDATE person INNER JOIN worker ON person.id_person=worker.id_person SET name = :name, lastname = :lastname, email=:email, phone=:phone  WHERE worker.id_worker = :id_worker ;";

        $this->consult($snt2);
        $this->link(":id_worker", $id_worker);
        $this->link(":name", $datos['updateName']);
        $this->link(":lastname", $datos['updateLastname']);
        $this->link(":email", $datos['updateEmail']);
        $this->link(":phone", $datos['updatePhone']);
        $this->launch();


        $snt3 = "UPDATE `worker_type` SET `id_type`=:role WHERE id_worker= :id_worker";
        $this->consult($snt3);
        $this->link(":id_worker", $id_worker);
        $this->link(":role", $datos['updateRole']);
        $this->launch();
    }

    // Display all roles in the db
    public function selectRoles()
    {
        $snt = "SELECT role FROM type";
        $this->consult($snt);
        return $this->result();
    }
} //End m_Users
?>