<?php
// conexion a la base de datos
$conn = mysqli_connect("localhost", "root", "Merli220510", "chatbot_db") or die("Error de conexcion en la base de datos");

// recibo el mensaje del usuario
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);

//creo la consulta y la ejecutio
$sql = "SELECT respuesta FROM consultas WHERE pregunta LIKE '%$getMesg%'";
$result = mysqli_query($conn, $sql) or die("Error");

// si la consulta me devuelve al menos un resultado, envia la respuesta
if (mysqli_num_rows($result) > 0) {
    //recuperando lo que me devolvio la consulta a la base de datos de acuerdo con la consulta del usuario
    $fetch_data = mysqli_fetch_assoc($result);
    //almaceno la respuesta a una variable que enviaremos a ajax
    $replay = $fetch_data['respuesta'];
    echo $replay;
} else {
    echo "¡Lo siento, no puedo ayudarte con este inconveniente!";
    echo "<br> Por Favor comunícate con el administrador en el siguiente enlace:";
    echo "</br><a href='#'>Contacto</a>";
}
