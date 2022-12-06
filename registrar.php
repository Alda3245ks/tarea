<?php
include("conexion_bd.php");
   		$name = trim($_POST["nombre"]);
   		$position = trim($_POST["cargo"]);
   		$salary = trim($_POST["salario"]);
   		$numberPhone = trim($_POST["telefono"]);
   		$consulta = "INSERT INTO trabajadores(nombre, cargo, salario, telefono) VALUES ('$name','$position','$salary','$numberPhone')";
   		$registro = mysqli_query($conex,$consulta);
?>