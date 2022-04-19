function zpusobove_okno(){
    if (document.querySelector("#zpusobovy_nositel").classList.contains("okno_zpusobove") == true){
        document.querySelector("#zpusobovy_nositel").classList.add("okno_zaviraci");
        setTimeout(() => {document.querySelector("#zpusobovy_nositel").classList.remove("okno_zpusobove");document.querySelector("#zpusobovy_nositel").classList.remove("okno_zaviraci");if(document.querySelector("#zpusobovy_nositel").classList.contains("okno_zpusobove_true") == true){
            document.querySelector("#zpusobovy_nositel").classList.remove("okno_zpusobove_true");
        }
        }, 509);
        document.querySelector("#body").style.height = "auto";
        document.querySelector("#body").style.overflow = "overlay";
    }else{
        document.querySelector("#zpusobovy_nositel").classList.toggle("okno_zpusobove");
        zmenovac_velikosti();
        document.querySelector("#body").style.height = "100vh";
        document.querySelector("#body").style.overflow = "hidden";
    }
}

window.onresize = zmenovac_velikosti;

function zmenovac_velikosti(){
    if (document.querySelector(".kontejner_zpusobovy").clientHeight > (window.innerHeight-50)){
        document.querySelector(".okno_zpusobove").classList.add("okno_zpusobove_true");
    }else{
        if(document.querySelector("#zpusobovy_nositel").classList.contains("okno_zpusobove_true") == true){
            document.querySelector("#zpusobovy_nositel").classList.remove("okno_zpusobove_true");
        }
    }
}