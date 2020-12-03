<?php
  $conectado=mysqli_connect ("localhost", "root", "");

  $report="CREATE DATABASE IF NOT EXISTS agenda;";
  $makeReport=mysqli_query ($report, $conectado);

  mysqli_select_db ("agenda", $conectado);

  $report="DROP TABLE IF EXISTS citas;";
  $makeReport=mysqli_query ($report, $conectado);

  $report="CREATE TABLE entradas (identra INT PRIMARY KEY AUTO_INCREMENT,	hora TIME, dia DATE, asunto VARCHAR(255));";
  $makeReport=mysqli_query ($report, $conectado);

  if ($makeReport){
	  echo ("La Base de datos y la tabla han sido creadas.");
  } else {
	  echo ("Ha surgido algun problema durante la creacion de la BBDD y/o la tabla.<br>");
	  echo ("El problema es el siguiente:<br>");
	  echo ("Codigo: <b>".mysqli_errno ()."</b><br>");
	  echo ("Descripcion:: <b>".mysqli_error ()."</b><br>");
  }

  @mysqli_free_result ($makeReport);
  mysqli_close ($conectado);
?>
