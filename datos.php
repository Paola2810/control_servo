<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "control_servo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$fecha = $_GET['fecha'];
$hora = $_GET['hora'];
$metodo = $_GET['metodo'];
$fecha = date("Y-m-d");
$hora = date("H:i:s");


$sql = "INSERT INTO datos (fecha, hora, metodo) VALUES ('$fecha', '$hora', '$metodo')";

if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
