<?php

  define ("salto","\n<br>\n");

  if (isset($_POST["fechaEnCurso"])){
	  $courseDate=$_POST["fechaEnCurso"];
  } else {
	  $courseDate=date("Y-m-d");
  }

  $annioActual=substr($courseDate,0,4);
  $mesActual=substr($courseDate,5,2);
  $diaActual=substr($courseDate,8);
?>