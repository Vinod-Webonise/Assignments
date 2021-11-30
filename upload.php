<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>

<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="fileName" placeholder="Enter File name"><br><br>
        <input type="file" name="selectFile"><br><br>
        <button name="upload">Upload</button><br><br>
    </form>
    <?php if (isset($_POST['upload'])) {
        $selectFile = $_FILES['selectFile'];
        $inputName = $_POST['fileName'];
        if ($selectFile && $inputName) {
            $file_name = $selectFile['name'];
            $file_size = $selectFile['size'];
            $file = $selectFile['tmp_name'];
            $file_type = $selectFile['type'];
            if ($file_type != "image/png" && $file_type != "image/jpeg") {
                echo "Only png and jpeg type allowed";
            } else {

                if ($file_size <= 2000000) {
                    if (move_uploaded_file($file, "uploads/" . $file_name)) {
                        echo "Successfully Uploaded";
                    } else {
                        echo "Failed to  Upload";
                    }
                } else {
                    echo "File Size to large";
                }
            }
        } else {
            echo "Enter File name and select the file";
        }
    }  ?>
</body>

</html>