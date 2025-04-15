(function(){
    console.log("carrousel.js")
    let hero__radio__input = document.querySelectorAll(".hero__radio__input")
    console.log("hero__radio__input.length =" + hero__radio__input.length )

    hero__radio__input.forEach(elm=> {

            // Retirer la classe 'active' de toutes les images
            heroImages.forEach(img => img.classList.remove('active'))

            // Ajouter la classe 'active' à l'image correspondante
            heroImages[index].classList.add('active')
    })

})()