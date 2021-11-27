<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <h1>User Registration Form</h1>
    <form method="POST" class="registerForm">
        <input type="text" name="firstname" placeholder="Enter your first name"><br><br>
        <input type="text" name="lastname" placeholder="Enter your last name"><br><br>
        <input type="text" name="email" placeholder="Enter your email"><br><br>
        <input type="text" name="contact" placeholder="Enter your contact number"><br><br>
        <input type="text" name="password" placeholder="Enter your password"><br><br>
        <button name="submit" onclick="submitForm()">Submit</button><br><br>
    </form>
    <form method="POST" class="loginForm">
        <input type="text" name="loginemail" placeholder="enter email"><br><br>
        <input type="text" name="loginpassword" placeholder="enter password"><br><br>
        <button name="subloginbtn" onclick="loggedIn()">Login</button><br><br>
        <tr>
            <td colspan="2"><input type="checkbox" name="remember" value="1">Remember me</td>
        </tr>
    </form>
    <?php

    $servername = "localhost";
    $username = "root";
    $pass = "";
    $dbname = "userPage";
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    if (isset($_POST['submit'])) {

        try {
            $conn = new PDO("mysql:host=localhost;dbname=userPage", $username, $pass);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        $sqlQuery = "insert into student_info(first_name,last_name,email,contact,password) values('$first_name', '$last_name', '$email', '$contact','$password')";
        $sql = $conn->query($sqlQuery);
        if ($sql) {
            echo 'Successfully Registered';
        } else {
            echo 'Failed';
        }
    }
    if (isset($_POST['subloginbtn'])) {

        $loginemail = $_POST['loginemail'];
        $loginpassword = $_POST['loginpassword'];
        $_SESSION["loginemail"] = $loginemail;
        $_SESSION["loginpassword"] = $loginpassword;

        if (isset($_POST['remember'])) {
            setcookie('loginemail', $loginemail, time() + 60 * 60 * 7);
            setcookie('loginpassword', $loginpassword, time() + 60 * 60 * 7);
            if (isset($_COOKIE['loginemail']) and isset($_COOKIE['loginpassword'])) {
                $loginemail = $_COOKIE['loginemail'];
                $loginpassword = $_COOKIE['loginpassword'];
                try {
                    $conn = new PDO("mysql:host=localhost;dbname=userPage", $username, $pass);
                    $sql = $conn->query("SELECT * FROM student_info WHERE email='$loginemail' and password =$loginpassword");
                    echo "conetcted";
                    $record = $sql->fetch(PDO::FETCH_NUM);
                    for ($i = 1; $i < 6; $i++) {
                        echo "<br>" . $record[$i] . "  ";
                    }
                    echo "<br>for Edit in profile <br> click here <a
                  href='edit.php'> edit</a>";
                } catch (PDOException $e) {
                    echo "Connection failed: " . $e->getMessage();
                }
            }
        } else {

            try {
                $conn = new PDO("mysql:host=localhost;dbname=userPage", $username, $pass);
                $sql = $conn->query("SELECT * FROM student_info WHERE email='$loginemail' and password =$loginpassword");

                $record = $sql->fetch(PDO::FETCH_NUM);
                for ($i = 1; $i < 6; $i++) {
                    echo "<br>" . $record[$i] . "  ";
                }
                echo "<br>for Edit in profile <br> click here <a
                  href='edit.php'> edit</a>";
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
    }
