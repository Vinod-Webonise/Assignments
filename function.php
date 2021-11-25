<?php
  include 'final.php';
$data= array("was","wheare","dog","cat","bat","animal","car","bike","laptop","mobile","plane","home","exam");
$con;
function checkCharacter($InputChar){
       global $data,$con;
      
       $username="root";

       $password="";

       try{
        $con = new PDO("mysql:host=localhost;dbname=hangamn","$username","$password");

        $inputData = $con->query("SELECT * FROM `input` where id =1");

        $record = $inputData->fetch(PDO::FETCH_NUM);

        $value=$record[1].$InputChar;

        $update = $con->query("UPDATE `input` SET `char`='$value' WHERE `id`=1");

        $inputData = $con->query("SELECT * FROM `input` where id =1");

        $record = $inputData->fetch(PDO::FETCH_NUM);

        $attemp=strlen($record[1]);

        echo "Attempts are Remaining ".(8-$attemp);

       if($record){

         for($i=0;$i<count($data);$i++){
           if($record[1]==$data[$i]){
             
              echo '<br><br>',win();
              
              echo "<br><br><button><a href='hangman.php'>Restart</a></button>";
           }
         }
       }
       else{
         die ('Game Over');
       }
      }
      catch(PDOException $e){

        echo lost();
        echo "<button><a href='hangman.php'>Restart</a></button>";
      }
}
?>