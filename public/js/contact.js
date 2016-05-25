function validateForm() {
    var y = document.forms["myForm"]["fphone"].value;
    var tlf = /^(?:(?:\+[0-9]{1,3}?)?)[0-9]{6,14}$/;

    if (tlf.test(y)==false) {
        alert("Formato de número telefónico incorrecto.");
        return false;
    }

    alert("Gracias por contactar con nosotros");
    return true;

}