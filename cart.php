<?php
class Cart
{
    private $conn;
    private $table1='cart_data';
    private $table2='cart';
    public $cart_name;
    public $cart_id;
    public $product_id;
    public function __construct($db)
    {
        $this->conn = $db;
    }
    public function create_cart()
    {
        $query = "INSERT INTO `$this->table1`(`cart_name`) VALUES ('$this->cart_name')";

        $stmt = $this->conn->prepare($query);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function delete_cart()
    {
        $query = "DELETE FROM `$this->table1` WHERE cart_id='$this->cart_id'";

        $stmt = $this->conn->prepare($query);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function addProductInCart()
    {
        $query = "INSERT INTO `$this->table2`(`cart_id`, `product_id`) VALUES ('$this->cart_id','$this->product_id')";

        $stmt = $this->conn->prepare($query);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function removeProductfromCart()
    {
        $query = "DELETE FROM `$this->table2` WHERE product_id='$this->product_id'";

        $stmt = $this->conn->prepare($query);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function showCartname()
    {

        $query = "SELECT cart_name FROM `cart_data` WHERE cart_id=$this->cart_id";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();
        return $stmt;
    }
    public function showProduct()
    {

        $query = "SELECT name FROM `product` WHERE product_id in (SELECT product_id FROM cart WHERE cart_id=$this->cart_id)";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();
        return $stmt;
    }
}
