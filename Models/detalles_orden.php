<?php
// Establecer la conexión con la base de datos Oracle
$conn = oci_connect('USR_FERRETERIA', 'ferreteria', 'localhost/XE');


$sql ="INSERT INTO PRODUCTOS(ID_PRODUCTO, NOMBRE_PRODUDCTO, DESCRIPCION,PRECIO) VALUES (:id_producto, :nombre_producto, :descripcion, :precio);";
// Preparar la consulta
$stid = oci_parse($conn, $sql);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // $id_usuario = $_POST['id_usuario'];
    $id_producto = $_POST["id"]; 
    $nombre_producto = $_POST["txt_nombre"]; 
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];
    
}

// Asociar los parámetros con los valores
oci_bind_by_name($stid, ':id', $id_producto);
oci_bind_by_name($stid, ':nombre', $nombre_producto);
oci_bind_by_name($stid, ':descripcion', $descripcion);
oci_bind_by_name($stid, ':precio', $precio);

oci_free_statement($stid);

  
  oci_close($conn);

?>
    
<?php
// Obtener los datos enviados desde el formulario
//require_once "../Config/Conexion.php";

