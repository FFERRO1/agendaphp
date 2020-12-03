<html>
  <head>
  <link rel="stylesheet" href=".style.css">
  <script language="javascript" type="text/javascript">
    function volver(){
      document.retorno.submit();
    }
  </script>
  </head>
  <body onLoad="javascript:volver();">
  <?php

  include ("inc/datar.php");

  include ("inc/baseDatos.php");

  $horaDeCita=$_POST["hora"].":".$_POST["minutos"];

  $report="INSERT INTO entradas (dia, hora, asunto) VALUES ('$courseDate','$horaDeCita','".$_POST["asunto"]."');";

  $hacerreport=mysqli_query ($conexion, $report);

  @mysqli_free_result($makeReport);
  mysqli_close($connect);
  ?>
  <form action="index.php" name="retorno" id="retorno" method="post">
    <input type="hidden" name="fechaEnCurso" id="fechaEnCurso" value="<?php echo ($courseDate); ?>">
  </form>
  </body>
</html>
