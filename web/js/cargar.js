function eliminarLectura(id_lectura) {

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            alert("Registro eliminado con exito");
            window.location.href = window.location.href;

        }
    }

    xhttp.open("GET", "eliminarLectura.php?id_lectura=" + id_lectura, true);
    xhttp.send();
}


function cargar(url, cFunction) {

    $.ajax({
        type: "POST",
        url: url,
        complete: function (xhr) {
            cFunction(xhr);
        }
    })

}


function datosPersona(xhr) {
    $("#nombre_persona").text(xhr.responseText);
}


function cargarLecturas(xhr) {
    $("#tabla_lecturas").html(xhr.responseText);
}


function clasificarPersona(xhr) {


    $("#clasi").text(xhr.responseText);
    var imc = $("#clasi").text();

    if (imc < 16.00) {
        $("#clasificacion_1").css("background-color", "#A4F8F8");
    } else if (imc >= 16.00 && imc <= 16.99) {
        $("#clasificacion_2").css("background-color", "#A4F8F8");
    } else if (imc >= 17.00 && imc <= 18.49) {
        $("#clasificacion_3").css("background-color", "#A4F8F8");
    } else if (imc >= 18.50 && imc <= 24.99) {
        $("#clasificacion_4").css("background-color", "#A4F8F8");
    } else if (imc >= 25 && imc <= 29.99) {
        $("#clasificacion_5").css("background-color", "#A4F8F8");
    } else if (imc >= 30 && imc <= 34.99) {
        $("#clasificacion_6").css("background-color", "#A4F8F8");
    } else if (imc >= 35 && imc <= 39.99) {
        $("#clasificacion_7").css("background-color", "#A4F8F8");
    } else if (imc >= 40) {
        $("#clasificacion_8").css("background-color", "#A4F8F8");
    }

}



