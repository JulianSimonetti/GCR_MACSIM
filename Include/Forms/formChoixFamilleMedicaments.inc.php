    <form name="formChoixFamilleMedicaments" id="formChoixFamilleMedicaments" method="post" action="index.php">
        <?php $selected = (isset($_POST['cboFamilles']) ? $_POST['cboFamilles'] : 'AA'); ?>
        <?= formSelectDepuisRecordset('Choisir famille', 'cboFamilles', 'listeFamilles', getListeFamilles(), $selected, 10) ?>
        <?= formInputHidden("action", "action", 212) ?>
        <?= formBoutonSubmit("btnOKFam", "btnOKFam", "OK", 20) ?>
    </form>