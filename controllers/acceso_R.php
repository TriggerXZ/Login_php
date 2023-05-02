<?php
require "../config.php";


if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['cpassword'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if ($password === $cpassword) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO trabajadores (tra_nom, tra_con, tra_cor) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sss', $username, $hashed_password, $email);

        if ($stmt->execute()) {
            # header("location:bienvenido.php");
            echo '<p class="alert alert-success">Se ha creado el usuario correctamente</p>';

        } else {
            echo 'Lo siento, ha ocurrido un problema al crear la cuenta';
        }
    } else {
        echo '<p class="alert alert-danger">Las contraseñas no coinciden</p>';

    }
}
?>