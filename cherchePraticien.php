<?php

include ("classConnexion.php");
$laBase = new clstBDD;
$laBase->connecte("dsn_swiss", "", "");
if ($laBase->getConnexion() != null) {
    //on interroge la base
    $curseur = $laBase->requeteSelect('select PRA_NOM, PRA_PRENOM, PRA_ADRESSE, PRA_VILLE, PRA_COEF, TYP_LIBELLE '
            . 'from praticien inner join type_praticien on pra_type = typ_lieu '
            . 'where pra_num=' . $_POST["pratNum"]);
    $res = odbc_fetch_array($curseur);
    //s'il reste un enregistrement non lu
    if ($res != "") {
        //on positionne les champs avec les valeurs de la table
        echo '
		<label class="titre">NUMERO :</label><input type="text" readonly="readonly" name="PRA_NUM" class="zone" >' . $res["PRA_NUM"] . '</input>
		<label class="titre">NOM :</label><input type="text" readonly="readonly" name="PRA_NOM" class="zone" >' . $res["PRA_NOM"] . '</input>
		<label class="titre">PRENOM :</label><input type="text" readonly="readonly" name="PRA_PRENOM" class="zone" >' . $res["PRA_PRENOM"] . '</input>
		<label class="titre">ADRESSE :</label><input type="text" readonly="readonly" name="PRA_ADRESSE" class="zone" >' . $res["PRA_ADRESSE"] . '</input>
		<label class="titre">CP :</label><input type="text" readonly="readonly" name="PRA_CP" class="zone" >' . $res["PRA_CP"] . ' ' . $res["PRA_VILLE"] . '</input>
		<label class="titre">COEFF. NOTORIETE :</label><input type="text" readonly="readonly" name="PRA_COEFNOTORIETE" class="zone" >' . $res["PRA_COEFNOTORIETE"] . '</input>
		<label class="titre">TYPE :</label><input type="text" readonly="readonly" name="TYP_CODE" class="zone" >' . $res["typ_libelle"] . '</input>
		<label class="titre">&nbsp;</label><div class="zone"><input type="button" value="<" onClick="precedent();"></input><input type="button" value=">" onClick="suivant();"></input>
		';
    }
    $laBase->close();
}
?>