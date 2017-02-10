<?php
require_once 'modele/vendeurModele.php';
function liste() {
    $idRequete=listeVendeurs();
    require_once 'vue/vendeurVueListe.php';
}


