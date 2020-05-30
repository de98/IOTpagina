<html>
    <head>
        <title>Temperatura</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <h1 >PROYECTO ESTACION DE MONITOREO EN HOSPITALES</h1>
        <h2 >DATOS TOMADOS RUIDO</h2>
       
        
        <?php
                session_start();
                $us=$_SESSION["usuario"];
                $nodo=$_SESSION["nodo"];
                if($us != "diego"){
                    header("Location: Clase1IOT.html");
                }
                else{
                    echo"<h3>Bienvenido Dr:  $us</h3>";
                    echo"<h3>Nodo  $nodo</h3>";
                }
        
        


                if (($nodo == "1")){
                    $servurl="http://api-diegoescobar824834.codeanyapp.com/medico/1";
                
                }
                
                else if(($nodo == "2")){
                
                    $servurl="http://api-diegoescobar824834.codeanyapp.com/medico/2";
                
                }
                else{
                    header ('Location: Nodos.php');
                }
                $curl=curl_init($servurl);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                $response=curl_exec($curl);
          
                if($response===false)
                {
                    curl_close($curl);
                    die("Error");
                }
          
          
                $resp=json_decode($response);
                $long=count($resp);
             
                for($i=0; $i<$long; $i++)
                {
                    $dec=$resp[$i];
                    $temp=$dec ->temperaturaest;
                    $ruido=$dec->ruidoest;
                    $lux=$dec->luminosidadest;
                    $fecha=$dec->fechaest;
                    echo "<table>
                              <tr>
                                <td>Ruido_establecida</td> 
                                
                                <td>Fecha_de_modificacion</td>
                              </tr>
                              <tr>  
                                <td>$ruido db</td> 
                                
                                <td>$fecha</td>
                                </tr>
                          
                  </table>";
                }




                if (($nodo == "1")){
                    $servurl="http://api-diegoescobar824834.codeanyapp.com/proyect/1";
                
                }
                
                else if(($nodo == "2")){
                
                    $servurl="http://api-diegoescobar824834.codeanyapp.com/proyect/2";
                
                }
                else{
                    header ('Location: Nodos.php');
                }
  
        $curl=curl_init($servurl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response=curl_exec($curl);

        if($response===false)
        {
            curl_close($curl);
            die("Error");
        }

        curl_close($curl);
        $resp=json_decode($response);
        $long=count($resp);
        echo "<h3>Datos medidos</h3>";
        echo "<table><tr><td>Ruido</td><td>Fecha y Hora</td></tr>";
        for($i=0; $i<$long; $i++)
        {
            $dec=$resp[$i];
            $ruido=$dec->ruido;
            $fecha=$dec->fecha;
            echo "<tr><td>$ruido db</td><td>$fecha</td></tr>";
        }

        header("Refresh: 2; URL='ruido.php'");


        ?>
        </table>
          <br><br>
          <span style="position: absolute; top: 180px; left: 515px; ">
          <a href="pagina2IOT.php" class="boton_1">Volver</a>  
          </span>
          <span style="position: absolute; top: 180px; left: 760px; ">
          <a href="post.php" class="boton_2">Post</a>  
          </span>
          
          
    </body>
    
</html>