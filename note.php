<?php
class Note
{
    private $conn;
    public $topic;
    public $description;
    public $user_id;
    public $priority;
    public $word;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function readByWord()
    {
        $query = "SELECT * FROM `note_data` WHERE description like '%$this->word%' and user_id=$this->user_id";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();
        return $stmt;
    }

    public function readall()
    {
        $query = "SELECT * FROM `note_data` WHERE user_id=$this->user_id";
       
        $stmt = $this->conn->prepare($query);

        $stmt->execute();
        return $stmt;
    }
    public function add()
    {
        $date = date("d-m-y");

        $query = "INSERT INTO `note_data`(`topic`, `description`, `insert_date`, `update_date`, `user_id`, `priority`) VALUES ('$this->topic','$this->description','$date','','$this->user_id','$this->priority')";

        $stmt = $this->conn->prepare($query);

        if ($stmt->execute()) {

            return true;
        } else {

            return false;
        }
    }

    public function update()
    {
        $date = date("d-m-y");

        $query = "UPDATE `note_data` SET `topic`='$this->topic',`description`='$this->description',`update_date`='$date'  WHERE `user_id`='$this->user_id' and `priority`='$this->priority'";

        $stmt = $this->conn->prepare($query);

        if ($stmt->execute()) {

            return true;
        } else {

            return false;
        }
    }
    public function delete()
    {
        $query = "DELETE FROM `note_data` WHERE user_id=$this->user_id and priority=$this->priority";

        $stmt = $this->conn->prepare($query);

        if ($stmt->execute()) {

            return true;
        } else {

            return false;
        }
    }
}
