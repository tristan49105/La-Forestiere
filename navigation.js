let menu = document.getElementsByClassName("menu"),
    btn = document.getElementsByClassName("btn"),
    btnAccueil = document.getElementById("Accueil");
    menuAccueil = document.getElementById("ACCUEIL");

    btnAccueil.className += " active";
    
    for (let i = 0 ; i < btn.length ; i++) {

        // On ferme tous les menus

        menu[i].className += " closed";

        // Activation du bouton cliqué

        btn[i].addEventListener("click", function() {

        var currentBtn = document.getElementsByClassName("active");

        if (currentBtn.length > 0) {
            currentBtn[0].className = currentBtn[0].className.replace(" active", "");
            }

        this.className += " active";

        // Selection du menu cliqué

        let MenuChoisis = this.id;
        MenuChoisis = String.prototype.toUpperCase.call(MenuChoisis);
        MenuChoisis = document.getElementById(MenuChoisis);
        console.log(MenuChoisis);

        // Activation du menu cliqué

        var currentMenu = document.getElementsByClassName("opened");

        if (currentMenu.length > 0) {
            currentMenu[0].className = currentMenu[0].className.replace(" opened", " closed");
            }
        
            MenuChoisis.classList.remove("closed");
            MenuChoisis.classList.add("opened");
                });
            }