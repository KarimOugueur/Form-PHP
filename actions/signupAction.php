<?php

require('C:\wamp64\www\apprendrePHP\actions\database.php');

// chekc if user clickung in validate 

if(isset($_POST['validate'])){

    if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) 
    && !empty($_POST['password'])){
        $firstname=htmlspecialchars($_POST['firstname']);
        $lastname=htmlspecialchars($_POST['lastname']);
        $email=htmlspecialchars($_POST['firstname']);
        $password=password_hash($_POST['firstname'], PASSWORD_DEFAULT);

        $checkIfUserAlreadyExist= $bdd -> prepare('SELECT email FROM users WHERE email=?');
        $checkIfUserAlreadyExist -> execute(array($email));

        if($checkIfUserAlreadyExist->rowCount()==0){
            // insert user 
            $insertUser= $bdd ->prepare('INSERT INTO users(lastname, firstname, email,password)VALUES(?,?,?,?)');
            $insertUser -> execute(array($firstname, $lastname, $email, $password)); 

            // get infos of this user
            $getUserInfo=$bdd -> prepare('SELECT id, email FROM users WHERE email=?');
            $getUserInfo-> execute(array($email));

            $userinfos = $getUserInfo->fetch();
            $_SESSION ['auth']=true; 
            $_SESSION['id']= $userinfos['id'];
            $_SESSION['email']= $userinfos['email'];
            
            header('Location: http://localhost/di/acceuil.html');
        } else{
            $errorMsg=" Email already exist";
        }
    } else {
        $errorMsg="please remplir le ";
    }
}