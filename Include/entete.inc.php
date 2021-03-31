<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>GSB : Suivi de la Visite médicale </title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="Styles/gcr.css" />
        
        <script src="JavaScript/jquery-3.6.0.min.js"></script>
        <?php if (isset($jsFichier)) {
            foreach ($jsFichier as &$fichier) {
                ?>
        <script src="<?=$fichier?>"></script>
        <?php
            }
        } ?>
    </head>
    <body>
        <div id="haut">
            <!-- <h1><img src="Images/logo.jpg" alt="logo" width="100" height="60"/>Gestion des visites</h1> -->
            <h1><a href="index.php"><img src="Images/logo.jpg" alt="logo" width="100" height="60"/></a>Gestion des visites</h1>
        </div><!-- FIN DIV HAUT -->
        <div id="gauche">
            <p id="infosUtil">
                <?= $_SESSION['utilPrenom'].' '.$_SESSION['utilNom'] ?><br />
                <?= $_SESSION['utilRole'] ?><br />
                Région <?= $_SESSION['utilRegion'] ?>
            </p>
            <form id="frmLogout" name="frmLogout" method="post" action="index.php" hidden="hidden">
                <?= formInputHidden('action', 'action', AUTH_LOGOUT); ?>
            </form>
            <input type="submit" form="frmLogout" value="Déconnexion" />
            <h2>Outils</h2>
            <ul>
                <li>Comptes-Rendus</li>
                <li style="list-style-type:none">
                    <ul>
                        <li><a href="index.php?action=11">Nouveaux</a></li>
                        <li>Consulter</li>
                    </ul>
                </li>
                <li>Consulter</li>
                <li style="list-style-type:none">
                    <ul>
                        <li><a href="index.php?action=211">Médicaments</a></li>
                        <li><a href="index.php?action=22">Praticiens</a></li>
                        <li><a href="index.php?action=23">Autres visiteurs</a></li>
                    </ul>
                </li>    
            </ul>
        </div><!-- FIN DIV GAUCHE -->
        <div id="droite">