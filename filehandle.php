<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handling</title>

</head>

<body>
    <form method="POST">
        <input type="text" name="filename" id="inputfilename" placeholder="Enter File Name"> <br><br>
        <h2>Message</h2> <textarea name="message"> </textarea><br><br>
        <h2>Select Task:</h2>
        <select name="task" id="box">
            <option value="read">Read</option>
            <option value="write">Write</option>
            <option value="append">Append</option>
        </select>
        &nbsp; &nbsp; &nbsp;<button name="submit">Done</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {

        $file_Name = $_POST["filename"];
        $message = $_POST["message"];
        $task = $_POST['task'];
        echo "";
        if ($task == "write") {
            if (file_exists($file_Name)) {
                $file = fopen($fileName, "w");

                fwrite($file, "$message");
            } else {

                $file = fopen($file_Name, "w+");
                fwrite($file, $message);
            }
        }
        if ($task == "read") {
            if (file_exists($file_Name)) {
                echo readfile($fileName);
            } else {
                echo "File Doesn't exists";
            }
        }
        if ($task == "append") {
            if (file_exists($file_Name)) {
                $file = fopen($file_Name, "a+");
                fwrite($file, $message);
            } else {

                echo "File Doesn't exists";
            }
        }
        if ($task == "") {
            
            echo "select valid permission";
        }
    }
    ?>
</body>

</html>