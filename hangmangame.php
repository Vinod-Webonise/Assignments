
<?php

function wordMatch($char)
{
    global $words;
    for ($i = 0; $i < count($words); $i++) {
        if (strcasecmp($char, $words[$i]) == 0) {
            echo "you winn";
            die();
        } else {
          take_inputs();
        }
    }
}
function isAvailable($input_cahr)
{
    global $words;
    $char = "";
    $lives = 6;
    $index = 0;
    $flag = true;
    for ($i = 0; $i<count($words); $i++) {
        echo $words[$i];
        if (strpos($words[$i], $input_cahr)==true) {
            $char = $input_cahr;
            echo "your  char is corect plz enter the next char";
            $flag = false;
            wordMatch($char);
            break;
        }
    }
    if ($flag == true) {
        echo "you have lossed one lives and now you have only ".--$lives;
        if ($lives == 0) {
            die("you lost");
        }
    }
}
function take_inputs()
{
    $words = array("was", "wheare", "dog", "cat", "bat", "animal", "car", "bike", "laptop", "mobile", "plane", "home", "exam");

    $input_cahr = readline("enter the cahrector");
    if ($input_cahr == null) {
        echo 'Please enter something';
    } else if (strlen($input_cahr) > 1) {
        echo 'only one character is allowed';
    } 
    else if (is_numeric($input_cahr)==true)
    {
        echo "enter only chreactors";
    } 
    else {
        isAvailable($input_cahr);
    }
}
take_inputs();

?>

