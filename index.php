<html>
  <head>
    
    <script language="javascript" type="text/javascript">

      function saltar(pagina){
        document.formularioCitasPrincipal.action=pagina;
		document.formularioCitasPrincipal.submit();
      }

    </script>
	<title>Agenda</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <style type="text/css">
			table{ 
				width:25%; 
				margin:auto; 
				background: #A6D65A;
				border:1px solid red;
        text-align: center;
        padding: 5px;
        
				} 
			body {
        border: 1px solid black;
        width:25%;
        height:50%;
        margin: 10;
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
  </head>

  <body>
    <?php

      include ("conte/datar.php");

      include ("conte/baseDatos.php");

      $report="SELECT * FROM entradas WHERE dia='".$courseDate."' ORDER BY hora;";

      $makeReport=mysqli_query($connect, $report);

      $datingDay=mysqli_num_rows($makeReport);
      echo ("Citas del dia: ".$datingDay.salto);
    ?>
    AGENDA DEL D&Iacute;A:
    <?php

    echo ($diaActual." del ".$mesActual." de ".$annioActual);
	?>

    <form action="" method="post" name="formularioCitasPrincipal" id="formularioCitasPrincipal">

      <input type="hidden" name="fechaEnCurso" id="fechaEnCurso" value="<?php echo($courseDate); ?>">
      <table width="500" border="0" cellspacing="0" cellpadding="0">
        <tr><th>CITAS</th></tr>
      </table>
      <hr>
      <?php

        if ($datingDay>0){
          echo ("<table width='500' border='0' cellspacing='0' cellpadding='0'>");
          while ($cita = mysqli_fetch_array($makeReport, MYSQLI_ASSOC)) {
            echo ("<tr><td>".$cita["hora"]."</td>");
            echo ("<td>".$cita["asunto"]."</td>");

            echo ("<td><input type='radio' id='citaSeleccionada' name='citaSeleccionada' value='".$cita["identra"]."'>");
            echo ("</td></tr>");
          }
          echo ("</table>");

          echo ("<input name='borrarCita' type='button' id='borrarCita' value='Eliminar Cita' onClick='javascript:saltar(\"eliminarCita.php\");'>".salto);
          echo ("<input name='cambiarCita' type='button' id='cambiarCita' value='Modificar cita' onClick='javascript:saltar(\"cambiarCita.php\");'>".salto);
        }

        echo ("<input name='nuevaCita' type='button' id='nuevaCita' value='Agregar cita' onClick='javascript:saltar(\"agregarCita.php\");'>".salto);
        echo ("<input name='cambiarFecha' type='button' id='cambiarFecha' value='Otro d&iacute;a' onClick='javascript:saltar(\"cambiarFecha.php\");'>".salto);
      ?>
    </form>
  </body>
</html>
