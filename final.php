<?php
function win(){
    global $con;
    $con->query("UPDATE `input` SET `char`='' WHERE `id`=1");
    return " You win ";
  }
  function lost(){

    global $con;

    $con->query("UPDATE `input` SET `char`='' WHERE `id`=1");

    return "You Lost your Attempt <br><br> Game over";
  }
?>