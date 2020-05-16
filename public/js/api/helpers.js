/**
 * Ce fichier contient des méthodes (functions) supplémentaire
 * @author Don de Dieu Bolenge
 */

/**
 * Trouve et affiche erreur après le lancement d'une requête
 * @param {Object} res Le result de la requête lancée
 * @returns {void}
 */
export function findAndShowErrorOnRequested(res) {
    console.log(res);
    
    if (res.errors) {
        let errorsValues = Object.values(res.errors);
        let errorsKeys = Object.keys(res.errors);
        let errorsMessage = '';

        for (let i = 0; i < errorsKeys.length; i++) {
            let key = errorsKeys[i];
            let value = errorsValues[i];

            key = key != 'warning' ? key : '';

            errorsMessage += '<p>'+ucFirst(value) + '</p>';
        }

        showAlertMessage(errorsMessage, 'danger')
    }
}

/**
 * Permet d'afficher un message (en guise d'alerte)
 * @param {String} error_message Le message à afficher
 * @param {Number} timer Le temps par milleseconds à afficher le message
 */
export function showAlertMessage (error_message, type = 'info', timer = 5000, text_color = '#333') {
    Snackbar.show({
        text: error_message,
        pos: 'top-center',
        showAction: true,
        actionText: "Fermer",
        duration: timer,
        textColor: text_color,
        backgroundColor: getColorByKey(type)
    });
}