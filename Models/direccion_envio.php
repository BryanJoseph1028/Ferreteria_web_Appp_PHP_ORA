<?php
// Configuración de la conexión a la base de datos Oracle
$host = 'localhost';
$puerto = '1521';
$servicio = 'XE';
$usuario = 'USR_FERRETERIA ';
$contrasena = 'ferreteria';

// Establecer conexión con la base de datos Oracle
$conn = oci_connect($usuario, $contrasena, "$host:$puerto/$servicio");

// if (!$conn) {
//     $error = oci_error();
//     die("Error de conexión a la base de datos: " . $error['message']);
// }


function direccion($departamento, $ciudad, $codigo_postal, $municipio, $zona) {
$conn = oci_connect('USR_FERRETERIA', 'ferreteria', 'localhost/XE');
    $sql = "INSERT INTO USR_FERRETERIA.DIRECCION_ENVIO(DEPARTAMENTO, CIUDAD, CODIGO_POSTAL, MUNICIPIO, ZONA)
     VALUES(':departamento, : ciudad, :codigo_postal, :municipio, :zona)";
    $stmt = oci_parse($conn, $sql);
    oci_bind_by_name($stmt, ':departamento', $departamento);
    oci_bind_by_name($stmt, ':ciudad', $ciudad);
    oci_bind_by_name($stmt, ':codigo_postal', $codigo_postal);
    oci_bind_by_name($stmt, ':municipio', $municipio);
    oci_bind_by_name($stmt, ':zona', $zona);
    oci_execute($stmt);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $departamento = $_POST['txt_departamento'];
  $ssid = $_POST['txt_ciudad'];
  $fechaexp = $_POST['txt_codigo_postal'];
  $ssid = $_POST['txt_municipio'];
  $fechaexp = $_POST['txt_xona'];
  
  

  header("Location: ../index.php");
}

?>