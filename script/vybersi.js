var predchozi = ""
var predchozi_kategorie = ""

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
    if (predchozi_kategorie == ""){
        document.querySelector("#tlacitko_"+kategorie).classList.toggle("vybersi_tedka");
        predchozi_kategorie = kategorie;
    }
    else if (predchozi_kategorie == kategorie){
        document.querySelector("#tlacitko_"+kategorie).classList.toggle("vybersi_tedka");
        predchozi_kategorie = "";
    }
    else{
        document.querySelector("#tlacitko_"+kategorie).classList.toggle("vybersi_tedka");
        document.querySelector("#tlacitko_"+predchozi_kategorie).classList.toggle("vybersi_tedka");
        predchozi_kategorie = kategorie;
    }
}

function vybersi_ranzirka(kategorie){
    if (predchozi_kategorie == ""){
        document.querySelector("#tlacitko_"+kategorie).classList.toggle("vybersi_tedka");
        predchozi_kategorie = kategorie;
    }
    else if (predchozi_kategorie == kategorie){
        document.querySelector("#tlacitko_"+kategorie).classList.toggle("vybersi_tedka");
        predchozi_kategorie = "";
    }
    else{
        document.querySelector("#tlacitko_"+kategorie).classList.toggle("vybersi_tedka");
        document.querySelector("#tlacitko_"+predchozi_kategorie).classList.toggle("vybersi_tedka");
        predchozi_kategorie = kategorie;
    }
}