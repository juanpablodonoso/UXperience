jQuery.validator.addMethod("emailValidation", function (sEmail) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(sEmail)) {
        return true;
    }
    else {
        return false;
    }

});

$(document).ready(function(){
    $("#select_Individual").change(function(){
        $price_Doble = Number($("#price_Doble").text());
        $number_Doble = Number($("#select_Doble").val());
        $price_Triple = Number($("#price_Triple").text());
        $number_Triple = Number($("#select_Triple").val());
        $price_Familiar = Number($("#price_Familiar").text());
        $number_Familiar = Number($("#select_Familiar").val());
        $total = Number($("#total_amount").text());
        $price = Number($("#price_Individual").text());
        $number = Number($("#select_Individual").val());
        $total = $price*$number+($price_Doble*$number_Doble)+($price_Triple*$number_Triple)+($price_Familiar*$number_Familiar);
        $total.toFixed(2);
        $("input[name=total_amount_submit]").val($total.toString());
        if($number>0){
            if(!$("#selectedIndividual").length){
                $('<p id="selectedIndividual">-Individual: '+$number+'</p>').appendTo('#selected');
            }
            else{
                $("#selectedIndividual").text('-Individual: '+$number);
            }
        }
        else{
            $("#selectedIndividual").remove();
        }
        $("#total_amount").text($total.toString());
    });
    $("#select_Doble").change(function(){
        $price_Individual = Number($("#price_Individual").text());
        $number_Individual = Number($("#select_Individual").val());
        $price_Triple = Number($("#price_Triple").text());
        $number_Triple = Number($("#select_Triple").val());
        $price_Familiar = Number($("#price_Familiar").text());
        $number_Familiar = Number($("#select_Familiar").val());
        $total = Number($("#total_amount").text());
        $price = Number($("#price_Doble").text());
        $number = Number($("#select_Doble").val());
        $total = $price*$number+($price_Individual*$number_Individual)+($price_Triple*$number_Triple)+($price_Familiar*$number_Familiar);
        $total.toFixed(2);
        $("input[name=total_amount_submit]").val($total.toString());
        if($number>0){
            if(!$("#selectedDoble").length){
                $('<p id="selectedDoble">-Doble: '+$number+'</p>').appendTo('#selected');
            }
            else{
                $("#selectedDoble").text('-Doble: '+$number);
            }
        }
        else{
            $("#selectedDoble").remove();
        }
        $("#total_amount").text($total.toString());
    });
    $("#select_Triple").change(function(){
        $price_Doble = Number($("#price_Doble").text());
        $number_Doble = Number($("#select_Doble").val());
        $price_Individual = Number($("#price_Individual").text());
        $number_Individual = Number($("#select_Individual").val());
        $price_Familiar = Number($("#price_Familiar").text());
        $number_Familiar = Number($("#select_Familiar").val());
        $total = Number($("#total_amount").text());
        $price = Number($("#price_Triple").text());
        $number = Number($("#select_Triple").val());
        $total = $price*$number+($price_Doble*$number_Doble)+($price_Individual*$number_Individual)+($price_Familiar*$number_Familiar);
        $total.toFixed(2);
        $("input[name=total_amount_submit]").val($total.toString());
        if($number>0){
            if(!$("#selectedTriple").length){
                $('<p id="selectedTriple">-Triple: '+$number+'</p>').appendTo('#selected');
            }
            else{
                $("#selectedTriple").text('-Triple: '+$number);
            }
        }
        else{
            $("#selectedTriple").remove();
        }
        $("#total_amount").text($total.toString());
    });
    $("#select_Familiar").change(function(){
        $price_Doble = Number($("#price_Doble").text());
        $number_Doble = Number($("#select_Doble").val());
        $price_Triple = Number($("#price_Triple").text());
        $number_Triple = Number($("#select_Triple").val());
        $price_Individual = Number($("#price_Individual").text());
        $number_Individual = Number($("#select_Individual").val());
        $total = Number($("#total_amount").text());
        $price = Number($("#price_Familiar").text());
        $number = Number($("#select_Familiar").val());
        $total = $price*$number+($price_Doble*$number_Doble)+($price_Triple*$number_Triple)+($price_Individual*$number_Individual);
        $total.toFixed(2);
        $("input[name=total_amount_submit]").val($total.toString());
        if($number>0){
            if(!$("#selectedFamiliar").length){
                $('<p id="selectedFamiliar">-Familiar: '+$number+'</p>').appendTo('#selected');
            }
            else{
                $("#selectedFamiliar").text('-Familiar: '+$number);
            }
        }
        else{
            $("#selectedFamiliar").remove();
        }
        $("#total_amount").text($total.toString());
    });

    $("#introduce_info").validate({
        rules: {
            name: "required",
            surname: "required",
            city: "required",
            address: "required",
            phone: {
                required:true,
                minlength: 7,
                maxlength: 15
            },
            email: {
                required: true,
                emailValidation:true
            }
        },
        messages: {
            name: "<label style='color:red'>Introduzca el nombre</label>",
            surname: "<label style='color:red'>Introduzca los apellidos</label>",
            address: "<label style='color:red'>Introduzca la dirección</label>",
            city: "<label style='color:red'>Introduzca su ciudad de residencia</label>",
            phone: {
                required: "<label style='color:red'>Introduzca su número de teléfono</label>",
                minlength: "<label style='color:red'>Introduzca al menos un número de 7 dígitos</label>",
                maxlength: "<label style='color:red'>Introduzca como máximo un número de 15 dígitos</label>"
            },
            email: {
                required: "<label style='color:red'>Introduzca el email</label>",
                emailValidation: "<label style='color:red'>El email no es valido</label>",
            },
        },
        submitHandler: function (form) {
            form.submit();
        }
    });

    $("#confirm").validate({
        rules: {
            cardholder: "required",
            card_number: "required",
            card_cvc: {
                required:true,
                maxlength: 3
            },

        },
        messages: {
            cardholder: "<label style='color:red'>Introduzca el titular de la tarjeta</label>",
            card_number: "<label style='color:red'>Introduzca el número de la tarjeta</label>",
            card_cvc: {
                required: "<label style='color:red'>Introduzca su código cvc</label>",
                maxlength: "<label style='color:red'>Introduzca como máximo un número de 3 dígitos</label>"
            }
        },
        submitHandler: function (form) {
            form.submit();
        }
    });
});
