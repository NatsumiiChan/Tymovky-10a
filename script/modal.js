function zpusobove_okno(){
    if (document.querySelector("#zpusobovy_nositel").classList.contains("okno_zpusobove") == true){
        document.querySelector("#zpusobovy_nositel").classList.add("okno_zaviraci");
        setTimeout(() => {document.querySelector("#zpusobovy_nositel").classList.remove("okno_zpusobove");document.querySelector("#zpusobovy_nositel").classList.remove("okno_zaviraci"); 
        }, 509);
        document.querySelector("#body").style.height = "auto";
        document.querySelector("#body").style.overflow = "auto";
        document.querySelector("#body").style.width = "auto";
    }else{
        document.querySelector("#zpusobovy_nositel").classList.toggle("okno_zpusobove");
        zmenovac_velikosti();
        document.querySelector("#body").style.height = "100vh";
        document.querySelector("#body").style.overflow = "hidden";
        document.querySelector("#body").style.width = "calc(100vw - 5px)";
    }
}

window.onresize = zmenovac_velikosti;

function zmenovac_velikosti(){
    if (document.querySelector(".kontejner_zpusobovy").clientHeight > (window.innerHeight-50)){
        document.querySelector(".okno_zpusobove").classList.add("okno_zpusobove_true");
    }else{
        if(document.querySelector("#zpusobovy_nositel").classList.contains("okno_zpusobove") == true){
            document.querySelector(".okno_zpusobove").classList.remove("okno_zpusobove_true");
        }
    }
}