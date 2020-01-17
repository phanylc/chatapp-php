<?php
if(isset($_GET["estado"])){
    $estado = $_GET["estado"];
}else{
    header("location: /home/login.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/stylelogin.css">
    <link rel="stylesheet" href="../public/css/styleregistradocorrectamente.css">

    <title>Confirmar Registro</title>
</head>

<body>
    <?php if($estado=="ok"): ?>   
     <div class="form">
        <img src="/public/img/succes.png" alt="Registro Exitoso">
        <h2>Registro Exitoso</h2>
        <p class="subtitulo">Usted se ha reistrado Correctamente</p>
        <br>
       <a href="/home/login.php"> <button type="submit" class="sesion">Iniciar Sesion</button></a>
        <br><br><br><br>

    </div>

    <?php endif; ?> 
    <?php if($estado=="error"): ?> 
    <div class="form">
        <img src="/public/img/error.png" alt="Registro Exitoso">
        <h2>No se pudo Registrar</h2>
        <p class="subtitulo">El usuario no ha podido Registrar</p>
        <br>
        <a href="/contacto/registro.php"> <button type="submit" class="sesion">Volver a registrar</button></a>
        <br><br><br><br>

    </div>
    <?php endif; ?> 
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