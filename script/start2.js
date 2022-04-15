function zpusobove_okno(){
    document.querySelector("#zpusobovy_nositel").classList.toggle("okno_zpusobove")
}

document.querySelector(".zahlavi").innerHTML += "<img src='../images/" + (Math.floor(Math.random() * 10) + 1) + ".jpg' alt='HOME' class='home_img'>";
