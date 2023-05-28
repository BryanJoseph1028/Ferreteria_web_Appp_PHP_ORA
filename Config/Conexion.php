<?php
class Conexion {
    const HOST = 'localhost';
    const PORT = 1521;
    const NAME = 'XE';
    const USER = 'USR_FERRETERIA';
    const PASSWORD = 'ferreteria';
    
    public function conectar() {
        $conn = oci_connect(self::USER, self::PASSWORD, "(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=".self::HOST.")(PORT=".self::PORT."))(CONNECT_DATA=(SID=".self::NAME.")))");

        if (!$conn) {
            $error = oci_error();
           // echo "Error de conexión: " . $error['message'];
        } else {
          //  echo "Conexión exitosa";
        }
    }
}

// Crear un objeto de la clase Conexion y conectar a la base de datos
$con = new Conexion();
$con->conectar();
?>
