<?php
class products
{

    private $conn;
    private $table = 'product';
    public $name;
    public $description;
    public $price;
    public $discount;
    public $cat_id;
    public $product_id;

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
    public function add()
    {
        $query = "INSERT INTO `$this->table`(`name`, `description`, `price`, `discount`, `cat_id`) VALUES ('$this->name','$this->description','$this->price','$this->discount','$this->cat_id')";

        $stmt = $this->conn->prepare($query);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function update()
    {
        $query = "UPDATE `$this->table` SET `name`='$this->name',`description`='$this->description',`price`='$this->price',`discount`='$this->discount',`cat_id`='$this->cat_id' WHERE `product_id`='$this->product_id'";

        $stmt = $this->conn->prepare($query);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function delete()
    {
        $query = "DELETE FROM `$this->table` WHERE product_id='$this->product_id'";

        $stmt = $this->conn->prepare($query);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
