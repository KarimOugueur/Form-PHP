<?php
try{

    /* */
    $dsn = 'mysql:dbname=forminscription;host=127.0.0.1';
    $user = 'root';
    $password = '';

    $bdd = new PDO($dsn, $user, $password);

}catch(Exceptio $e) {

    die('Error : can not to connect in database : ' . $e-> getMessage()); 
}

?>

