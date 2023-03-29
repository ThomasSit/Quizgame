<?php

if(isset($_POST['submit'])){
    $naam = $_POST['username'];
    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];

    $usernameErr = $emailErr = $passwordErr = '';

  

   if (empty($_POST['username'])){
        echo $usernameErr = 'Vul een username in';
        
   }
   
   if (empty($_POST['email'])){
    echo $emailErr = 'Vul een email in';
    
    }

    if (empty($_POST['wachtwoord'])){
        echo  $passwordErr = 'Vul een wachtwoord in';
        
    }

    if (empty($usernameErr) && empty($emailErr) && empty($passwordErr)) {
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        // rest of the code goes here
    };

}


if ($_POST['username'] && ($_POST['email']) && ($_POST['wachtwoord']) == true){
    echo'';
}  else{
    echo "fout";
}












?>