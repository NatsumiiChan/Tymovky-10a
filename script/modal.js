function zpusobove_okno(id){
    id = "#" + id;
    console.log(id);
    if (document.querySelector(id).classList.contains("okno_zpusobove") == true){
        document.querySelector(id).classList.add("okno_zaviraci");
        setTimeout(() => {document.querySelector(id).classList.remove("okno_zpusobove");document.querySelector(id).classList.remove("okno_zaviraci");if(document.querySelector(id).classList.contains("okno_zpusobove_true") == true){
            document.querySelector(id).classList.remove("okno_zpusobove_true");
        }
        }, 509);
        document.querySelector("#body").style.overflow = "overlay";
    }else{
        document.querySelector(id).classList.toggle("okno_zpusobove");
        zmenovac_velikosti(id);
        document.querySelector("#body").style.overflow = "hidden";
    }
}

window.onresize = zmenovac_velikosti;

function zmenovac_velikosti(id){
    if (document.querySelector(".kontejner_zpusobovy").clientHeight > (window.innerHeight-50)){
        document.querySelector(".okno_zpusobove").classList.add("okno_zpusobove_true");
    }else{
        if(document.querySelector(id).classList.contains("okno_zpusobove_true") == true){
            document.querySelector(id).classList.remove("okno_zpusobove_true");
        }
    }
}