<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/styleregistro.css">

    <title>Registrar</title>
</head>

<body>

    <div class="container">
        <div class="row registro justify-content-center">

            <form method="POST" action="action_registrar.php" class="col col-md-6 border  py-4 s bg-white">
                <h1 class="text-center">Registrar</h1>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Apellido</label>
                        <input type="text" name="apellido" class="form-control" id="inputPassword4"
                            placeholder="Apellido" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputTel">Telefono</label>
                        <input type="tel" name="telefono" class="form-control" placeholder="000-000-0000" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Sexo</label>
                        <select name="sexo" class="form-control">
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                            <option value="O">Otro</option>
                        </select>
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Contraseña</label>
                        <input type="password" name="password" class="form-control" id="inputPassword4"
                            placeholder="Contraseña">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Confirmar Contraseña</label>
                        <input type="password" name="confpassword" class="form-control" id="inputPassword4"
                            placeholder="Confirmar Contraseña">
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col">
                        <label for="inputAddress2">Correo</label>
                        <input type="text" name="correo" class="form-control" placeholder="user@gmail.com">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary">Aceptar</button>
                    </div>

                </div>

            </form>
        </div>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>