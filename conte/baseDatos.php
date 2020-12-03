<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $connect=mysqli_connect($servername, $username, $password);
  $baseDeDatos=mysqli_select_db($connect, "agenda");
?>
