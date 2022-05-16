<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Register</h2>
        </div>
        <form action="registration.php" method="post">
            <?php include('errors.php') ?>
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="Username" required><br>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email" required ><br>
            <label for="password_1">Password</label>
            <input type="password" name="password_1" placeholder="Password" required><br>
            <label for="password_2">Confirm Password</label>
            <input type="password" name="password_2" placeholder="Confirm Password"required><br>
            <input type="submit" value="Register" name="reg_user">
        </form>
    </div>
</body>
</html>