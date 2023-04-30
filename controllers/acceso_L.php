<?php
require "../config.php";

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = $conn->prepare("SELECT * FROM trabajadores WHERE  tra_cor=?");
    $sql->bind_param("s", $email);
    $sql->execute();
    $result = $sql->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hash = $row['tra_con'];
        if (password_verify($password, $hash)) {
            header("location:../views/bienvenido.php");
        } else {
            header("location:../views/bienvenido.php");
        }
    } else {
        echo '<p class="alert alert-danger">Acceso denegado</p>';
    }
} else {
    echo '<p class="alert alert-danger">Los campos están vacíos</p>';
}
?>