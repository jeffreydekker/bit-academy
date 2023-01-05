<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
        <?php
        $op = $_POST['op'];
        $result = 0;
        $errorNum1 = '';
        $errorNum2 = '';
    
        if (isset($_POST["op"])) {
            if (is_numeric($_POST["num1"])) {
                $num1 = $_POST["num1"];
            } else {
                $errorNum1 = 'Number 1 is not a number!';
            }
            if (is_numeric($_POST["num2"])) {
                $num2 = $_POST["num2"];
            } else {
                $errorNum2 = 'Number 2 is not a number!';
            }
        }
    
        if (is_numeric($num1) && is_numeric($num2)) {
            switch ($op) {
                case "+":
                    $result = $num1 + $num2;
                    echo "Result: " . $result;
                    break;
                case "-":
                    $result = $num1 - $num2;
                    echo "Result: " . $result;
                    break;
                case "x":
                    $result = $num1 * $num2;
                    echo "Result: " . $result;
                    break;
                case "/":
                    if ($num2 == 0) {
                        echo "Division by 0 is not allowed!";
                        break;
                    } else {
                        $result = $num1 / $num2;
                        echo "Result: " . $result;
                        break;
                    }
                case "mod":
                    $result = fmod($num1, $num2);
                    echo "Result: " . $result;
                    break;
            }
        }
        ?>
    <h1>Calculator</h1>
    <form method="POST" action="">
        <label for="num1">Number 1:</label>
        <input type="text" id="num1" name="num1" value="
        <?php 
        
        if (isset($_POST['op'])) { 
            echo $num1;
        } 
        ?>">
        <?php 

        echo $errorNum1;
        ?>
        <br>
        <br>
        <label for="num2">Number 2:</label>
        <input type="text" id="num2" name="num2" value="
        <?php 
        
        if (isset($_POST['op'])) { 
            echo $num2;
        } 
        ?>">
        <?php
        echo $errorNum2;
        ?>
        <br>
        <br>
        <input type="submit" name="op" value="+">
        <input type="submit" name="op" value="-">
        <input type="submit" name="op" value="x">
        <input type="submit" name="op" value="/">
        <input type="submit" name="op" value="mod">
        <br>
        <br>
    </form>
</body>
</html>
