<?php

$host = 'localhost';
$puerto = '1521';
$servicio = 'XE';
$usuario = 'USR_FERRETERIA ';
$contrasena = 'ferreteria';

$conn = oci_connect($usuario, $contrasena, "$host:$puerto/$servicio");

if (!$conn) {
    $error = oci_error();
    die("Error de conexión a la base de datos: " . $error['message']);
}

function validatetarjeta($numero_tarjeta,$ssid,$fechaexp) {
     $conn = oci_connect('USR_FERRETERIA', 'ferreteria', 'localhost/XE');

      $sql = "INSERT USRFERRETERIA.TARJETA 
      (NUMERO_TARJETA, SSID, FECHA_EXPIRACION) 
      VALUES (:numero_tarjeta, :ssid, :fecha_expiracion)";
      $stmt = oci_parse($conn, $sql);
      oci_bind_by_name($stmt, ':numero_tarjeta', $numero_tarjeta);
      oci_bind_by_name($stmt, ':ssid', $ssid);
      oci_bind_by_name($stmt, ':fecha_expiracion', $fechaexp);
      oci_free_statement($stmt);

  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero_tarjeta = $_POST['txt_numero_tarjeta'];
    $ssid = $_POST['txt_codigo'];
    $fechaexp = $_POST['txt_fecha'];
    

    header("Location: ../index.php");
}

?>