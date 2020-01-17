<?php
session_start();
if (!isset($_SESSION["ID"])) {
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
    <link rel="stylesheet" href="../public/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Mensajes APP</title>
</head>

<body>
    <div class="container vistatable">
        <div>
            <!-- Primera columna -->
            <div class="row ">
                <div class="col-lg-4 col-sm-12 border-right chats" style="padding-left: 0 !important; padding-right: 0 !important;">
                    <div class="backimage">
                        <div class="row">
                            <div class="col-2 imagen0 ">
                                <img src="../public/img/mensajesapp.png" alt="imguser" class="imguser">
                            </div>
                            <div class="col-10 text-right">
                                <div class="">
                                    <div>
                                        <button data-toggle="modal" data-target="#exampleModal"> <i class="material-icons">
                                                message
                                            </i>
                                        </button>

                                        <button><i class="material-icons" onclick="mostrarElementos()">
                                                more_vert
                                            </i>
                                            <ul class="listaperfil">
                                                <li class="hover">
                                                    <a href="#" data-toggle="modal" data-target="#Perfil">Perfil</a>
                                                </li>
                                                <li class="hover cerrarsesion">
                                                    <a href="/home/action_logout.php">Cerrar Sesion</a>
                                                </li>
                                            </ul>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div class="row ">
                            <div class="col">
                                <div class="bginput">
                                    <input type="text" class="form-control input1" placeholder="Buscar o empezar un nuevo chat">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mensaje col scroll ">
                        <div onclick="abrirChat()">
                            <div class="row hover    ">
                                <div class="col-2 ">
                                    <img src="../public/img/not.png" alt="imguser" class="imgnot">
                                </div>
                                <div class="col-10 contactos ">
                                    <h6>Jhon Paja.</h6>
                                    <p>Hola y tu?</p>
                                </div>
                            </div>
                        </div>


                        <div class="dropdown-divider" style="margin: 0px;"></div>
                        <div onclick="abrirChat()">
                            <div class="row hover">
                                <div class="col-2 ">
                                    <img src="../public/img/not.png" alt="imguser" class="imgnot">
                                </div>
                                <div class="col-10 contactos ">
                                    <h6>Jhon P.</h6>
                                    <p>Hola y tu?</p>
                                </div>
                            </div>
                        </div>

                        <div onclick="abrirChat()">
                            <div class="dropdown-divider" style="margin: 0px;"></div>
                            <div class="row hover">
                                <div class="col-2 ">
                                    <img src="../public/img/not.png" alt="imguser" class="imgnot">
                                </div>
                                <div class="col-10 contactos ">
                                    <h6>Jhon P.</h6>
                                    <p>Hola y tu?</p>
                                </div>
                            </div>

                        </div>

                        <div onclick="abrirChat()">
                            <div class="dropdown-divider" style="margin: 0px;"></div>
                            <div class="row hover">
                                <div class="col-2 ">
                                    <img src="../public/img/not.png" alt="imguser" class="imgnot">
                                </div>
                                <div class="col-10 contactos ">
                                    <h6>Jhon P.</h6>
                                    <p>Hola y tu?</p>
                                </div>
                            </div>

                        </div>

                        <div onclick="abrirChat()">
                            <div class="dropdown-divider" style="margin: 0px;"></div>
                            <div class="row hover">
                                <div class="col-2 ">
                                    <img src="../public/img/not.png" alt="imguser" class="imgnot">
                                </div>
                                <div class="col-10 contactos ">
                                    <h6>Jhon P.</h6>
                                    <p>Hola y tu?</p>
                                </div>
                            </div>

                        </div>

                        <div onclick="abrirChat()">
                            <div class="dropdown-divider" style="margin: 0px;"></div>
                            <div class="row hover">
                                <div class="col-2 ">
                                    <img src="../public/img/not.png" alt="imguser" class="imgnot">
                                </div>
                                <div class="col-10 contactos ">
                                    <h6>Jhon P.</h6>
                                    <p>Hola y tu?</p>
                                </div>
                            </div>

                        </div>

                        <div onclick="abrirChat()">
                            <div class="dropdown-divider" style="margin: 0px;"></div>
                            <div class="row hover">
                                <div class="col-2 ">
                                    <img src="../public/img/not.png" alt="imguser" class="imgnot">
                                </div>
                                <div class="col-10 contactos ">
                                    <h6>Jhon P.</h6>
                                    <p>Hola y tu?</p>
                                </div>
                            </div>

                        </div>

                        <div>
                            <div class="dropdown-divider" style="margin: 0px;"></div>
                            <div class="row hover">
                                <div class="col-2 ">
                                    <img src="../public/img/not.png" alt="imguser" class="imgnot">
                                </div>
                                <div class="col-10 contactos ">
                                    <h6>Jhon P.</h6>
                                    <p>Hola y tu?</p>
                                </div>
                            </div>

                        </div>

                        <div onclick="abrirChat()">
                            <div class="dropdown-divider" style="margin: 0px;"></div>
                            <div class="row hover">
                                <div class="col-2 ">
                                    <img src="../public/img/not.png" alt="imguser" class="imgnot">
                                </div>
                                <div class="col-10 contactos ">
                                    <h6>Jhon P.</h6>
                                    <p>Hola y tu?</p>
                                </div>
                            </div>

                        </div>

                        <div onclick="abrirChat()">
                            <div class="dropdown-divider" style="margin: 0px;"></div>
                            <div class="row hover">
                                <div class="col-2 ">
                                    <img src="../public/img/not.png" alt="imguser" class="imgnot">
                                </div>
                                <div class="col-10 contactos ">
                                    <h6>Jhon P.</h6>
                                    <p>Hola y tu?</p>
                                </div>
                            </div>

                        </div>

                        <div onclick="abrirChat()">
                            <div class="dropdown-divider" style="margin: 0px;"></div>
                            <div class="row hover">
                                <div class="col-2 ">
                                    <img src="../public/img/not.png" alt="imguser" class="imgnot">
                                </div>
                                <div class="col-10 contactos ">
                                    <h6>Jhon P.</h6>
                                    <p>Hola y tu?</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Segunda columna -->
                <div class="col-lg-8 col-sm-12 backimagemensaje " style="height: 804px; position: relative;">

                    <!-- Input abajo -->
                    <div class="escribir">
                        <div class="row">
                            <div class="col-12">

                                <div class="bginput ">
                                    <div class="row">

                                        <div class="col-1 ">
                                            <div class=" text-left ">
                                                <div>
                                                    <button class="emoji" style="padding-left: 0px;"><i class="material-icons">
                                                            sentiment_very_satisfied
                                                        </i>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-10 ">
                                            <input type="text" class="form-control mt-3 input2" placeholder="Escribir nuevo mensaje">
                                        </div>
                                        <div class="col-1 " style="padding-left: 0px;">
                                            <div class=" text-left ">
                                                <div>
                                                    <button class="enviar"><i class="material-icons">
                                                            send
                                                        </i>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- F-input abajo -->

                    <!-- encabezado de la segunda columna -->
                    <div>
                        <div class="row">
                            <div class="col" style="padding: 0px;">
                                <div class="backimage">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="row">
                                                <button class="botones" onclick="cerrarChat()"><i class="material-icons">
                                                        keyboard_arrow_left
                                                    </i>
                                                </button>
                                                <img src="../public/img/not.png" alt="imguser" class="imguser">
                                                <div class="contactos">
                                                    <h6>Jhon P.</h6>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-right">

                                            <div>
                                                <button><i class="material-icons">
                                                        attach_file
                                                    </i>
                                                </button>

                                                <button><i class="material-icons" onclick="mostrarElementos2()">
                                                        more_vert
                                                    </i>
                                                    <ul class="listaperfil2">
                                                        <li class="hover " data-toggle="modal" data-target="#InfoContacto">
                                                            <a href="#">Info. Contacto</a>
                                                        </li>
                                                        <li class="hover cerrarsesion">
                                                            <a href="#">Eliminar chat</a>
                                                        </li>

                                                    </ul>
                                                </button>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- encabezado de la segunda columna -->

                    <div class="container scroll chatsmensajes " style="box-shadow: none; -webkit-box-shadow:none; height: 650px; background-color: transparent; overflow-x: hidden;
                        overflow-y: scroll;">

                        <div class="row justify-content-start">
                            <div class="col-8">
                                <span class="mensaje-recibido"> Lorem ipsum dolor sit amet consectetur, adipisicing
                                    elit. Debitis explicabo
                                    sapiente nemo alias rem.</span>
                            </div>
                        </div>

                        <div class="row justify-content-end">

                            <div class="col-8">
                                <span class="mensaje-enviado"> Lorem ipsum dolor sit amet consectetur.</span>
                            </div>
                        </div>

                        <div class="row justify-content-start">
                            <div class="col-8">
                                <span class="mensaje-recibido"> Lorem ipsum dolor sit amet consectetur, adipisicing
                                    elit. Debitis explicabo
                                    sapiente nemo alias rem.</span>
                            </div>
                        </div>

                        <div class="row justify-content-end">

                            <div class="col-8">
                                <span class="mensaje-enviado"> Lorem ipsum dolor sit amet consectetur.</span>
                            </div>
                        </div>

                        <div class="row justify-content-start">
                            <div class="col-8">
                                <span class="mensaje-recibido"> Lorem ipsum dolor sit amet consectetur, adipisicing
                                    elit. Debitis explicabo
                                    sapiente nemo alias rem.</span>
                            </div>
                        </div>

                        <div class="row justify-content-end">

                            <div class="col-8">
                                <span class="mensaje-enviado"> Lorem ipsum dolor sit amet consectetur.</span>
                            </div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-8">
                                <span class="mensaje-recibido"> Lorem ipsum dolor sit amet consectetur, adipisicing
                                    elit. Debitis explicabo
                                    sapiente nemo alias rem.</span>
                            </div>
                        </div>

                        <div class="row justify-content-end">

                            <div class="col-8">
                                <span class="mensaje-enviado"> Lorem ipsum dolor sit amet consectetur.</span>
                            </div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-8">
                                <span class="mensaje-recibido"> Lorem ipsum dolor sit amet consectetur, adipisicing
                                    elit. Debitis explicabo
                                    sapiente nemo alias rem.</span>
                            </div>
                        </div>

                        <div class="row justify-content-end">

                            <div class="col-8">
                                <span class="mensaje-enviado"> Lorem ipsum dolor sit amet consectetur.</span>
                            </div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-8">
                                <span class="mensaje-recibido"> Lorem ipsum dolor sit amet consectetur, adipisicing
                                    elit. Debitis explicabo
                                    sapiente nemo alias rem.</span>
                            </div>
                        </div>

                        <div class="row justify-content-end">

                            <div class="col-8">
                                <span class="mensaje-enviado"> Lorem ipsum dolor sit amet consectetur.</span>
                            </div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-8">
                                <span class="mensaje-recibido"> Lorem ipsum dolor sit amet consectetur, adipisicing
                                    elit. Debitis explicabo
                                    sapiente nemo alias rem.</span>
                            </div>
                        </div>

                        <div class="row justify-content-end">

                            <div class="col-8">
                                <span class="mensaje-enviado"> Lorem ipsum dolor sit amet consectetur.</span>
                            </div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-8">
                                <span class="mensaje-recibido"> Lorem ipsum dolor sit amet consectetur, adipisicing
                                    elit. Debitis explicabo
                                    sapiente nemo alias rem.</span>
                            </div>
                        </div>

                        <div class="row justify-content-end">

                            <div class="col-8">
                                <span class="mensaje-enviado"> Lorem ipsum dolor sit amet consectetur.</span>
                            </div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-8">
                                <span class="mensaje-recibido"> Lorem ipsum dolor sit amet consectetur, adipisicing
                                    elit. Debitis explicabo
                                    sapiente nemo alias rem.</span>
                            </div>
                        </div>

                        <div class="row justify-content-end">

                            <div class="col-8">
                                <span class="mensaje-enviado"> Lorem ipsum dolor sit amet consectetur.</span>
                            </div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-8">
                                <span class="mensaje-recibido"> Lorem ipsum dolor sit amet consectetur, adipisicing
                                    elit. Debitis explicabo
                                    sapiente nemo alias rem.</span>
                            </div>
                        </div>

                        <div class="row justify-content-end">

                            <div class="col-8">
                                <span class="mensaje-enviado"> Lorem ipsum dolor sit amet consectetur.</span>
                            </div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-8">
                                <span class="mensaje-recibido"> Quebejghtrgfds
                                    sapiente nemo alias rem.</span>
                            </div>
                        </div>



                        <div class="row justify-content-end">

                            <div class="col-8">
                                <span class="mensaje-enviado"> Lorem ihjjvsjcs akjh.</span>
                            </div>
                        </div>


                    </div>

                </div>
            </div>

            <!-- Modal contactos -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Contactos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body " style="padding: 0px;">
                            <div class="row">
                                <div class="col">
                                    <div class="bginput">
                                        <input type="text" class="form-control input1" id="busquedaContacto" placeholder="Buscar o empezar un nuevo chat">
                                    </div>
                                </div>

                            </div>

                            <div class="col" style="padding-bottom: 10px;" id="listaContacto">
                                <!-- contenido generado por js -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Modal -->

            <!-- Modal info contacto-->

            <div class="modal fade " id="InfoContacto" tabindex="-1" role="dialog" aria-labelledby="ModalInfoContacto" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalInfoContacto">Info. Del Contacto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body-info " style="padding: 0px;">
                            <form method="POST" action="action_registrar.php" class="col col-md-6 border  py-4 s bg-white">

                                <div class="form-row">


                                    <div class="col-4">
                                        <img src="../public/img/mensajesapp.png" alt="Img Perfil" class="imgmodalperfil">


                                    </div>
                                    <div class="col-8">
                                        <h5>Jhon Paja</h5>

                                        <div class="dropdown-divider divisor-info-contacto" style="margin: 0px;"></div>

                                        <div class="row">
                                            <div class="col-3">
                                                <h6>Telefono:</h6>
                                            </div>
                                            <div class="col-9">
                                                <p>809-854-6521</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-3">
                                                <h6>Sexo:</h6>
                                            </div>
                                            <div class="col-9">
                                                <p>Masculino</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-3">
                                                <h6>E-Mail:</h6>
                                            </div>
                                            <div class="col-9">
                                                <p>Jhonpaja@gmail.com</p>
                                            </div>
                                        </div>


                                    </div>

                                </div>




                        </div>
                    </div>
                </div>
            </div>
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
    </div>
    <!-- Modal info contacto-->


    <!-- Modal perfil-->

    <div class="modal fade" id="Perfil" tabindex="-1" role="dialog" aria-labelledby="ModalPerfil" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalPerfil">Perfil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body-perfil " style="padding: 0px;">
                    <form method="POST" action="action_registrar.php" class="col col-md-6 border  py-4 s bg-white">

                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <img src="../public/img/mensajesapp.png" alt="Img Perfil" class="imgmodalperfil">
                                <h6>Nombre Usuario</h6>
                            </div>


                            <!-- <p>
                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                            Ver Datos
                                        </button>
                                    </p> -->
                            <div class="" id="collapseExample">
                                <div class="card card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Nombre</label>
                                            <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Apellido</label>
                                            <input type="text" name="apellido" class="form-control" id="inputPassword4" placeholder="Apellido" required>
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
                                    <div class="row">
                                        <div class="col">
                                            <button type="submit" class="btn btn-primary">Aceptar</button>
                                            <button type="submit" class="btn btn-primary">Modificar</button>

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>




                </div>

                </form>
            </div>

        </div>
    </div>
    </div>
    <!-- Modal perfil-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="/public/js/app.js"></script>
    <script src="/public/js/main.js"></script>


</body>

</html>