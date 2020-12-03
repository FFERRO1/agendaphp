<?php

  if (!isset($_POST["citaSeleccionada"])) header("Location: index.php");
?>
<html>
  </head>
  
  <?php

    include ("conte/datar.php");

    include ("conte/baseDatos.php");
  ?>
  <script language="javascript" type="text/javascript">
    function volver(){
      document.retorno.submit();
    }
  </script>
  </head>

  <body onLoad="javascript:volver();">
  <?php

    $report="DELETE FROM entradas WHERE identra='".$_POST["citaSeleccionada"]."';";

    $makeReport=mysqli_query($connect, $report);

    @mysqli_free_result ($makeReport);
    mysqli_close ($connect);
  ?>
  <form action="index.php" method="post" name="retorno" id="retorno">
    <input type="hidden" name="fechaEnCurso" id="fechaEnCurso" value="<?php echo ($courseDate); ?>">
  </form>
  </body>
</html>

