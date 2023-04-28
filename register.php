<?php
    require "config.php";

    $message = '';

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
      $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':email', $_POST['email']);
      $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
      $stmt->bindParam(':password', $password);
  
      if ($stmt->execute()) {
        $message = 'Successfully created new user';
      } else {
        $message = 'Sorry there must have been an issue creating your account';
      }
    }
  ?>
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="contenedor__todo">
    <div class="contenedor__login-register">
        <form action="" method="POST" class="login">
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