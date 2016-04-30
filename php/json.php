<?php
header("Content-type: text/css");
include "db.php";
if(isset($_POST['buscar'])){
$estado = $_POST['estado'];
$municipio = $_POST['municipio'];
$Buscar = $_POST['buscar'];

$data=array();
$q=mysql_query("select * from clientes WHERE estado ='".$estado."' AND municipio = '".$municipio."' AND giro LIKE '%".$Buscar."%'") or die ("No se realizo la consulta  ".mysql_error());
while ($row=mysql_fetch_assoc($q)){
 $data[]=$row;
          
}
echo json_encode($data);
}else {

	echo "<P>NO HAY NADA QUE MOSTRAR</P>";
}
?>


            
				