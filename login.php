<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <form action="login-checkup.php" method="post" >
        <label>Username</label>
        <input type="text" name="username" placeholder="username" require > <br>
        
        <label>email</label>
        <input type="email" name="email" placeholder="e-mail" require><br>

        <label>Wachtwoord</label>
        <input type="password" name="wachtwoord" placeholder="wachtwoord" require>

        <button type="submit">submit</button>
    </form>

                <p>Heb je geen account Registreer je <a href="registration.html">hier</a></p>

</body>
</html>