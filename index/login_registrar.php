
<?php

include("conexion.php");

$nombre =$_POST['nombre'];
$apellidos =$_POST['apellidos'];
$edad =$_POST['edad'];
$email =$_POST['email'];
$id =$_POST['id_estudiante'];
$semestre =$_POST['semestre'];
$grupo =$_POST['grupo'];
$turno =$_POST['turno'];
//Registrar
 if(isset($_POST["btnregistrar"]))
{
	$sqlgrabar = "INSERT INTO Estudiante (nombre,apellidos, edad) 
	values ('$nombre',$apellidos','$edad',$email')";
	
	if(pg_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='registara.html' </script>";
	}else 
	{
		echo "<script> alert('Error'); window.location='registrar.html' </script>";;
	}
}
//REGISTAR LA OTRA TABLA

{
	$sqlgrabar = "INSERT INTO Grupo (id_estudiante,semestre, grupo, turno) 
	values ('$id','$semestre',$grupo','$turno')";
	
	if(pg_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='registrar.html' </script>";
	}else 
	{
		echo "<script> alert('Error'); window.location='registrar.html' </script>";;
	}
}
?>