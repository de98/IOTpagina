<html>
<head>

</head>

<body>
<?php

$nodo = $_POST['nodo'];


session_start();
$_SESSION["nodo"]=0;
if (($nodo == "1")){
    session_start();
    $_SESSION["nodo"]=1;

   header ('Location: pagina2IOT.php');

}

else if(($nodo == "2")){

    $_SESSION["nodo"]=2;
    header ('Location: pagina2IOT.php');

}
else if(($nodo == "3")){

    $_SESSION["nodo"]=3;
    header ('Location: pagina2IOT.php');

}
else{
    header ('Location: Nodos.php');
}

?>


<body>