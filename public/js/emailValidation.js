function validate(formulario) {
    var x=document.forms[formulario];
    var correcto=true;

    for(var i=0;i<x.elements.length-1;i++){

        if(x.elements[i].value===""){
            correcto=false;
            alert("El campo "+ x.elements[i].name +" es obligatorio");
            return correcto;
        }
        else if(x.elements[i].name==="name"){
            if(!(x.elements[i].value.match(/[A-Za-z]{1,20}/))){
                correcto=false;
                alert("El campo Nombre solo admite caracteres A-Z()");
                return correcto;
            }
        }
        else if(x.elements[i].name==="email"){
            if(!x.elements[i].value.match(/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/)){
                correcto=false;
                alert("Formato de correo incorrecto");
                return correcto;
            }
        }
        else if(x.elements[i].name==="phone"){
            if(!x.elements[i].value.match(/^([0-9]{9})/)){
                correcto=false;
                alert("El campo telefono solo admite 9 DIGITOS");
                return correcto;
            }
            else if(x.elements[i].value.match(/\s/)){
                correcto=false;
                alert("No admite espacios en blanco en el campo telefono");
                return correcto;
            }
        }

    }
    if(correcto){
        alert("Todo correcto,correo enviado.")
        return correcto;
    }
    else{
        return correcto;
    }
}

