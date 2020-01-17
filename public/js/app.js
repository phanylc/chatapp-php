window.onload = function () {
    $(".toggle-menu").click(function (e) {
        $("#sidebar").toggle(200);
    });

    var busqueda = document.getElementById("busquedaContacto");
    busqueda.addEventListener("keyup", buscarContacto)

}

function abrirChat() {
    $(".backimagemensaje").css("display", "block");
    $(".backimagemensaje").css("transition", "all ease-in-out 0.3s");
    $(".chats").css("display", "none");
    $(".chats").css("transition", "all ease-in-out 0.3s");
}

function cerrarChat() {
    $(".backimagemensaje").css("display", "none");
    $(".backimagemensaje").css("transition", "all ease-in-out 0.3s");
    $(".chats").css("display", "block");
    $(".chats").css("transition", "all ease-in-out 0.3s");
}

function mostrarElementos() {
    if ($(".listaperfil").hasClass('visible')) {
        $(".listaperfil").removeClass('visible');
    } else {
        $(".listaperfil").addClass('visible');
    }
}

function mostrarElementos2() {
    if ($(".listaperfil2").hasClass('visible')) {
        $(".listaperfil2").removeClass('visible');
    } else {
        $(".listaperfil2").addClass('visible');
    }
}



var view = {
    contactos: []
}

function buscarContacto() {
    var busqueda = document.getElementById("busquedaContacto")
    $.get("/contacto/action_buscar.php?busqueda="+busqueda.value, 
        function (data) {
            console.log(data)
            view.contactos = JSON.parse(data);
            actualizarListaContacto()
        }
    );
}

function actualizarListaContacto(){
    let template = ""
    let listcontacto = document.getElementById("listaContacto")

    for (const item of view.contactos) {
        template += `
        <div class="row hover">
            <div class="col-2 ">
                <img src="../public/img/not.png" alt="imguser" class="imgnot">
            </div>
            <div class="col-10 parraf contactos-modal">
                <h6>${item.nombre + " "+ item.apellido}</h6>
            </div>
        </div>`
    }

    listcontacto.innerHTML = template
}

