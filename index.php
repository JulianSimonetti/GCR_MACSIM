<?php
// Util : a131
// MDP : u532YQf



//Inclure méthodes et constantes
require_once './Include/SourceDonnees.inc.php';
require_once './Include/Bibliotheque01.inc.php';
require_once './Include/Securite.inc.php';
require_once './Include/consts.inc.php';

$jsFichier = ['JavaScript/crVisite.js'];

if (isset($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
    if (estSessionUtilisateurOuverte() && $_REQUEST['action'] != AUTH_FRM && $_REQUEST['action'] != AUTH_LOGOUT) {
        require_once './Include/entete.inc.php';
    }
    else
    {
        if ($_REQUEST['action'] != AUTH_FRM)
        {
            require_once 'Identif.php';
            exit();
        }
    }
} else {
    $action = null;
    require_once 'Identif.php';
}



switch ($action) {
    case AUTH_FRM:
        if (!valideInfosCompteUtilisateur()) {
            $_POST['authError'] = true;
            require_once 'Identif.php';
        } else {
            ouvreSessionUtilisateur($_POST['txtUsername']);
            header('location: index.php?action=' . CR_NV);
            exit();
        }
        break;

    case AUTH_LOGOUT:
        fermeSessionUtilisateur();
        header('location: index.php');
        break;

    case CR_NV:
        require_once 'formRAPPORT_VISITE.php';
        break;

    case CR_CONS:
        break;

    case CS_MED_FAM:
        require_once 'formMEDICAMENT.php';
        break;

    case CS_MED_NOM:
        require_once 'formMEDICAMENT.php';
        break;

    case CS_MED_FICHE:
        require_once 'formMEDICAMENT.php';
        break;

    case CS_PRAT:
        require_once 'formPRATICIEN.php';
        break;

    case CS_AV:
        require_once 'formVISITEUR.php';
        break;

    default:
        break;
}


require_once './Include/pied.inc.php';
?>
