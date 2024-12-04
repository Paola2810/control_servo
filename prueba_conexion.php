<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "horaservo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
echo "Conexión exitosa";
$conn->close();
?>
