<div id="bas" class="medicament">
    <h1>Pharmacopée</h1>
<?php 
switch ($action)
{
    case CS_MED_FAM:
        require_once './Include/Forms/formChoixFamilleMedicaments.inc.php';
        break;
    case CS_MED_NOM:
        require_once './Include/Forms/formChoixFamilleMedicaments.inc.php';
        require_once './Include/Forms/formChoixMedicament.inc.php';
        break;
    case CS_MED_FICHE:
        require_once './Include/Forms/formChoixFamilleMedicaments.inc.php';
        require_once './Include/Forms/formChoixMedicament.inc.php';
        require_once './Include/Forms/formMedicament.inc.php';
        break;
    default:
        break;
}

    
?>
    

</div>