<html>
    <head>

</head>

<body>


<?php
    date_default_timezone_set('UTC');
    echo 'Posteo';

    $s1= 3; //Nodo
    $s2= 50; //temperatura
    $s3= 70; //ruido

    $s5= date('l jS \of F Y h:i:s A'); //fecha

    $data = array('idnodo' => $s1,'peso'=> $s2,'altura'=> $s3, 'fecha'=> $s5);
    echo "<h2>$data</h2>";
    



    $url = 'http://api-diegoescobar824834.codeanyapp.com/puntosnaranja';

    //create a new cURL resource
    $ch = curl_init($url);

    //setup request to send json via POST
    
    $payload = json_encode($data);
    //attach encoded JSON string to the POST fields
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

    //set the content type to application/json
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

    //return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //execute the POST request
    $result = curl_exec($ch);

    
 

    if($result ===false)
    {
        die("error");
    }



    echo "<h2>$payload</h2>";
    //close cURL resource
    curl_close($ch);

    header("Location: temperatura.php");

    
?>
</body>

</html>