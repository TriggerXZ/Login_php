<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Login</title>
</head>

<body>
    <div class="contenedor__todo">
        <div class="contenedor__login-register">
            <!--Login-->
            <form action="" method="POST" class="formulario__login">
                <h2>Iniciar Sesión</h2>
                <?php require "../controllers/acceso_L.php"; ?>
                <input type="email" name="email" placeholder="Correo Electrónico" value="">
                <input type="password" name="password" placeholder="Contraseña" value="">
                <button type="submit" value="send" style="background-color: #263238;">Entrar</button>
            </form>
        </div>
    </div>
</body>

</html>