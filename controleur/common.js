/*
 * fonction pour faire
 */


function initialiseProductFiche(idProduct){
    $.ajax({
        type:"GET",
        url:'controleur/produitControleur.php',
        dataType:"json",
        data:{idProduct : idProduct},
        success: function(response) {
            console.log(response);
            //afficheProductFiche(response);
        },
        error: function(erreur){
            console.log("Erreur lors de l'appel à initialiseProductFiche()"+ erreur);
        }
    });
}

initialiseProductFiche(1016);


