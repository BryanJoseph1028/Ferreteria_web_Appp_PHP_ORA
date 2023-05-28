<?php
// Configuración de la conexión a la base de datos Oracle
$host = 'localhost';
$puerto = '1521';
$servicio = 'xe';
$usuario = 'USR_FERRETERIA';
$contrasena = 'ferreteria';

// Establecer conexión con la base de datos Oracle
$conn = oci_connect($usuario, $contrasena, "$host:$puerto/$servicio");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['txt_email'];

    // Verificar si el correo electrónico existe en la base de datos
    $sql = "SELECT USUARIO FROM USUARIOS  WHERE EMAIL = :email";
    $stmt = oci_parse($conn, $sql);
    oci_bind_by_name($stmt, ':email', $email);
    oci_execute($stmt);

    if ($row = oci_fetch_assoc($stmt)) {
        $usuario = $row['txt_usuario'];

        // Generar una nueva contraseña aleatoria
        $contraena = generateRandomPassword();

        // Actualizar la contraseña en la base de datos
        $sql = "UPDATE USUARIOS SET CONTRASENA = :contrasena WHERE USUARIO = :usuario";
        $stmt = oci_parse($conn, $sql);
        oci_bind_by_name($stmt, ':contrasena', $contraena);
        oci_bind_by_name($stmt, ':usuario', $usuario);
        oci_execute($stmt);

        // Envía la nueva contraseña por correo electrónico (aquí debes implementar tu propio código para enviar el correo electrónico)

        echo "Se ha enviado una nueva contraseña al correo electrónico asociado a la cuenta.";
    } else {
        echo "El correo electrónico ingresado no existe en nuestra base de datos.";
    }
}

// Función para generar una contraseña aleatoria
function generateRandomPassword($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $password;
}
?>