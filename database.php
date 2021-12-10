<?php
 class databse{

    private $host = 'localhost';
    private $db_name = 'shopingcart';
    private $username = 'root';
    private $passward = "";
    private $conn;
    private static $obj=null;

    public static function getobj(){
        self::$obj = new Static();
        return self::$obj; 
    }
    public function connect () {
        $this->conn = null;
        try {

            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname='.$this->db_name,$this->username,$this->passward);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e) {

            echo 'Connection Error: '. $e->getMessage();
        }
        return $this->conn;
    }
     
 }