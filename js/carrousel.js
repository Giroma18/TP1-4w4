(function(){
    console.log("carrousel.js")
    let hero__radio__input = document.querySelectorAll(".hero__radio__input")
    let heroCarrousels =  document.querySelectorAll(".hero__carrousel");
    //console.log("hero__radio__input.length =" + hero__radio__input.length )

    hero__radio__input.forEach((elm, index) => {
        elm.addEventListener("mousedown", () => {
            // Retirer la classe active de tous les carrousels
            heroCarrousels.forEach(carrousel => {
                carrousel.classList.remove("hero__carrousel--active");
            });

            // Ajouter la classe active à l'image correspondante
            if (heroCarrousels[index]) {
                heroCarrousels[index].classList.add("hero__carrousel--active");
            }
        });
    });

})()