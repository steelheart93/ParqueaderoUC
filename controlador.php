<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Taller Parqueadero</title>
    <!-- CSS Externos -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- CSS Internos -->
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
    <nav class="navbar navbar-default navbar-static-top">
      <!-- container-fluid = ocupa todo el ancho  de la pantalla -->
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.html">Parqueadero UC</a>
        </div>
      </div>
    </nav>
    <?php
    $archivo = fopen("info.txt", "w") or die("Error al crear el archivo .txt");
    $salto = chr(13).chr(10);

    fputs($archivo, $_REQUEST["info0"].$salto);
    fputs($archivo, $_REQUEST["info1"].$salto);
    fputs($archivo, $_REQUEST["info2"].$salto);
    fputs($archivo, $_REQUEST["info3"].$salto);
    fputs($archivo, $_REQUEST["info4"].$salto);
    fputs($archivo, $_REQUEST["info5"].$salto);
    fputs($archivo, $_REQUEST["info6"].$salto);
    fputs($archivo, $_REQUEST["info7"].$salto);
    fputs($archivo, $_REQUEST["info8"].$salto);
    fputs($archivo, $_REQUEST["info9"].$salto.$salto);
    fputs($archivo, "Copyright (c) 2017 Stiven Muñoz Murillo 1701320133 All Rights Reserved.");

    echo "<div class=\"container\">";
    echo "<div class=\"jumbotron\">";
    echo "<h1>ENHORABUENA</h1>";
    echo "<h3>Se registro correctamente la información en el archivo, (info.txt).</h3>";
    echo "<h3>Para regresar haga click en la esquina superior izquierda.</h3>";
    echo "</div></div>";
     ?>
    <footer class="footer">
      <div class="container">
        <p>Copyright (c) 2017 Stiven Muñoz Murillo 1701320133 All Rights Reserved.</p>
      </div>
    </footer>
    <!-- JS Externos -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
