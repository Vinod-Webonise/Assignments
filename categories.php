<?php
class categories
{
    private $conn;
    private $table = 'categories';
    public $cat_id;
    public $category_name;
    public $description;
    public $tax;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function read()
    {
        $query = "SELECT * FROM `$this->table`";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();
        return $stmt;
    }
    public function addCategory()
    {
        $query = "INSERT INTO `$this->table`(`name`, `description`, `tax`) VALUES ('$this->category_name','$this->description','$this->tax')";

        $stmt = $this->conn->prepare($query);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function updatecategory()
    {
        $query = "UPDATE `$this->table` SET `name`='$this->category_name',`description`='$this->description',`tax`='$this->tax' WHERE `cat_id`='$this->cat_id'";

        $stmt = $this->conn->prepare($query);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function delete()
    {
        $query = "DELETE FROM `$this->table` WHERE `cat_id`='$this->cat_id'";

        $stmt = $this->conn->prepare($query);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
