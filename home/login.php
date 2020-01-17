<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/stylelogin.css">

    <title>Login</title>
</head>

<body>
    <form class="form-login" method="post" action="/home/action_login.php">
        <h2>Iniciar Sesion</h2>
        <div class="form-group">
            <p>Usuario</p>
            <input type="text" class="form-control" placeholder="Usuario" name="usuario">
        </div>
        <div class="form-group">
            <p>Contraseña</p>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="password">
           <?php if(isset($_GET["error"])): ?>

            <p class="pregunta text-danger">Usuario y Contraseña no coinciden</p>
           <?php endif; ?>
        </div>
        <button type="submit" class="btn btn-primary">Aceptar</button>
        <br><br>
        <p class="pregunta">¿No tienes una cuenta?</p>
        <p class="enlace"><a href="/contacto/registro.php">Registrar</a></p>
    </form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>