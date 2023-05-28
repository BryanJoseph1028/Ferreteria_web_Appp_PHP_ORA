<?php
// Establecer la conexión con la base de datos Oracle
$conn = oci_connect('USR_FERRETERIA', 'ferreteria', 'localhost/XE');


$sql ="INSERT INTO CATEGORIAS(ID_CATEGORIAS CATEGORIAS, DESCRIPCION,) VALUES (:id_categoria, :categoria, :descripcion);";
// Preparar la consulta
$stid = oci_parse($conn, $sql);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // $id_usuario = $_POST['id_usuario'];
    $id_categoria = $_POST["id"]; 
    $categoria = $_POST["txt_categoria"]; 
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];
    
}

// Asociar los parámetros con los valores
oci_bind_by_name($stid, ':id_categoria', $id_categoria);
oci_bind_by_name($stid, ':nombre', $categoria);
oci_bind_by_name($stid, ':descripcion', $descripcion);

oci_free_statement($stid);

  
  oci_close($conn);

?>
    
<?php
// Obtener los datos enviados desde el formulario
//require_once "../Config/Conexion.php";

