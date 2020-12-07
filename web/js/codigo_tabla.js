function clasificarPersona(rut) {
    
    var xhttp = new XMLHttpRequest();
    var imc = 0;
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            document.getElementById("clasi").innerHTML = xhttp.responseText
        }
    }

    xhttp.open("GET", "clasificarPersona.php?rut="+rut, true);
    xhttp.send();

    if (imc < 16.00) {
        document.getElementById("clasificacion_1").style.backgroundColor = "#4AE300";
    } else if (imc  >= 16.00 && imc  <= 16.99) {
        document.getElementById("clasificacion_2").style.backgroundColor = "#4AE300";
    } else if (imc  >= 17.00 && imc  <= 18.49) {
        document.getElementById("clasificacion_3").style.backgroundColor = "#4AE300";
    } else if (imc >= 18.50 && imc <= 24.99) {
        document.getElementById("clasificacion_4").style.backgroundColor = "#4AE300";
    } else if (imc >= 25 && imc <= 29.99) {
        document.getElementById("clasificacion_5").style.backgroundColor = "#4AE300";
    } else if (imc >= 30 && imc <= 34.99) {
        document.getElementById("clasificacion_6").style.backgroundColor = "#4AE300";
    } else if (imc >= 35 && imc <= 39.99) {
        document.getElementById("clasificacion_7").style.backgroundColor = "#4AE300";
    } else if (imc >= 40) {
        document.getElementById("clasificacion_8").style.backgroundColor = "#4AE300";
    }
}