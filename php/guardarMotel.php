<?php 
$nombreMotel = $_POST['nameMotel'];
$descripcionHabitacion= $_POST['description']
$Latitud = $_POST['latitude'];
$Longitud = $_POST['longitude'];
$imagenCargada = $_POST['uploadImage'];


$conexion=mysqli_connect("ec2-23-21-50-120.compute-1.amazonaws.com", "ynfegcsmksjsqi", " zY0_WOAIXsNUUBnv_5EzmU_DL", "Motel", "5432");
$consulta=INSERT INTO `motapp`.`habitacions` (`nombre`, `tipo`, `precio`, `cantidad`, `descripcion`) VALUES ('cristian', 'loca');
$resultado=mysqli_query($conexion, $consulta);

 ?>	