<!DOCTYPE>
<html>
<head>
     <title>registro</title>
	 </head>
     <body>
	 <?php
$server="localhost";
$usuario="root";
$contrase�a="";
$db ="ejemplo";

$conexion = mysqli_connect($server, $usuario, $contrase�a, $db)
or die ("error en la conexion");

$clave = $_POST['txtClave'];

mysqli_query($conexion, "DELETE from datos where clave='$clave'")
or die ("Error al eliminar datos");

mysqli_close($conexion);
echo "Datos eliminados correctamente"
?>
	 </body>
	 </html>