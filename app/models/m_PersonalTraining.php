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
    public function showPersonalTraining()
    {
        $snt = "SELECT * FROM person INNER JOIN client ON client.id_person = person.id_person;";
        $this->consult($snt);
        return $this->result();
    }

    public function addClient()
    {
        $snt = "INSERT INTO `person` (`id_person`, `name`, `lastname`, `user`, `password`, `email`, `phone`, `avatar`) VALUES (NULL, :addName, :addLastName, NULL, NULL, NULL, NULL, :avatar);";
        $this->consult($snt);
        $this->link(":addName", $_POST['addName']);
        $this->link(":addLastName", $_POST['addLastName']);
        $this->upImg(":avatar", $_FILES['addImg']);
        $this->launch();

        $snt2 = "INSERT INTO `client` (`id_client`, `id_person`, `BMI`, `weight`, `birth_date`,`comments`) VALUES (NULL, (SELECT MAX(id_person) FROM person), :BMI, :weight, :date, :comments);";
        $this->consult($snt2);
        $this->link(":BMI", $_POST['addBMI']);
        $this->link(":weight", $_POST['addWeight']);
        $this->link(":date", $_POST['addDate']);
        $this->link(":comments", $_POST['addComments']);
        $this->launch();
    }

    public function showClient($id_person)
    {
        $snt = "SELECT * FROM person INNER JOIN client ON client.id_person = person.id_person WHERE person.id_person = :id_person";
        $this->consult($snt);
        $this->link(":id_person", $id_person);
        return $this->result();
    }
} //End m_PersonalTraining
?>