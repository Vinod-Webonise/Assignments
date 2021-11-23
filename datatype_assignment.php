<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculaotr</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="year" placeholder="enter year">&nbsp;&nbsp;&nbsp;
        <input type="text" name="month" placeholder="enter month">&nbsp;&nbsp;&nbsp;
        <input type="text" name="day" placeholder="enter day">&nbsp;&nbsp;&nbsp;
        <button name="submit">Submit</button>
    </form>
    <?php
    if (isset($_POST["submit"])) {
        $input_year = $_POST["year"];
        $input_month = $_POST["month"];
        $day = $_POST["day"];
        $curent_day = date('d');
        $curent_month = date('F');
        $curent_year = date('Y');
        if ($day == "" || $input_month == "" || $input_year == "") {
            echo "<br>Please fill all the fields";
        } else if (is_numeric($input_year)==false){

            echo "<br>Year should in digit only";
        }
        else if ($input_year > $curent_year) {
            echo "<br>Year should be less than current year";
        } 
        else if (strlen($input_year) != 4) {
            echo "<br>enter 4 digits year";
        } else if (is_numeric($input_month) == true) {
            echo "Enter month in only word";
        } else if ($day > 31 || $day == 0 || is_string($day) == false) {
            echo "<br>Day should be in between than 1 and 31";
        } else {
            $months = array("january", "february", "march", "april", "may", "june", "july", "august", "september", "october", "november", "december");
            $count = 0;
            for ($i = 0; $i < count($months); $i++) {
                if (strcasecmp($input_month, $months[$i]) != 0) {
                    $count++;
                }
            }
            if ($count == count($months)) {
                die("<br>Please Enter the Correct Month");
            }
            $month = 0;
            for ($i = 0; $i < count($months); $i++) {
                if (strcasecmp($input_month, $months[$i]) == 0) {
                    $month = $i + 1;
                }
                if (strcasecmp($curent_month, $months[$i]) == 0) {
                    $C_month = $i + 1;
                }
            }
            $yeardiff = $curent_year - $input_year;
            echo "<br>year = " . $yeardiff;

            $monthdiff = 0;
            if ($C_month < $month) {
                $monthdiff = $month - $C_month;
            } else {
                $monthdiff = $C_month - $month;
            }
            echo "<br>month is = " . $monthdiff;

            $daydiff = 0;
            if ($curent_day < $day) {
                $daydiff = $day - $curent_day;
            } else {
                $daydiff = $curent_day - $day;
            }
            echo "<br>days = " . $daydiff;
        }
    }
    ?>
</body>

</html>