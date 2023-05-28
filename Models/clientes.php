<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['email'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $telefono = $_POST['telefono'];
    
    function registro($nombre, $apellido, $direccion, $correo, $usuario, $contrasena, $telefono)
    {
        $conn = oci_connect('USR_FERRETERIA', 'ferreteria', 'localhost/XE');
    
        $sql = "INSERT INTO USUARIOS.USR_FERRETERIA (USUARIO,CONTRASENA,NOMBRE,APELLIDO,DIRECCION,TELEFONO,EMAIL) 
          VALUES(:usuario,:contrasena,:nombre,:apellido,:direccion,:telefono,:email)";
    
        $stmt = oci_parse($conn, $sql);
        oci_bind_by_name($stmt, ':nombre', $nombre);
        oci_bind_by_name($stmt, ':nombre', $nombre);
        oci_bind_by_name($stmt, ':apellido', $apellido);
        oci_bind_by_name($stmt, ':direccion', $direccion);
        oci_bind_by_name($stmt, ':email', $correo);
        oci_bind_by_name($stmt, ':usuario', $usuario);
        oci_bind_by_name($stmt, ':contrasena', $contrasena);
        oci_bind_by_name($stmt, ':telefono', $telefono);
        oci_execute($stmt);
    }
}
  header("Location: ../index.php");
?>