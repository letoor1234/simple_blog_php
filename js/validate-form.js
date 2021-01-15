var contenido_textarea = "";

function contenido(id){
    contenido_textarea=document.getElementById(id).value;
    console.log(contenido_textarea);
}

function valida_longitud(perm, id){
    var num_caracteres_permitidos = perm
    var num_caracteres = document.getElementById(id).value.length;

    if (num_caracteres > num_caracteres_permitidos){
        document.getElementById(id).value = contenido_textarea;
    }else{
        contenido_textarea = document.getElementById(id).value;
    }

    if (num_caracteres >= num_caracteres_permitidos){
        document.getElementById(id).style.color="#ff0000";
    } else{
        document.getElementById(id).style.color="#000000";
    }
}
