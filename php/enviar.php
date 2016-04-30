<?PHP
if($_POST['destino']){
//$destino = $_POST['destino'];
$destino = "carloslafarga22@gmail.com";
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
}
$contenido = "Nombre:".$nombre."\nCorreo:".$correo."\nTelefono:".$telefono."\nMensaje:".$mensaje;

if(!mail($destino,"Consulta",$contenido)){

	echo "Se envio con exito";
}else {

	echo "no se envio ni madres ";
}

?>