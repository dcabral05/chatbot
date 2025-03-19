<?php
include("conexion.php");

$sql = "SELECT * FROM mensajes";
$stmt = $pdo->query($sql);
$mensajes = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($mensajes as $mensaje) {
    echo "Usuario: " . $mensaje['usuario'] . " - Mensaje: " . $mensaje['mensaje'] . "<br>";
}

//hola
?>