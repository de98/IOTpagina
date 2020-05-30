<html>
<head>

</head>

<body>
<?php

$user = $_POST['user'];

$password = $_POST['password'];


if (($user == "diego") AND ($password == "12345")){
    session_start();
    $_SESSION["usuario"]=$user;

   header ('Location: Nodos.php');

}

Else{

    header ('Location: clase1IOT.html');

}

?>


<body>