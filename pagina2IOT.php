<html>
    <head>
    
        <title>Mi primera pagina</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <h1 >PROYECTO ESTACION DE MONITOREO EN HOSPITALES</h1>
        <?php
        
        session_start();
        $us=$_SESSION["usuario"];
        $nodo=$_SESSION["nodo"];
        if($us != "diego"){
            header("Location: Clase1IOT.html");
        }
        else{
            echo"<h2>Bienvenido Dr:  $us</h2>";
            echo"<h2>Nodo  $nodo</h2>";
        }
        

      if (($nodo == "1")){
          $servurl="http://api-diegoescobar824834.codeanyapp.com/medico/1";
      
      }
      
      else if(($nodo == "2")){
      
          $servurl="http://api-diegoescobar824834.codeanyapp.com/medico/2";
      
      }
      else if(($nodo == "3")){
      
        $servurl="http://api-diegoescobar824834.codeanyapp.com/medico/3";
    
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
      echo"<h3>Variables establecidas por el Dr: $us</h3>";
      for($i=0; $i<$long; $i++)
      {
          $dec=$resp[$i];
          $temp=$dec ->temperaturaest;
          $ruido=$dec->ruidoest;
          $lux=$dec->luminosidadest;
          $fecha=$dec->fechaest;
          echo "<table>
                    <tr>
                      <td>Temperatura</td> 
                      <td>Ruido</td>
                      <td>Luminosidad</td>
                      <td>Fecha_de_modificacion</td>
                    </tr>
                    <tr>  
                      <td>$temp °C</td> 
                      <td>$ruido db</td>
                      <td>$lux Lumenes</td>
                      <td>$fecha</td>
                      </tr>
                
        </table>";
      }

      


        ?>


    

        


     

        <h2 >DATOS TOMADOS</h2>
        <span style="position: absolute; top: 10px; left: 10px; ">

        <IMG SRC="lili.gif" >  

        </span>
        <table >
            <tr>
              <th>Variable_a_analizar</th>
              <th>Descripción</th> 
             
            </tr>
            <tr>
              <td><a href="temperatura.php" class="boton_var">Temperatura</a></td>
              
              <td>   Temperatura del usuario   </td>
              
            </tr>
            <tr>
              
              <td><a href="ruido.php" class="boton_var">Ruido</a></td>
              <td>Ruido ambiental en la habitacion</td>
              
            </tr>
            <tr>
          
              <td><a href="lumex.php" class="boton_var">Luminosidad</a></td>
              <td>Lumenes en la habitacion</td>
              
            </tr>
          </table>
          <br><br>
          
          
          <span style="position: absolute; top: 290px; left: 1000px; ">
          <a href="medico.php" class="boton_1">Publicar</a>  
          </span>
          <span style="position: absolute; top: 700px; left: 450px; ">
          <a href="Nodos.php" class="boton_1">Cambiar nodo</a>  
          </span>
          <span style="position: absolute; top: 700px; left: 800px; ">
          <a href="finalizar.php" class="boton_2">Cerrar sesion</a>  
          </span>
    
    </body>
</html>