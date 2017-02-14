<?php
require_once 'modele/Login.php';
function liste() {
    $idRequete=listeProduits();
    require_once 'vue/LoginVue.php';
}
function connexion() {
    $idRequete=authentification();
    require_once 'vue/LoginVue.php';
}

