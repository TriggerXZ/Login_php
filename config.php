<?php
$server = 'localhost';
$user = 'root';
$password = '';
$data_base = 'street_market';

$conn = mysqli_connect($server, $user, $password, $data_base);

if (!$conn) {
    die("Conexion fallida");
}
$sql = "SELECT tra_nom FROM trabajadores WHERE id = 35";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {

    while ($fila = $resultado->fetch_assoc()) {
        $username = $fila["tra_nom"];
    }
} else {
    echo "No se encontraron resultados.";
}

?>