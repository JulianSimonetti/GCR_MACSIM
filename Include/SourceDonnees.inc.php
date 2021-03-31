<?php

function SGBDConnect() {
    try {
        $connexion = new PDO('mysql:host=svrslam01;dbname=gsb', 'PPEgsb', 'gsb');
        $connexion->query('SET NAMES UTF8');
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Erreur !: ' . $e->getMessage() . '<br />';
        exit();
    }

    return $connexion;
}

function existeCompteVisiteur($username, $hashPwd) {
    try {
        //$cx = SGBDConnect();
        $requete = 'SELECT VIS_CODE, VIS_PASSE '
                . 'FROM VISITEUR '
                . 'WHERE VIS_CODE = \'' . $username . '\' AND VIS_PASSE = \'' . $hashPwd . '\'';
        $resultat = SGBDConnect()->query($requete);
    } catch (PDOException $e) {
        echo 'Erreur !: ' . $e->getMessage() . '<br />';
        exit();
    }

    return $resultat->rowCount() == 1 ? true : false;
}

function getInfosUtilisateur($username) {
    try {
        //$cx = SGBDConnect();
        $requete = 'SELECT VIS_PRENOM, VIS_NOM, (SELECT TRA_ROLE FROM travail WHERE TRA_VIS = \'' . $username . '\' ORDER BY TRA_DATAFF DESC LIMIT 1) AS \'VIS_ROLE\', REG_NOM AS \'VIS_REGION\' ' . "\n"
                . 'FROM (visiteur INNER JOIN v_region_visiteur ON VIS_CODE = TRA_VIS) '
                . 'INNER JOIN region ON REG_CODE = TRA_REG ' . "\n"
                . 'WHERE VIS_CODE = \'' . $username . '\'';
        $resultat = SGBDConnect()->query($requete);
    } catch (PDOException $e) {
        echo 'Erreur !: ' . $e->getMessage() . '<br />';
        exit();
    }
    return $resultat;
}

function getListePraticiens() {
    try {
        //$cx = SGBDConnect();
        $requete = 'SELECT PRA_NUM, CONCAT(PRA_NOM, \' \', PRA_PRENOM) AS \'PRA_NOMPRENOM\' '
                . 'FROM PRATICIEN '
                . 'ORDER BY PRA_NOM';
        $resultat = SGBDConnect()->query($requete);
    } catch (PDOException $e) {
        echo 'Erreur !: ' . $e->getMessage() . '<br />';
        exit();
    }
    return $resultat;
}

function getListePraticiensTab() {
    $res = getListePraticiens();
    $tab = $res->fetchAll(PDO::FETCH_NUM);
    return $tab;
}

function getListeMedicamentsTab() {
    $res = getTousMedicaments();
    $tab = $res->fetchAll(PDO::FETCH_NUM);
    return $tab;
}

function getListeFamilles() {
    try {
        //$cx = SGBDConnect();
        $requete = 'SELECT FAM_CODE, FAM_LIBELLE '
                . 'FROM FAMILLE '
                . 'ORDER BY FAM_LIBELLE';
        $resultat = SGBDConnect()->query($requete);
    } catch (PDOException $e) {
        echo 'Erreur !: ' . $e->getMessage() . '<br />';
        exit();
    }
    return $resultat;
}

function getListeMedicaments($famille) {
    try {
        //$cx = SGBDConnect();
        $requete = 'SELECT MED_CODE, MED_NOM '
                . 'FROM MEDICAMENT '
                . 'WHERE MED_FAMILLE = \'' . $famille . '\' '
                . 'ORDER BY MED_NOM';
        $resultat = SGBDConnect()->query($requete);
    } catch (PDOException $e) {
        echo 'Erreur !: ' . $e->getMessage() . '<br />';
        exit();
    }
    return $resultat;
}

function getTousMedicaments() {
    try {
        //$cx = SGBDConnect();
        $requete = 'SELECT MED_CODE, MED_NOM '
                . 'FROM MEDICAMENT '
                . 'ORDER BY MED_NOM';
        $resultat = SGBDConnect()->query($requete);
    } catch (PDOException $e) {
        echo 'Erreur !: ' . $e->getMessage() . '<br />';
        exit();
    }
    return $resultat;
}

function getInfosMedicaments($medicament) {
    try {
        //$cx = SGBDConnect();
        $requete = 'SELECT MED_CODE, MED_NOM, FAM_LIBELLE, MED_COMPO, MED_EFFETS, MED_CONTREINDIC '
                . 'FROM MEDICAMENT INNER JOIN FAMILLE ON MED_FAMILLE = FAM_CODE '
                . 'WHERE MED_CODE = \'' . $medicament . '\'';
        $resultat = SGBDConnect()->query($requete);
    } catch (PDOException $e) {
        echo 'Erreur !: ' . $e->getMessage() . '<br />';
        exit();
    }
    return $resultat;
}

?>