<html>
    <head>
        <title>Temperatura</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <h1 >PROYECTO ESTACION DE MONITOREO EN HOSPITALES</h1>
        <?php
        session_start();
        $us=$_SESSION["usuario"];
        if($us != "diego"){
            header("Location: Clase1IOT.html");
        }
        else{
            echo"<h3>Bienvenido  $us</h3>";
        }
        ?>

        <h2 >DATOS TOMADOS TEMPERATURA</h2>
        
          <table >
            <tr>
              <th><h3>Valor</h3></th>
              <th><h3>Fecha</h3></th> 
             
            </tr>
            <tr>
              <td>37.5</td>
              <td>enero 2020</td>
              
            </tr>
            <tr>
              <td>38</td>
              <td>enero 2021</td>
              
            </tr>
            
          </table>

        
          <br><br>
          <form action="pagina2IOT.html"><input type="submit" value="volver" ></form>
          
    </body>
</html>