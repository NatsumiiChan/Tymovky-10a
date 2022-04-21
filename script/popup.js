function vysunSe(){
    if (document.querySelector("#interier_popupu").classList.contains("kontejner_vyberovy")  == true){
        document.querySelector("#interier_popupu").classList.add("kontejner_vyberovy_zaviraci");
        setTimeout(() => {document.querySelector("#interier_popupu").classList.remove("kontejner_vyberovy");document.querySelector("#interier_popupu").classList.remove("kontejner_vyberovy_zaviraci");document.querySelector("#nastavovani").classList.remove("nastaveni_true");
        }, 500);
    } else{
        document.querySelector("#interier_popupu").classList.add("kontejner_vyberovy");
        document.querySelector("#nastavovani").classList.add("nastaveni_true");
    }
}