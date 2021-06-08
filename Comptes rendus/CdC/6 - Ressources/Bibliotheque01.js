
/**
 * 
 * Retourne un contrôle de saisie de type button sous la forme d'un objet JQuery.
 * 
 * @param {string} unNom null si l'objet n'a pas de nom.
 * @param {string} unId null si l'objet n'a pas d'id.
 * @param {string} uneValeur
 * @param {string} unTexte
 * @param {int} unIndexTab
 * @param {boolean} uneLectureSeule
 * @returns {jQuery} L'objet button.
 * 
 */
function jqFormButton(unNom, unId, uneValeur, unTexte, unIndexTab, uneLectureSeule) {

    return $('<button'
            + (unId === null ? '' : ' id="' + unId + '"')
            + (unNom === null ? '' : ' name="' + unNom + '"')
            + ' value="' + uneValeur
            + '" tabindex="' + unIndexTab
            + '" >' + unTexte + '</button>').prop('disabled', uneLectureSeule); // Pour prop() voir http://api.jquery.com/prop/#entry-longdesc-1

}

