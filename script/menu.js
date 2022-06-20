function vysun_menu(){
    document.querySelector("#menu").classList.add("menu_viditelne");
    document.querySelector("#body").style.overflow = "hidden";
}

function zasun_menu(){
    document.querySelector("#flexy_menu").classList.add("flex_pro_menu_zavirani");
    document.querySelector("#menu_cernota").classList.add("zavirac_menu_zavirani");
    setTimeout(() => {document.querySelector("#flexy_menu").classList.remove("flex_pro_menu_zavirani");
    document.querySelector("#menu_cernota").classList.remove("zavirac_menu_zavirani");
    document.querySelector("#menu").classList.remove("menu_viditelne")
    }, 500);
    document.querySelector("#body").style.overflow = "overlay";
}