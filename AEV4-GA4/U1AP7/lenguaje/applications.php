<!doctype html>
<html lang="es">
	<head>
							
					<meta charset="utf-8" />
					<meta http-equiv= "X-UA-Compatible" content ="IE=edgeb">
					<meta name = "description "  content  = "descripcion para buscadores"/>
					<title> formulario para servidor  </title>
	</head> 
	<body>

<?php
echo "los datos recibidos por el servidor son <br>" ;
echo  "nombre :  " . $_POST['nombre']. "<br>";
echo  " Los apellidos son : " .$_POST ['apellidos'] . "<br>";
echo  " numero de telefono : " . $_POST ['numerodeteléfono'] . "<br>";
echo  "calle :  " . $_POST['calle']. "<br>";
echo  "localidad :  " . $_POST['localidad']. "<br>";
echo  "CodigoPostal :  " . $_POST['Codigopostal']. "<br>";
echo  "Provincia :  " . $_POST['Provincia']. "<br>";
echo  "Pais :  " . $_POST['pais']. "<br>";
echo  "correo :  " . $_POST['correo']. "<br>";
echo  "fechaNacimiento:  " . $_POST['fechaNacimiento']. "<br>";
echo  "descubierto :  " . $_POST['descubierto']. "<br>";
echo  "observaciones :  " . $_POST['observaciones']. "<br>";
?>
</body>
</html>