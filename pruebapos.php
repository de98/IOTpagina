<html>
    <head>

</head>

<body>


<?php
    date_default_timezone_set('UTC');
    echo 'Posteo';

    $s1= 1; //Nodo
    $s2= 32; //temperatura
    $s3= 500; //ruido
    $s4= 100; //luminosidad
    $s5= date('l jS \of F Y h:i:s A'); //fecha

    $data = array("idnodo" => $s1,"temperatura"=> $s2,"humedad"=> $s3, "fecha"=> $s5);
    echo "<h2>$data</h2>";
    
    $data_json = json_encode($data);
    $service_url = 'http://api-diegoescobar824834.codeanyapp.com/datos';

    $ch = curl_init($service_url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADEER,
                array('Content-Type: application/json',
                    'Content-Length: '.strlen($data_json)));

    $result = curl_exec($ch);

    if($result ===false)
    {
        die("error");
    }

    curl_close($ch);

    header

    
?>
</body>

</html>