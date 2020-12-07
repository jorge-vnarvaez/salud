$("#index").ready(function () {

    $(document).tooltip({
        position: {my: "left+25px", at: "right"}
    });

    $("#slider_peso").slider({
        min: 20,
        max: 300,
        step: 0.1,
        value: 45,
        slide: function (event, ui) {
            $("#peso_kg").val(ui.value);
        }
    });

    $("#peso_kg").val($("#slider_peso").slider("value"));



    $("#slider_altura").slider({
        min: 1,
        max: 2,
        step: 0.01,
        value: 1.30,
        slide: function (event, ui) {
            $("#estatura_mt").val(ui.value);
        }
    });

    $("#estatura_mt").val($("#slider_altura").slider("value"));

    $("#fecha_nacimiento").datepicker({
        changeYear: true,
        changeMonth: true,
        yearRange: "1947:2018",
        dateFormat: "yy-mm-dd"
    });

  



})








