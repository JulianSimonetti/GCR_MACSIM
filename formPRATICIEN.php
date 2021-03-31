<?php

?>
<div id="bas">
    <h1> Praticiens </h1>
    <form name="formListeRecherche" method="post" action="index">
        <input type="hidden" name="action" value="22" />
        <?php
        $selected = (isset($_POST['cboListe']) ? $_POST['cboListe'] : 0); ?>
        <?= formSelectDepuisRecordset('Choisir praticien', 'cboListe', 'listePraticien', getListePraticiens(), $selected, 10) ?>
        <?= formBoutonSubmit("btnSubmit", "btnSubmit", "OK", 20) ?>
    </form>
    <form name="formPraticien" id="formPraticien">
        <?php
        if (isset($_POST['cboListe'])){
            echo getInfosPraticien($_POST['cboListe']);
        }
        ?>
    </form>
</div>