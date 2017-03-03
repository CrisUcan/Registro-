<!DOCTYPE>
<html>
<head>
     <title>registro</title>
	 </head>
     <body>
	 <?php
$server="localhost";
$usuario="root";
$contraseña="";
$db ="ejemplo";

$conexion = mysqli_connect($server, $usuario, $contraseña, $db)
or die ("error en la conexion");

$consulta = mysqli_query($conexion, "SELECT * from datos")
or die ("error en la conexion");

echo '<table border= "1">';
echo '<tr>';
echo '<th id = "clave">Clave</th>';
echo '<th id="nombre">Nombre</th>';
echo '<th id="sexo">Sexo</th>';
echo '</tr>';

while ($extraido = mysqli_fetch_array($consulta))
{    echo '<tr>';
     echo '<td>'.$extraido['clave'].'</td>';
	 echo '<td>'.$extraido['nombre'].'</td>';
	 echo '<td>'.$extraido['sexo'].'</td>';
	 echo '<tr>';
}
	 
	 mysqli_close($conexion);
	 echo '</table>';
	 ?>
	 </body>
	 </html>