
<?php
// Configuración de la conexión a la base de datos Oracle
$host = 'localhost';
$puerto = '1521';
$servicio = 'XE';
$usuario = 'USR_FERRETERIA ';
$contrasena = 'ferreteria';

// Establecer conexión con la base de datos Oracle
$conn = oci_connect($usuario, $contrasena, "$host:$puerto/$servicio");

if (!$conn) {
    $error = oci_error();
    die("Error de conexión a la base de datos: " . $error['message']);
}

// Función para validar las credenciales de inicio de sesión
function validateLogin($username, $password) {
$conn = oci_connect('USR_FERRETERIA', 'ferreteria', 'localhost/XE');
    $sql = "SELECT ID_USUARIO ,
    USUARIO ,
    CONTRASENA ,
    NOMBRE ,
    APELLIDO ,
    DIRECCION ,
    TELEFONO ,
    EMAIL 
    FROM USUARIOS 
    WHERE USUARIO = :user AND CONTRASENA = :pass";
    $stmt = oci_parse($conn, $sql);
    oci_bind_by_name($stmt, ':user', $username);
    oci_bind_by_name($stmt, ':pass', $password);
    oci_execute($stmt);
}

// Procesar el formulario de inicio de sesión
     if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        header("location: ../index.php");
     }else{
        header("location: ../Views/Js/login.js");
     }
?>