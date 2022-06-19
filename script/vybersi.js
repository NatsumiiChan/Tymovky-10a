var predchozi = ""

function vybersi_druh(hledac){
    if (predchozi == ""){
        document.querySelector("#"+hledac).classList.toggle("nic");
        document.querySelector("#tlacitko_"+hledac).classList.toggle("vybersi_tedka");
        predchozi = hledac;
    }
    else if (predchozi == hledac){
        document.querySelector("#"+hledac).classList.toggle("nic");
        document.querySelector("#tlacitko_"+hledac).classList.toggle("vybersi_tedka");
        predchozi = "";
    }
    else{
        document.querySelector("#"+predchozi).classList.toggle("nic");
        document.querySelector("#"+hledac).classList.toggle("nic");
        document.querySelector("#tlacitko_"+hledac).classList.toggle("vybersi_tedka");
        document.querySelector("#tlacitko_"+predchozi).classList.toggle("vybersi_tedka");
        predchozi = hledac;
    }
}

function vybersi_ab(kategorie){
    if (kategorie == "triznaky"){

    }   
    else if (kategorie == "ctyrznaky"){

    }
    else{
        pass
    }
}

function vybersi_ranzirka(kategorie){
    if (kategorie == "svetelna"){

    }   
    else if (kategorie == "mechanicka"){

    }
    else{
        pass
    }
}