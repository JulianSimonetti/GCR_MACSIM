function ajouterProdPres() {
    $("#butppres").remove();
    $("#produit1").clone().appendTo("#produits").attr("id", "produit2");
    $("#produit2 label").html("PRODUIT 2 : ");
    $("#produit2 label").attr("id", "lab2");
    $("#produit2 label").attr("for", "PROD2");
    $("#produit2 select").attr("id", "PROD2");
    $("#produit2 select").attr("name", "PROD2");
    $("#produit2 select").attr("tabindex", "101");

    $("#produit2").html($("#produit2").html() + "<input type=\"button\" id=\"butppressup\" onclick=\"retirerProdPres()\" value=\"-\" class=\"zone\" />");

}

function retirerProdPres() {
    $("#butppressup").remove();
    $("#produit2").remove();

    $("#produit1").html($("#produit1").html() + "<input type=\"button\" id=\"butppres\" onclick=\"ajouterProdPres()\" value=\"+\" class=\"zone\" />");
}

$(document).ready(function () {
    $("#RAP_MOTIF").change(function () {
        if ($("#RAP_MOTIF").val() == "AUT") {
            $("#RAP_MOTIFAUTRE").prop("disabled", false).focus();
        } else {
            $("#RAP_MOTIFAUTRE").val("").prop("disabled", true);
        }
    });

    $("#chk_remplacant").change(function () {
        if ($("#chk_remplacant").prop("checked")) {
            $("#PRA_REMPLACANT").prop("disabled", false).focus();
        } else {
            $("#PRA_REMPLACANT").prop("disabled", true);
        }
    });
});