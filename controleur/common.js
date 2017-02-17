/*
 * fonction pour faire
 */


function initialiseProductFiche(idProduct){
    $.ajax({
        type:"POST",
        url:'modele/produitModele.php',
        dataType:"json",
        data:{reference : idProduct},
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


