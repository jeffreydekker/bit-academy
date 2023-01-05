<?php
$name = $_POST['username'];
$email = $_POST['email'];
$age = $_POST['age'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum registratie</title>
</head>
<body>
    <h1>Forum registratie</h1>
    <p>
        Jouw username is <?php echo $name ?>
        <br>
        Jouw email is <?php echo $email ?>
        <br>
        Jouw leeftijd is <?php echo $age ?>
    </p>
    </form>
</body>
</html>