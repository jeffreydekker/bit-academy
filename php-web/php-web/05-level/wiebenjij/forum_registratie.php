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
    <form action="registratie_handler.php" method="post">
        <input type="text" name="username" id="username">
        <label for="username"><strong>Username</strong></label>
        <br>
        <br>
        <input type="email" name="email" id="email">
        <label for="email"><strong>Email</strong></label>
        <br>
        <br>
        <input type="number" min="0" max=122 name="age" id="age">
        <label for="age"><strong>Age</strong></label>
        <br>
        <br>
        <input type="Submit" value="submit">
    </form>
</body>
</html>