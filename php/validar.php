<?php
$user=$_POST['user'];
$password=$_POST['password'];

//conectar a la Database 
$conexion=mysqli_connect("localhost", "root", "promocion2013", "login_motapp");
$consulta="SELECT * FROM usuario WHERE User='$user' and Password='$password'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0) {
	header("location: ../index.html");
}
else{
	echo "Error en la autenficacion";
}
mysqli_free_result($resultado);
mysqli_close($conexion);	

?>