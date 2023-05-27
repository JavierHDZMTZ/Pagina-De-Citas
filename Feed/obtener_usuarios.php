<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amors_database"; 

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$sql = "SELECT nombre, edad, intereses FROM usuarios"; 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $usuarios = array();
    while ($row = $result->fetch_assoc()) {
        $usuario = array(
            'nombre' => $row['nombre'],
            'edad' => $row['edad'],
            'intereses' => $row['intereses']
        );
        array_push($usuarios, $usuario);
    }
    header('Content-Type: application/json');
    echo json_encode($usuarios);
} else {
    echo "No se encontraron usuarios";
}
$conn->close();
?>
