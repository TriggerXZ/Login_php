<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Registro</title>
</head>

<body>

    <div class="contenedor__todo" style="margin-top:90px; background: #b1b0b0;">
        <div class="contenedor__login-register">
            <form action="" method="POST" class="register">
                <h2>Registro</h2>
                <?PHP
                require "../controllers/acceso_R.php"
                    ?>
                <input type="text" name="username" placeholder="Nombre de usuario" value="" required>
                <input type="email" name="email" placeholder="Correo Electronico" value="" required>
                <input type="password" name="password" placeholder="Ingrese su contraseña" value="" required>
                <input type="password" name="cpassword" placeholder="Repita su contraseña" value="" required>
                <button type="submit" value="send" style="background-color: #263238;">Registrate</button>
            </form>
        </div>
    </div>
</body>

</html>