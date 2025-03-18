<?php
define("SERVIDOR","localhost");
define("USUARIO","root");
define("PASSWORD","clave");
define("DB","nombre_base_de_datos");

try {
    $pdo = new PDO("mysql:host=" . SERVIDOR . ";dbname=" . DB . ";charset=utf8", USUARIO, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>