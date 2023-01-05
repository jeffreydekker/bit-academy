<?php
session_start();
$users = [
    'bram' => 'password123',
    'jeff' => 'wachtwoord',
    'laura' => '123456789'
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bezoekteller</title>
</head>
<body>
    <h1>Welkom!</h1>
    <p>
        We hebben je al
        <?php
        if (isset($_SESSION['eerder_gezien'])) {
            $aantal_keer = $_SESSION['eerder_gezien'] + 1;

            echo $aantal_keer;
            $_SESSION['eerder_gezien'] = $aantal_keer;

        } else {
            echo 0;
            $_SESSION['eerder_gezien'] = 0;
        }
        ?>
        eerder gezien. Welkom! :)
    </p>
    
</body>
</html>