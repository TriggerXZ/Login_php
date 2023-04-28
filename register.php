<?php
require "config.php";

$message = '';

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
            $message = 'Se ha creado el usuario correctamente';
        } else {
            $message = 'Lo siento, ha ocurrido un problema al crear la cuenta';
        }
    } else {
        $message = 'Las contraseñas no coinciden';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registro</title>
</head>
<body>
    <?php if(!empty($message)): ?>
    <p><?= $message ?></p>
    <?php endif; ?>
    <div class="contenedor__todo">
        <div class="contenedor__login-register">
            <form action="" method="POST" class="register">
                <h2>Registro</h2>
                <input type="text" name="username" placeholder="Nombre de usuario" value="" required>
                <input type="email" name="email" placeholder="Correo Electronico" value="" required>
                <input type="password" name="password" placeholder="Ingrese su contraseña" value="" required>
                <input type="password" name="cpassword" placeholder="Repita su contraseña" value="" required>
                <button type="submit" value="send">Registrate</button>
            </form>
        </div>
    </div>
</body>
</html>