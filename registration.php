<?php include './include/header.php'?>

<form action="registration-checkup.php" method="post">

    <label>Username</label>
        <input type="text" name="username" placeholder="username" require > <br>
        
    <label>email</label>
        <input type="email" name="email" placeholder="e-mail" require><br>

    <label>Wachtwoord</label>
        <input type="password" name="wachtwoord" placeholder="wachtwoord" require>
 
<button type="submit" value="Submit"> submit</button>

</form>


<?php include './include/footer.php' ?>