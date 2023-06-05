<?php
// <!-- Pedro.J (Pitter) -->
// <!-- https://github.com/pitterpj -->
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
        $snt = "SELECT * FROM person 
        INNER JOIN worker ON person.id_person=worker.id_person 
        INNER JOIN worker_type ON worker_type.id_worker=worker.id_worker
        INNER JOIN type ON type.id_type=worker_type.id_type
        WHERE worker.id_worker= :id_worker";
        $this->consult($snt);
        $this->link(":id_worker", $id_worker);
        return $this->row();
    }

    // Easy, update worker
    public function updateWorker($id_worker)
    {
        $avatar = isset($_FILES['addImg']['name']) ? $_FILES['addImg']['name'] : "";
        $date = new DateTime();
        $nameAvatar = ($avatar != "") ? $date->getTimestamp() . "_" . $_FILES['addImg']['name'] : "";

        $tmp_avatar = $_FILES['addImg']['tmp_name'];

        if ($tmp_avatar != "") {
            move_uploaded_file($tmp_avatar, IMG_URL . $nameAvatar);

            $sntToDelete = "SELECT avatar FROM person INNER JOIN worker ON worker.id_person=person.id_person WHERE worker.id_worker = :id_worker";
            $this->consult($sntToDelete);
            $this->link(":id_worker", $id_worker);
            $avatarWorker = $this->row();


            if (isset($avatarWorker['avatar']) && $avatarWorker['avatar'] != "") {
                if (file_exists(IMG_URL . $avatarWorker['avatar'])) {
                    //return BASE_URL . IMG_URL . $avatarWorker['avatar'];
                    unlink(IMG_URL . $avatarWorker['avatar']);
                }
            }
        }

        if ($avatar != "") {
            $sntImg = "UPDATE `person` INNER JOIN worker ON person.id_person=worker.id_person SET `avatar` = :avatar WHERE worker.id_worker = :id_worker;";
            $this->consult($sntImg);
            $this->link(":id_worker", $id_worker);
            $this->upImg(":avatar", $_FILES['addImg']);
            $this->launch();
        }

        if(!isset($_POST['updateHours'])){
    
            $snt2 = "UPDATE person INNER JOIN worker ON person.id_person=worker.id_person SET name = :name, lastname = :lastname, email=:email, phone=:phone WHERE worker.id_worker = :id_worker";
    
            $this->consult($snt2);
            $this->link(":id_worker", $id_worker);
            $this->link(":name", $_POST['updateName']);
            $this->link(":lastname", $_POST['updateLastname']);
            $this->link(":email", $_POST['updateEmail']);
            $this->link(":phone", $_POST['updatePhone']);
            $this->launch();
    
        }else{
            $snt = "UPDATE worker SET hours = :hours WHERE id_worker = :id_worker";
            $this->consult($snt);
            $this->link(":id_worker", $id_worker);
            $this->link(":hours", $_POST['updateHours']);
            $this->launch();
    
    
            $snt2 = "UPDATE person INNER JOIN worker ON person.id_person=worker.id_person SET name = :name, lastname = :lastname, email=:email, phone=:phone WHERE worker.id_worker = :id_worker";
    
            $this->consult($snt2);
            $this->link(":id_worker", $id_worker);
            $this->link(":name", $_POST['updateName']);
            $this->link(":lastname", $_POST['updateLastname']);
            $this->link(":email", $_POST['updateEmail']);
            $this->link(":phone", $_POST['updatePhone']);
            $this->launch();
    
            $snt3 = "UPDATE `worker_type` SET `id_type`=:role WHERE id_worker = :id_worker";
            $this->consult($snt3);
            $this->link(":id_worker", $id_worker);
            $this->link(":role", $_POST['updateRole']);
            $this->launch();

            $snt4="INSERT INTO `notifications` (`id`, `id_person`, `notification`) VALUES (NULL, :id_person, '¡Nueva habilidad desbloqueada!');";
            $this->consult($snt4);
            $this->link(":id_person", $id_worker);
            $this->launch();
        }









    }
    // Display all available skills 
    public function showSkill()
    {
        $snt = "SELECT name_skill, id_skill FROM skill";
        $this->consult($snt);
        return $this->result();
    }
    // Display all roles in the db
    public function selectRoles()
    {
        $snt = "SELECT role FROM type";
        $this->consult($snt);
        return $this->result();
    }

    public function addWorker()
    {
        $snt = "INSERT INTO `person` (`id_person`, `name`, `lastname`, `user`, `password`, `email`, `phone`, `avatar`) VALUES (NULL, :name, :lastName, :user, :password, :email, :phone, :avatar);";
        $this->consult($snt);
        $this->link(":name", $_POST['addName']);
        $this->link(":lastName", $_POST['addLastName']);
        $this->link(":user", $_POST['addUser']);
        $this->link(":password", $_POST['addPass']);
        $this->link(":email", $_POST['addEmail']);
        $this->link(":phone", $_POST['addPhone']);
        $this->upImg(":avatar", $_FILES['addImg']);
        $this->launch();

        $snt2 = "INSERT INTO `worker` (`id_worker`, `id_person`, `hours`) VALUES (NULL, (SELECT MAX(id_person) FROM person), :hours);";
        $this->consult($snt2);
        $this->link(":hours", $_POST['addHours']);
        $this->launch();

        $snt3 = "INSERT INTO `worker_type` (`id_worker`, `id_type`) VALUES ((SELECT MAX(id_worker) FROM worker), :id_type);";
        $this->consult($snt3);
        $this->link(":id_type", $_POST['addRole']);
        $this->launch();
    }

    public function deletePerson($id_person)
    {
        $snt = "DELETE FROM person WHERE id_person = :id_person;";
        $this->consult($snt);
        $this->link(":id_person", $id_person);
        $this->launch();
    }

    // Easy, update client
    public function updateClient($id_person)
    {
        $avatar = isset($_FILES['addImg']['name']) ? $_FILES['addImg']['name'] : "";
        $date = new DateTime();
        $nameAvatar = ($avatar != "") ? $date->getTimestamp() . "_" . $_FILES['addImg']['name'] : "";

        $tmp_avatar = $_FILES['addImg']['tmp_name'];

        if ($tmp_avatar != "") {
            move_uploaded_file($tmp_avatar, IMG_URL . $nameAvatar);

            $sntToDelete = "SELECT avatar FROM person WHERE id_person = :id_person";
            $this->consult($sntToDelete);
            $this->link(":id_person", $id_person);
            $avatarWorker = $this->row();


            if (isset($avatarWorker['avatar']) && $avatarWorker['avatar'] != "") {
                if (file_exists(IMG_URL . $avatarWorker['avatar'])) {
                    //return BASE_URL . IMG_URL . $avatarWorker['avatar'];
                    unlink(IMG_URL . $avatarWorker['avatar']);
                }
            }
        }

        if ($avatar != "") {
            $sntImg = "UPDATE `person` SET `avatar` = :avatar WHERE id_person = :id_person;";
            $this->consult($sntImg);
            $this->link(":id_person", $id_person);
            $this->upImg(":avatar", $_FILES['addImg']);
            $this->launch();
        }

        $snt2 = "UPDATE person SET name = :name, lastname = :lastname  WHERE id_person = :id_person";
        $this->consult($snt2);
        $this->link(":id_person", $id_person);
        $this->link(":name", $_POST['updateName']);
        $this->link(":lastname", $_POST['updateLastName']);
        $this->launch();

        $snt3 = "UPDATE `client` SET `BMI`= :BMI ,`weight`= :weight,`birth_date`= :date,`comments`= :comments  WHERE id_person = :id_person";
        $this->consult($snt3);
        $this->link(":id_person", $id_person);
        $this->link(":BMI", $_POST['updateBMI']);
        $this->link(":weight", $_POST['updateWeight']);
        $this->link(":date", $_POST['updateDate']);
        $this->link(":comments", $_POST['updateComments']);
        $this->launch();
    }
} //End m_Users
