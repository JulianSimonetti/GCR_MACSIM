<?php

require_once './Include/entete2.inc.php';
?>

<form id="frmIdentification" name="frmIdentification" method="post" action="index.php">
    <fieldset>
        <legend>Identifiez-vous</legend>
        <?= formInputText('Utilisateur', 'txtUsername', 'txtUsername', (isset($_POST['txtUsername']) ? $_POST['txtUsername'] : ''), 20, 50, 10, true); ?>
        <?= formInputPassword('Mot de passe', 'txtPassword', 'txtPassword', '', 20, 255, 20, true); ?>
        <?= formInputHidden('action', 'action', AUTH_FRM); ?>
        <?= formBoutonSubmit('btnSubmit', 'btnSubmit', 'Valider', 30); ?>
        <p class="erreur" <?= (isset($_POST['authError']) ? '' : 'hidden="hidden"') ?>>
            Utilisateur et/ou mot de passe invalide(s).
        </p>
    </fieldset>
</form>