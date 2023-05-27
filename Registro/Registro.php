<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "amors_database";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
if (isset($_POST['name']) && isset($_POST['Apellido']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['pass'])) {
    $name = $_POST['name'];
    $apellido = $_POST['Apellido'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    if (isset($_POST['pais']) && isset($_POST['estado']) && isset($_POST['intereses']) && isset($_POST['edad']) && isset($_POST['nacimiento'])) {
        $pais = $_POST['pais'];
        $estado = $_POST['estado'];
        $intereses = $_POST['intereses'];
        $edad = $_POST['edad'];
        $nacimiento = $_POST['nacimiento'];
    
        $sql = "INSERT INTO usuarios (pais, estado, intereses, edad, nacimiento) VALUES ('$pais', '$estado', '$intereses', '$edad', '$nacimiento')";
    
        if ($conn->query($sql) === TRUE) {
            echo "Datos adicionales registrados correctamente";
        } else {
            echo "Error al registrar los datos adicionales: " . $conn->error;
        }
    }
}
$conn->close();
?>
