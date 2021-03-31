<?php
session_start();

function valideInfosCompteUtilisateur() {
    $compteOK = existeCompteVisiteur($_POST['txtUsername'], md5($_POST['txtPassword']));
    return $compteOK;
}

function ouvreSessionUtilisateur($username) {
    $resultat = getInfosUtilisateur($username);
    $infos = $resultat->fetch(PDO::FETCH_ASSOC);
    $_SESSION['utilId'] = $username;
    $_SESSION['utilPrenom'] = $infos['VIS_PRENOM'];
    $_SESSION['utilNom'] = $infos['VIS_NOM'];
    $_SESSION['utilRole'] = $infos['VIS_ROLE'];
    $_SESSION['utilRegion'] = $infos['VIS_REGION'];
}

function estSessionUtilisateurOuverte() {
    return isset($_SESSION['utilId']);
}

function fermeSessionUtilisateur() {
    session_destroy();
}