<?php
include "conexion.inc.php";
$usuario=$_GET['usuario'];
$resultadoC = mysqli_query($con, "SELECT * FROM color WHERE usuario = '$usuario'");
$resultadoC1 = mysqli_fetch_array($resultadoC);
$resultadoC2 = mysqli_fetch_array($resultadoC);
$resultadoC3 = mysqli_fetch_array($resultadoC);
$resultadoN = mysqli_query($con, "SELECT * FROM usuario u, persona p, nota n WHERE u.usuario = '$usuario' and u.ci = p.ci and p.ci = n.ci");
include "../Templates/cabeceraUser.inc.php";
include "../Templates/navegadorUser.inc.php";
include "../Templates/cuerpoUserMatE.inc.php";
include "../Templates/pieUser.inc.php";
?>