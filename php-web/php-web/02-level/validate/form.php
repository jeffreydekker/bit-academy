<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-web-level-02-Validate</title>
</head>
<body>
    <h1 style="text-align: center">Valid email checker</h1>
    <?php 
    if (isset($_POST["email"])) { 
        $email = $_POST["email"];
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo $_POST["email"] . " is a valid email adres" . PHP_EOL;
        } else {
            echo $_POST["email"] . " is not a valid email adres" . PHP_EOL;
        }
    }
    ?>
    <form method="POST" style="text-align: center;">
        <label for="inputEmail">Email</label>
        <input type="text" name="email" id="inputEmail">
        <input type="submit" value="Verzenden">
    </form>
</body>
</html>