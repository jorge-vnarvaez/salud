$(document).ready(function () {
    // Esta funcion es llamada desde index.php y vistaTabla.php
    cargar('datosPersona.php', datosPersona);

    // Esta funcion es llamada desde vistaTabla.php
    cargar('clasificarPersona.php', clasificarPersona);

    //Esta funcion es llamada desde misLecturas.php
    cargar("cargarLecturas.php", cargarLecturas);

    $("#eliminar_todos").click(eliminarLectura);
})



function eliminarLectura(id_lectura) {
    /* Revisar correcion de funcion e introducir fetch
    console.log(id_lectura);
    */
}


function cargar(url, cFunction) {

    fetch(url)
        .then(response => response.json())
        .catch(error => console.log("Error: " + error))
        .then(data => cFunction(data))

}


function datosPersona(data) {

    let persona = data;

    $("#nombre_persona").text(persona[0].nombre);
}


function cargarLecturas(data) {

    let lecturas = data;

    let tabla_lecturas = $("#tabla_lecturas");

    lecturas.forEach(lectura => {

        let fila = $("<tr></tr>", {
            append: [$("<td></td>").text(lectura.fecha),
            $("<td></td>").text(lectura.imc),
            $("<td></td>").text(lectura.tmb)],
            click: function () {
                eliminarLectura(lectura.id_lectura);
            }
        });

        fila.appendTo(tabla_lecturas);

    });

}


function clasificarPersona(data) {

    let lectura = data

    $("#clasi").text(lectura[0].imc);
    var imc = $("#clasi").text();

    if (imc < 16.00) {
        $("#clasificacion_1").css({ "color": "var(--blanco)", "background-color": "var(--secundario)" });
    } else if (imc >= 16.00 && imc <= 16.99) {
        $("#clasificacion_2").css({ "color": "var(--blanco)", "background-color": "var(--secundario)" });
    } else if (imc >= 17.00 && imc <= 18.49) {
        $("#clasificacion_3").css({ "color": "var(--blanco)", "background-color": "var(--secundario)" });
    } else if (imc >= 18.50 && imc <= 24.99) {
        $("#clasificacion_4").css({ "color": "var(--blanco)", "background-color": "var(--secundario)" });
    } else if (imc >= 25 && imc <= 29.99) {
        $("#clasificacion_5").css({ "color": "var(--blanco)", "background-color": "var(--secundario)" });
    } else if (imc >= 30 && imc <= 34.99) {
        $("#clasificacion_6").css({ "color": "var(--blanco)", "background-color": "var(--secundario)" });
    } else if (imc >= 35 && imc <= 39.99) {
        $("#clasificacion_7").css({ "color": "var(--blanco)", "background-color": "var(--secundario)" });
    } else if (imc >= 40) {
        $("#clasificacion_8").css({ "color": "var(--blanco)", "background-color": "var(--secundario)" });
    }

}



