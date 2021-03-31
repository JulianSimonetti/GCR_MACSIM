<div id="bas">
    <form id="formRAPPORT_VISITE" name="formRAPPORT_VISITE" method="post" action="recupRAPPORT_VISITE.php">
        <h1> Rapport de visite </h1>
        <?php echo formInputText('NUMERO', 'RAP_NUM', 'RAP_NUM', '', 10, 10, 10); ?><br />
        <?php echo formInputText('DATE VISITE', 'RAP_DATEVISITE', 'RAP_DATEVISITE', '', 10, 10, 20); ?><br />
        <?php echo formSelectDepuisTab2D('PRATICIEN', 'PRA_NUM', 'PRA_NUM', getListePraticiensTab(), 0, 30); ?><br />
        <?php echo formInputText('COEFFICIENT', 'PRA_COEFF', 'PRA_COEFF', '', 6, 6, 40); ?><br />
        <?php echo formInputCheckBox(false, 'REMPLACANT', 'chk_remplacant', 'chk_remplacant', false, 50); ?>
        <?php echo formSelectDepuisTab2D('(Si oui, le renseigner)', 'PRA_REMPLACANT', 'PRA_REMPLACANT', getListePraticiensTab(), 0, 60, true); ?><br />
        <?php echo formInputText('NUMERO', 'RAP_NUM', 'RAP_NUM', '', 10, 10, 70); ?><br />
        <label for="RAP_MOTIF">MOTIF :</label>
        <select id="RAP_MOTIF" name="RAP_MOTIF" onClick="selectionne('AUT', this.value, 'RAP_MOTIFAUTRE');" tabindex="80">
            <option value="PRD">Périodicité</option>
            <option value="ACT">Actualisation</option>
            <option value="REL">Relance</option>
            <option value="SOL">Sollicitation praticien</option>
            <option value="AUT">Autre</option>
        </select>
        <input type="text" id="RAP_MOTIFAUTRE" placeholder="Autre motif" name="RAP_MOTIFAUTRE" disabled="disabled" tabindex="85"/><br />
        <label for="RAP_BILAN">BILAN :</label><br />
        <textarea rows="5" cols="50" id="RAP_BILAN" name="RAP_BILAN" tabindex="90"></textarea>
        <h3>Produits présentés</h3>
        <div id="produits">
            <div id="produit1">
                <label id="lab1" for="PROD1">PRODUIT 1 : </label>
        <?php echo formSelectDepuisTab2D(null, 'PROD1', 'PROD1', getListeMedicamentsTab(), 0, 100); ?>
                <input type="button" id="butppres" onclick="ajouterProdPres()" value="+" class="zone" />
            </div>
        </div>
        <?php echo formInputCheckBox(false, 'DOCUMENTATION OFFERTE', 'RAP_DOC', 'RAP_DOC', false, 120); ?>
        <h3>Echanitllons</h3>
        <div id="lignes">
            <label>Produit : </label>
            <select name="PRA_ECH1" tabindex="130"><option>Produits</option></select><label> Quantité : </label><input type="text" name="PRA_QTE1" size="2" class="zone"/>
            <input type="button" id="butpech" value="+" onclick="ajoutLigne(1);" class="zone" />
        </div>
        <?php echo formInputCheckBox(false, 'SAISIE_DEFINITIVE', 'RAP_LOCK', 'RAP_LOCK', false, 200); ?><br />
        <?php echo formBoutonReset('frm_reset', 'frm_reset', 'Annuler', 900); ?>
        <?php echo formBoutonSubmit('frm_submit', 'frm_submit', 'Valider', 910); ?>
    </form>
</div>