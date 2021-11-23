<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="number1" placeholder="enter first number"><br><br>
        <input type="text" name="number2" placeholder="enter second number"><br><br>
         <select name="operation">
            <option value="Addition">+</option>
            <option value="Substraction">-</option>
            <option value="Multiplication">*</option>
            <option value="Division">/</option>
          
        </select>
        &nbsp;&nbsp;&nbsp;
        <select name="isfloat">
            <option value="float">Float</option>
            <option value="integer">Integer</option>
        </select>
        <button name="result">Result</button>
        <br><br>
    </form>
         <?php
         if(isset($_POST['result'])){
             $number1=$_POST['number1'];
             $number2=$_POST['number2'];
             $operation=$_POST['operation'];
             $isfloat=$_POST['isfloat'];
             if($number1==""||$number2==""){
                 echo "Please fill all the fields";
             }
           else if (is_numeric($number1)==false || is_numeric($number2)==false){
                echo "enter only digits";
             }
         else if($isfloat=='float'){
              
                if($operation=='Addition'){
                    $addition=$number1+$number2;
                    echo "Addition is ",(float)$addition;       
                }
                else if($operation=='Substraction'){
                    $substraction=$number1-$number2;
                    echo "Substraction is ",(float)$substraction;
                }
                else if($operation=='Multiplication'){
                    $multiplication=$number1*$number2;
                    echo "Multiplication is ",(float)$multiplication;
                }
                else if ($operation=='Division'){
                    $division=$number1/$number2;
                    echo "Division is ",(float)$division;
                }
                else{
                    echo "Select the Proper Choice";
                }
            }
            else{
                if($operation=='Addition'){
                    $addition=$number1+$number2;
                    echo "Addition is ",(int)$addition;   
                }
                else if($operation=='Substraction'){
                    $substraction=$number1-$number2;
                    echo "Substraction is ",(int)$substraction;
                }
                else if($operation=='Multiplication'){
                    $multiplication=$number1*$number2;
                    echo "Multiplication is ",(int)$multiplication;
                }
                else if ($operation=='Division'){
                    $division=$number1/$number2;
                    echo "Division is ",(int)$division;
                }
                else{
                    echo "Select the Proper Choice";
                }
            }
        }
         ?>
</body>
</html>