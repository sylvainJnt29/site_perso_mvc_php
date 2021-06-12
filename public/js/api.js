//                                      Mini projet, utilisation d'une API pour récupérer le prix du Bitcoin 

const url = "https://blockchain.info/ticker";

function recupererPrix(){

    // Créer une requête :
    let requete = new XMLHttpRequest(); // créé un objet
    requete.open('GET', url); // Premier paramètre GET / POST, deuxième paramètre l'URL
    requete.responseType = 'json'; // On attend du JSON
    requete.send(); // On envoie notre requête

    // Dès que l'on reçoie une réponse, on éxecute une fonction
    requete.onload = function(){
        if(requete.readyState === XMLHttpRequest.DONE) {
            if(requete.status === 200) {
                let reponse = requete.response; // On stocke la réponse
                let prixEnEuros = reponse.EUR.last;
                document.querySelector('#price_label').textContent = prixEnEuros;
            }
            else{
                alert('Un problème est survenu, merci de revenir plus tard.');
            }
        }
    }
}

setInterval(recupererPrix,1000);