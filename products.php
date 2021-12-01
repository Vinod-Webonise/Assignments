<?php
 class products {
     private $conn;
     private $table='categories';
     public $name;
     public $description;
     public $price;
     public $discount;
     public $category;

     public function __construct($db){
         $this->conn = $db;
     }
     
     public function read(){
         $query = "SELECT * FROM `product`";
    
    
         $stmt = $this->conn->prepare($query);

         $stmt->execute();
         return $stmt;
    
        }
     public function add(){
         $query = "INSERT INTO `product`(`name`, `description`, `price`, `discount`, `category`) VALUES ('$this->name','$this->description','$this->price','$this->discount','$this->category')";
    
         $stmt = $this->conn->prepare($query);

         if ($stmt->execute()){
             return true;
         }
        
         else {
             return false;
         }
    
        }

     public function update(){
        $query="UPDATE `product` SET `description`='$this->description',`price`='$this->price',`discount`='$this->discount',`category`='$this->category' WHERE `name`='$this->name'";

        $stmt = $this->conn->prepare($query);

        if ($stmt->execute()){
            return true;
        }
       
        else {
            return false;
        }
   
       }
       public function delete(){
        $query="DELETE FROM `product` WHERE name='$this->name'";

        $stmt = $this->conn->prepare($query);
        
        if ($stmt->execute()){
            return true;
        }
       
        else {
            return false;
        }
   
       }
    

 }