    <form name="formChoixMedicament" id="formChoixMedicament" method="post" action="index.php">
        <?php $selected = (isset($_POST['cboMedic']) ? $_POST['cboMedic'] : null); ?>
        <?= formSelectDepuisRecordset('Choisir médicament', 'cboMedic', 'listeMedic', getListeMedicaments($_POST['cboFamilles']), $selected, 30) ?>
        <?= formInputHidden("cboFamilles", "cboFamilles", $_POST['cboFamilles']) ?>
        <?= formInputHidden("action", "action", 213) ?>
        <?= formBoutonSubmit("btnOKMed", "btnOKMed", "OK", 40) ?>
    </form>