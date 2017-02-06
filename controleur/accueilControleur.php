<?php
require_once 'modele/accueilModele.php';
function liste() {
    $idRequete=listeaccueil();
    require_once 'vue/accueilVue.php';
}


