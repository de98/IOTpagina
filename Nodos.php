<html>
    <head>
            <title>Mi primera pagina</title>
            <link rel="stylesheet" href="estilo.css">
    
    </head>
    <body>
    <span style="position: absolute; top: 10px; left: 10px; ">

<IMG SRC="lili.gif" >  

</span>
        <h1 >PROYECTO ESTACION DE MONITOREO EN HOSPITALES</h1>
        <h1 >NODOS DE MONITOREO</h1>
        <?php
        
        session_start();
        $us=$_SESSION["usuario"];
        if($us != "diego"){
            header("Location: Clase1IOT.html");
        }
        else{
            echo"<h3>Bienvenido Dr:  $us</h3>";
        }

        ?>



<div id="login">
                
        <form name="form" action="asignarnodo.php" method="POST">
            <label>INGRESE EL NODO A CONSULTAR</label><input type="text" name="nodo">
            <input type="submit" name="CONSULTAR">

        </form>
        
    </div>


    <span style="position: absolute; top: 395px; left: 600px; ">
          <a href="finalizar.php" class="boton_2">Cerrar sesion</a>  
    </span>




        

    </body>
</html>