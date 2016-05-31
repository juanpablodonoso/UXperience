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
        $("input[name=total_amount_submit]").val($total.toString());
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
        $("input[name=total_amount_submit]").val($total.toString());
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
        $("input[name=total_amount_submit]").val($total.toString());
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
        $("input[name=total_amount_submit]").val($total.toString());
        $("#total_amount").text($total.toString());
    });
});
