//<?php 
session_start();
$_SESSION = [];
session_abort();

header('Location: ../login.php');

