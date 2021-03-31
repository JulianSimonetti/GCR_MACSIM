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
    })
});