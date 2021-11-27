<?php session_start();
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
    <form method="POST" class="loginForm">
        <button name="edit" onclick="edit()">Edit Profile</button><br><br>
        <input type="text" name="firstname" placeholder="enter your new  first name "><br><br>
        <input type="text" name="lastname" placeholder="enter your new last name "><br><br>
        <input type="text" name="password" placeholder="enter your new password"><br><br>
        <input type="text" name="newmail" placeholder="enter new email"><br><br>
        <input type="text" name="newcontact" placeholder="enter new contact no"><br><br>
    </form>
</body>

<?php

if (isset($_POST['edit'])) {
    $loginemail = $_SESSION['loginemail'];
    $password = $_SESSION['loginpassword'];
    $newemail = $_POST['newmail'];
    $newcontact = $_POST['newcontact'];
    $newpass = $_POST['newpass'];
    $first_name = $_POST['firstname'];
    $username = "root";
    $pass = "";

    try {
        $conn = new PDO("mysql:host=localhost;dbname=userPage", $username, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE student_info SET first_name='$first_name',email='$newemail',contact='$newcontact',password='$newpass' WHERE email='$loginemail' and password='$password'";

        $stmt = $conn->prepare($sql);

        $stmt->execute();

        echo $stmt->rowCount() . "Records UPDATED successfully";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}
