    <hr/>
    <form name="formMedicament" method="post" action="recupMEDICAMENT.php">
        <?php $infosMedicament = getInfosMedicaments($_POST['cboMedic'])->fetch(PDO::FETCH_ASSOC); ?>
        <label for="txtDe---------------------------------------------------------------------------potLegal">DEPOT LEGAL : </label><input id="txtDepotLegal" type="text" size="10" name="MED_DEPOTLEGAL" class="zone" readonly="readonly" value="<?= $infosMedicament['MED_CODE']?>"/><br/>
        <label for="txtNom">NOM COMMERCIAL : </label><input id="txtNom"  type="text" size="25" name="MED_NOMCOMMERCIAL" class="zone" readonly="readonly" value="<?= $infosMedicament['MED_NOM']?>"/><br/>
        <label for="txtFamille">FAMILLE : </label><input id="txtFamille" type="text" size="25" name="FAM_CODE" class="zone" readonly="readonly" value="<?= $infosMedicament['FAM_LIBELLE']?>"/><br/>
        <?= formTextArea('COMPOSITION', 'txtComposition', 'txtComposition', $infosMedicament['MED_COMPO'], 50, 5, 255, 150, true) ?><br/>
        <?= formTextArea('EFFETS', 'txtEffets', 'txtEffets', $infosMedicament['MED_EFFETS'], 50, 5, 255, 160, true) ?><br/>
        <?= formTextArea('CONTRE INDIC.', 'txtContreIndic', 'txtContreIndic', $infosMedicament['MED_CONTREINDIC'], 50, 5, 255, 170, true) ?><br/>
        <label for="txtPrixEchantillon">PRIX ECHANTILLON : </label><input id="txtPrixEchantillon" type="text" size="7" name="MED_PRIXECHANTILLON" class="zone" readonly="readonly"/>
        <label>&nbsp;</label><input class="zone" type="button" value="<"></input><input class="zone" type="button" value=">"></input>
    </form>
    
    