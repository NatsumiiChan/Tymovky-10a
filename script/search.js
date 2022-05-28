function update() {
    let c1 = document.uwuForm.color1.value;
    document.getElementById('uwu1').style.backgroundColor=c1;
    let c2 = document.uwuForm.color2.value;
    document.getElementById('uwu2').style.backgroundColor=c2;
    let c3 = document.uwuForm.color3.value;
    document.getElementById('uwu3').style.backgroundColor=c3;
    setTimeout("update()", 10);
}