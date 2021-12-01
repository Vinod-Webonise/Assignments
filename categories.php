<?php
 class categories {
     private $conn;
     private $table='categories';

     public $category_name;
     public $description;
     public $tax;

     public function __construct($db){
         $this->conn = $db;
     }
     
     public function read(){
         $query = "SELECT * FROM `categories`";
    
    
         $stmt = $this->conn->prepare($query);

         $stmt->execute();
         return $stmt;
    
        }
     public function addCategory(){
         $query = "INSERT INTO `categories`(`name`, `description`, `tax`) VALUES ('$this->category_name','$this->description','$this->tax')";
    
         $stmt = $this->conn->prepare($query);

         if ($stmt->execute()){
             return true;
         }
        
         else {
             return false;
         }
    
        }

     public function updatecategory(){
        $query="UPDATE `categories` SET `description`='$this->description',`tax`='$this->tax' WHERE `name`='$this->category_name'";

        $stmt = $this->conn->prepare($query);

        if ($stmt->execute()){
            return true;
        }
       
        else {
            return false;
        }
   
       }
       public function delete(){
        $query="DELETE FROM `categories` WHERE name='$this->category_name'";

        $stmt = $this->conn->prepare($query);
        
        if ($stmt->execute()){
            return true;
        }
       
        else {
            return false;
        }
   
       }
    

 }