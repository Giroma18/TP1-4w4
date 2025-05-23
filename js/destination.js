(function(){

    let categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée

    const domaine = window.location.href
    //methode = categorie
    let apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
    let apiUrlMethode = `${domaine}wp-json/wp/v2/posts?search=${methodeId}`;

    const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");

    mon_fetch(apiUrl);

    categorie__ul__li.forEach(li => 
    {

        li.addEventListener("mousedown", function()
        {

            // Enlève la classe "clicked" de tous les éléments <li>
            categorie__ul__li.forEach(li => li.classList.remove('clicked'));

            // Ajoute la classe Clicked a le li cliqué
            li.classList.add('clicked');

            categoryId = li.dataset.id;

            apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;

            mon_fetch(apiUrl);
        })
        
    })

    function mon_fetch(apiUrl){
    
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => 
            {
                const destinationList = document.querySelector('.destination__list');
                let title = document.querySelectorAll('.destination h3');
                destinationList.innerHTML = "";

                //let destinationTitre = document.querySelector('.destination__titre');
                //destinationTitre =
                //li.innerHTML = ""

                data.forEach(article => 
                {

                    const articleElement = document.createElement('div');
                    articleElement.innerHTML = `
                        <label for="rad-${article.id}"><h3>${article.title.rendered} &#9660;</h3></label>
                        <input type="checkbox" id="rad-${article.id}" class="article-checkbox" />
                        
                        <div class="destination__info">
                        ${article.excerpt.rendered}
                        <a href="${article.link}">Lire plus</a>
                        </div>
                        `;
                        destinationList .appendChild(articleElement);

    
                });
            })
                .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    }
})()

