function confirmLogout(x){
    var x = confirm("Seguro que quieres cerrar tu sesion?");
    if(x == true){
        return true;
    }else if (x == false){
        return false;
    }
}