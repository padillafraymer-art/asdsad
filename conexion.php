<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$conexion = mysqli_connect("localhost","root","","system");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Error al conectar " . mysqli_connect_error();
  }
  
?>
