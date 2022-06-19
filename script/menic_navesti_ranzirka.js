var bila = 0;
var modra = 0;

function ranzirka_skupina(){
    document.querySelector("#dalsi").classList.toggle("skupina_true");
}

function ranzirka_navest(barva){
    if (barva == "bila"){
        if (bila == 0){
            document.querySelector("#bila").classList.add("posun_dovolen");
            bila = 1;
        }
        else{
            document.querySelector("#bila").classList.remove("posun_dovolen");
            bila = 0;
        }
    }
    else if(barva == "modra"){
        if (modra == 0){
            document.querySelector("#modra").classList.add("posun_zakazan");
            modra = 1;
        }
        else{
            document.querySelector("#modra").classList.remove("posun_zakazan");
            modra = 0;
        }
    }
}