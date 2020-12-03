<?php

  include ("conte/baseDatos.php");

  $nuevaHora=$_POST["hora"].":".$_POST["minutos"];
  $nuevaFecha=$_POST["annio"]."-".$_POST["mes"]."-".$_POST["dia"];

  $report="UPDATE entradas SET dia='".$nuevaFecha."', hora='".$nuevaHora."', asunto='".$_POST["asunto"]."' WHERE idCita=".$_POST["citaSeleccionada"].";";
  $makeReport=mysql_query($report, $connect);

  @mysql_free_result($makeReport);
  mysql_close ($connect);
?>
<html>
  <head>
    <style type="text/css">
			table{ 
				width:25%; 
				margin:auto; 
				background: #A6D65A;
				border:1px dotted red;
        text-align: center;
        
				} 
			body {
         height:100%;
       margin:0;
       padding:0;
				 background:#E6F7FF;
				}
			input{
        
				background:#8BB0DF;
				display:block;
        margin-left: auto;
        margin-right: auto;
			}
</style>
    <script language="javascript" type="text/javascript">

      function volver(){
        document.retorno.submit();
      }
    </script>
  </head>
  <body onLoad="javascript:volver();">

    <form action="index.php" method="post" name="retorno" id="retorno">
	  <input type="hidden" name="fechaEnCurso" id="fechaEnCurso" value="<?php echo ($_POST['fechaEnCurso']);?>">
	</form>
  </body>
</html>
