(function(){
    // console.log("carrousel.js")
    // let hero__radio__input = document.querySelectorAll(".hero__radio__input")
    // let heroCarrousels =  document.querySelectorAll(".hero__carrousel");
    

    // hero__radio__input.forEach((elm, index) => {
    //     elm.addEventListener("mousedown", () => {
    //         // Retirer la classe active de tous les carrousels
    //         heroCarrousels.forEach(carrousel => {
    //             carrousel.classList.remove("hero__carrousel--active");
    //         });

    //         // Ajouter la classe active à l'image correspondante
    //         if (heroCarrousels[index]) {
    //             heroCarrousels[index].classList.add("hero__carrousel--active");
    //         }
    //     });
    // });

    //Changement de l'image toute les 5 secondes
    //setInterval(hero__radio__input, 5000);

        const radios = document.querySelectorAll(".hero__radio__input");
        const labels = document.querySelectorAll(".hero__radio__label");
        const slides = document.querySelectorAll(".hero__carrousel");
        let index = 0;
        const total = slides.length;
    
        function updateCarrousel(newIndex) {
            slides.forEach((slide, i) => {
                slide.classList.toggle("hero__carrousel--active", i === newIndex);
                radios[i].checked = i === newIndex;
                labels[i] = i ===newIndex;
            });
            index = newIndex;
        }
    
        // Boucle automatique
        setInterval(() => {
            const nextIndex = (index + 1) % total;
            updateCarrousel(nextIndex);
        }, 5000); // toutes les 5 secondes
    
        // Interaction manuelle
        labels.forEach((label, i) => {
            label.addEventListener("click", () => {
                updateCarrousel(i);
            });
        });
})()