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

function validateingreso($usuario, $contrasena, $nombre, $apellido, $direccion, $correo, $telefono) {
     $conn = oci_connect('USR_FERRETERIA', 'ferreteria', 'localhost/XE');

      $sql = "INSERT USUARIOS 
      (USUARIO, CONTRASENA, NOMBRE, APELLIDO, DIRECCION, TELEFONO, EMAIL) 
      VALUES (:usuario, :cotrasena, :nombre, :apellido, direccion, :telefono, :email)";
      $stmt = oci_parse($conn, $sql);
      
      oci_bind_by_name($stmt, ':usuario', $usuario);
      oci_bind_by_name($stmt, ':contrasena', $contrasena);
      oci_bind_by_name($stmt, ':nombre', $nombre);
      oci_bind_by_name($stmt, ':apellido', $apellido);
      oci_bind_by_name($stmt, ':direccion', $direccion);
      oci_bind_by_name($stmt, ':email', $correo);  
      oci_bind_by_name($stmt, ':telefono', $telefono);
      oci_free_statement($stmt);

  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['txt_usuario'];
    $contrasena = $_POST['txt_contrasena'];
    $nombre = $_POST['txt_nombre'];
    $apellido = $_POST['txt_apellido'];
    $direccion = $_POST['txt_direccion'];
    $correo = $_POST['txt_email'];
    $telefono = $_POST['txt_telefono'];

    header("Location: ../index.php");
}

?>