var zelena = 0;
var zluta = 0;
var bila = 0;
var cervena = 0;
var indikator = 1;

function autoblok_indikator(){
    if (indikator < 10){
        indikator += 2
    }
    else if (indikator < 14){
        indikator += 1
    }
    else{
        indikator = 3
    }

    document.querySelector("#cislice").innerHTML = indikator;
}

function autoblok_strelnice(){
    document.querySelector("#dalsi").classList.toggle("strelnice_ab");
}

function autoblok_navest(barva){
    if (barva == "zelena"){
        if (zelena == 0){
            document.querySelector("#zelena").classList.add("volno");
            zelena = 1;
        }
        else if(zelena == 1){
            document.querySelector("#zelena").classList.remove("volno");
            document.querySelector("#zelena").classList.add("osmdesat");
            zelena = 2;
        }
        else if(zelena == 2){
            document.querySelector("#zelena").classList.remove("osmdesat");
            document.querySelector("#zelena").classList.add("sto");
            zelena = 3;
        }
        else{
            document.querySelector("#zelena").classList.remove("sto");
            zelena = 0;
        }
    }
    else if(barva == "cervena"){
        if (cervena == 0){
            document.querySelector("#cervena").classList.add("stuj");
            cervena = 1;
        }
        else{
            document.querySelector("#cervena").classList.remove("stuj");
            cervena = 0;
        }
    }
    else if(barva == "zluta"){
        if (zluta == 0){
            document.querySelector("#zluta").classList.add("vystraha");
            zluta = 1;
        }
        else if(zluta == 1){
            document.querySelector("#zluta").classList.remove("vystraha");
            document.querySelector("#zluta").classList.add("ctyricet");
            zluta = 2;
        }
        else if(zluta == 2){
            document.querySelector("#zluta").classList.remove("ctyricet");
            document.querySelector("#zluta").classList.add("sedesat");
            zluta = 3;
        }
        else{
            document.querySelector("#zluta").classList.remove("sedesat");
            zluta = 0;
        }
    }
    else if(barva == "bila"){
        if (bila == 0){
            document.querySelector("#bila").classList.add("opakovana");
            bila = 1;
        }
        else{
            document.querySelector("#bila").classList.remove("opakovana");
            bila = 0;
        }
    }
}