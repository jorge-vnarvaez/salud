function eliminarLectura(id_lectura) {
    
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            if(this.responseText) {
                alert("Registro eliminado con exito");
                window.location.href = window.location.href;
            } 
        }
    }

    xhttp.open("GET", "eliminarLectura.php?id_lectura="+id_lectura, true);
    xhttp.send();
}


function cargarXML(url, cFunction) {

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            cFunction(this);
        }
    }

    xhttp.open("GET", url, true);
    xhttp.send();

}


function datosPersona(xhttp) {
    document.getElementById("nombre_persona").innerHTML = xhttp.responseText;
}


function cargarLecturas(xhttp) {
    document.getElementById("tabla_lecturas").innerHTML = xhttp.responseText;
}


function clasificarPersona(xhttp) {
    
 
    var imc = document.getElementById("clasi").innerHTML = xhttp.responseText


    if (imc < 16.00) {
        document.getElementById("clasificacion_1").style.backgroundColor = "#A4F8F8";
    } else if (imc  >= 16.00 && imc  <= 16.99) {
        document.getElementById("clasificacion_2").style.backgroundColor = "#A4F8F8";
    } else if (imc  >= 17.00 && imc  <= 18.49) {
        document.getElementById("clasificacion_3").style.backgroundColor = "#A4F8F8";
    } else if (imc >= 18.50 && imc <= 24.99) {
        document.getElementById("clasificacion_4").style.backgroundColor = "#A4F8F8";
    } else if (imc >= 25 && imc <= 29.99) {
        document.getElementById("clasificacion_5").style.backgroundColor = "#A4F8F8";
    } else if (imc >= 30 && imc <= 34.99) {
        document.getElementById("clasificacion_6").style.backgroundColor = "#A4F8F8";
    } else if (imc >= 35 && imc <= 39.99) {
        document.getElementById("clasificacion_7").style.backgroundColor = "#A4F8F8";
    } else if (imc >= 40) {
        document.getElementById("clasificacion_8").style.backgroundColor = "#A4F8F8";
    }

}



