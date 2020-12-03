<html>
  <head>
    <?php

	  include ("inc/datar.php");
	?>
    <title>Cambio de fecha</title>
    <style type="text/css">
			table{ 
				width:25%; 
				margin:auto; 
				background: #A6D65A;
				border:1px solid red;
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

      function enviar(cambio){
        if (cambio){
          document.getElementById("fechaEnCurso").value=document.getElementById("annio").value+"-"+document.getElementById("mes").value+"-"+document.getElementById("dia").value;
        }
		document.formularioDeCambioDeFecha.submit();
      }

      function ajustarCampos(){
        document.getElementById("dia").value="<?php echo ($diaActual); ?>";
        document.getElementById("mes").value="<?php echo ($mesActual); ?>";
        document.getElementById("annio").value="<?php echo ($annioActual); ?>";
      }
	</script>
  </head>
<body onLoad="javascript:ajustarCampos();">
  <form action="index.php" method="post" name="formularioDeCambioDeFecha" id="formularioDeCambioDeFecha">
    <input type="hidden" name="fechaEnCurso" id="fechaEnCurso" value="<?php echo ($_POST["fechaEnCurso"]); ?>">
  </form>
  <p>LA FECHA ACTUAL ES:&nbsp;
  <?php

    echo ($diaActual." del ".$mesActual." de ".$annioActual);
  ?>
  </p>
  <p>SELECCIONE LA NUEVA FECHA:</p>
  <table width="500" border="0" cellspacing="0" cellpadding="2">
    <tr>
      <td width="40" align="right">DIA:</td>
      <td width="100"><select name="dia" id="dia">
        <?php
          for ($i=1;$i<=31;$i++){
            echo ("<OPTION VALUE='");
            printf ("%02s",$i);
            echo ("'>");
            printf("%02s",$i);
            echo ("</OPTION>".salto);
          }
		?>
      </select></td>
      <td width="60" align="right">MES:</td>
      <td width="161"><select name="mes" id="mes">
        <option value="01">Enero</option>
        <option value="02">Febrero</option>
        <option value="03">Marzo</option>
        <option value="04">Abril</option>
        <option value="05">Mayo</option>
        <option value="06">Junio</option>
        <option value="07">Julio</option>
        <option value="08">Agosto</option>
        <option value="09">Septiembre</option>
        <option value="10">Octubre</option>
        <option value="11">Noviembre</option>
        <option value="12">Diciembre</option>
      </select></td>
      <td width="69" align="right">A&Ntilde;O:</td>
      <td width="70"><select name="annio" id="annio">
        <?php
          for ($i=2006;$i<=2020;$i++) echo ("<OPTION VALUE='".$i."'>".$i."</OPTION>".salto);
        ?>
      </select></td>
    </tr>
  </table>
  <p>
    <input name="aceptarCambio" type="button" id="aceptarCambio" value="Aceptar Cambio" onClick="javascript:enviar(true);">
    <input name="descartarCambio" type="button" id="descartarCambio" value="Descartar Cambio" onClick="javascript:enviar(false);">
</p>
</body>
</html>