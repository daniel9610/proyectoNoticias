<?php


	$conexion = mysqli_connect("localhost", "root", "", "proyectohn");



//recibir los datos y guardar en las variables
$username= $_POST['username'];

$email= $_POST['email'];

$password= $_POST['password'];


//crud insertar
$insertar = "INSERT INTO usuarios(username, email, password) VALUES ('$username', '$email', '$password')";


//verificar que no hay usuarios con el mismo correo
$verificar_correo= mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email'");
if( mysqli_num_rows($verificar_correo)>0){
	echo '<script>
	alert("El usuario ya está registrado");
	window.history.go(-1);
	</script>';
	exit;
}




//Ejecutar crud insertar
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado){
	echo 'error al registrarse';
}else{
	echo '<script>
	alert("registro exitoso");
	window.history.go(-1);
	</script>';
}
//cerrar la conexion
mysqli_close($conexion);

