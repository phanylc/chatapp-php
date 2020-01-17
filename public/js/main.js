function cuerpofiltro(){
    if ($("#cuerpofiltro").hasClass('activo')){
        $("#cuerpofiltro").css({"opacity":"100", "height":"45px", "transition":".5s all ease"});
        $("#cuerpofiltro").removeClass("activo");
    }else{
        $("#cuerpofiltro").css({"opacity":"0", "height":"0", "transition":".5s all ease"});
        $("#cuerpofiltro").addClass("activo");
    }
}