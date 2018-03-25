document.getElementById("defaultOpen").click();
function op(evt, bname) {
    // Declare all variables
    var i, main_form, obutton, pbutton;

    // Get all elements with class="main_form" and hide them
    main_form = document.getElementsByClassName("main_form");
    for (i = 0; i < main_form.length; i++) {
        main_form[i].style.display = "none";
    }

    obutton = document.getElementsByClassName("obutton");
    for (i = 0; i < obutton.length; i++) {
        obutton[i].className = obutton[i].className.replace(" active", "");
    }
    pbutton = document.getElementsByClassName("pbutton");
    for (i = 0; i < pbutton.length; i++) {
        pbutton[i].className = pbutton[i].className.replace(" active", "");
    }

    document.getElementById(bname).style.display = "block";
    evt.currentTarget.className += " active";
}
