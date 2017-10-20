<?php


	$conexion = mysqli_connect("localhost", "root", "", "proyectohn");



//recibir los datos y guardar en las variables
$tituloNoticia= $_POST['tituloNoticia'];

$fecha= date("Y/m/d");

$noticia= $_POST['noticia'];


//crud insertar
$insertar = "INSERT INTO noticias(Titulo, Noticia,Fecha) VALUES ('$tituloNoticia', '$noticia', '$fecha')";


//verificar que no hay usuarios con el mismo correo
/*$verificar_correo= mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email'");
if( mysqli_num_rows($verificar_correo)>0){
	echo '<script>
	alert("El usuario ya está registrado");
	window.history.go(-1);
	</script>';
	exit;
}
*/



//Ejecutar crud insertar
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado){
	echo 'error al registrar noticia';
}else{
	echo '<script>
	alert("noticia registrada!");
	window.history.go(-1);
	</script>';
}
//cerrar la conexion
mysqli_close($conexion);

