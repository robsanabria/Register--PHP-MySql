<?php
$email = $_POST['email'];
$pass = $_POST['pass'];
//conectar a la db
$conexion = mysqli_connect("localhost","root","","registro");
$consulta = " SELECT * FROM datos WHERE email = '$email' AND contraseña = '$pass' "; //declarando la query
$resultado = mysqli_query($conexion,$consulta);//ejecutando la query

$filas = mysqli_num_rows($resultado);

if ( $filas > 0 ) {
    header("location:welcome.html");///valida y redirije
}else{
header("location:error.html"); 
}
//que libere resultado para que no ocupe espacio en memoria
mysqli_close($conexion);
// cerramos la conexión para que no consuma espacio en memoria
?>

