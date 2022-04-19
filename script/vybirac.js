function vybirac(hledac){
    document.querySelector("#"+hledac).classList.toggle("nic");
    document.querySelector("#"+hledac+"_vybirac").classList.toggle("krizek_neaktivni");
}