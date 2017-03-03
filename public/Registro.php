<!DOCTYPE>
<html>
<head>
     <title>registrar</title>
	 <link rel="stylesheet" href="estilos.css">
	 
	 </head>
     <body>
	<?php
$server="localhost";
$usuario="root";
$contraseña="";
$db="ejemplo";

$conexion=mysqli_connect($server, $usuario, $contraseña, $db)
           or die("error en la conexion");
		$clave=$_POST['txtClave'];
        $nombre=$_POST['txtNombre'];
        $sexo=$_POST['cmbSexo']
		;
		$insertar="INSERT into datos values('$clave', '$nombre', '$sexo')";
		
		$resultado=mysqli_query($conexion, $insertar)
             or die("error al insertar los registros");
         mysqli_close ($conexion);
echo "Datos insertados correctamente";
          ?>                                                                                                       
		</body>
		</html>