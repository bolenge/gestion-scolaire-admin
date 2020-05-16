/**
 * @package acteurs
 * @description Ce fichier concerne la maniputation des acteurs
 * @author Don de Dieu Bolenge <dondedieubolenge@gmail.com>
 */

 /**
  * Permet de créer un nouvel acteur
  * @param {Object} data Les données de l'acteur à créer
  * @param {Function} callback La fonction callback à appeler
  * @returns {void}
  */
export function createActeur(data, callback) {
    $.ajax({
        url: getHostAPI()+'/acteurs/createActeur',
        type: 'POST',
        data: data,
        dataType: 'json',
        success: (result) => {
            if (result) {
                callback(null, result);
            }else {
                callback(getWarningMessage(), null);
            }
        },
        error: (err) => {
            if (err) {
                callback(getWarningMessage(), null);
            }
        }
    })
}