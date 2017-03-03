<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
     <title>Registro</title>
	 <link rel="stylesheet" href="estilos.css">
	 </head>
     <body>
	 <h1>Formulario de registro</h1>
	 
	 
	 <h2 class="form-titulo"> Ingresa datos</h2>
	 <div class="contenedor-inputs">
	 
	 <form action="registro.php" method="POST">
	 
	 <input  type= "text" name= "txtClave" 
	 placeholder="Clave" class="input-100"> 
	 
	 <input type="text" name="txtNombre" 
	 placeholder="Nombre" class="input-100">
	 
	 <input type="text" name="cmbSexo" 
	 placeholder="Sexo"  class="input-100">

	 
	 <input type="submit" value="Registrar"
	 class="btnRegistrar">
	 </form>
	  <h2 class="form-titulo">Borrar datos</h2>
	 <form action="Eliminar.php" method = "POST">
	 
	 <input type="text" name="txtClave" 
	 placeholder="Clave" class="input-100">
	  
	  <input type="submit" value="Eliminar" class="btnEliminar">
	 
	 </form>
	 
	  <h2 class="form-titulo">Consultar datos</h2>
	 <form action="Tabla.php">
	<input type="submit" value="Ver Tabla" name="btnTabla">
	 
	 </div>
	 </form>
	 </body>
	 </html>
	 