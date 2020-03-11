/**
 * Permet de cacher et afficher le mot de passe
 * @param {Element} passwordElement
 * @param {Element} eyeElement
 */
function manipuleEyePassword(passwordElement, eyeElement) {
    var type = passwordElement.type == 'text' ? passwordElement.type = 'password' : passwordElement.type = 'text';

    if (type == 'text') {
        eyeElement.classList.remove('fa-eye');
        eyeElement.classList.add('fa-eye-slash');
    }else {
        eyeElement.classList.remove('fa-eye-slash');
        eyeElement.classList.add('fa-eye');
    }
}

/**
 * Permet de renvoyer une coleur par sa clé
 * @param {String} key La clé de la couleur
 * @param {String|null} defaultValue La valeur par défaut au cas où la clé n'existe pas
 * @return {String}
 */
function getColorByKey(key = 'info', defaultValue = null) {
    const colors = {
        danger: '#ffa5b2',
        success: '#6bd816',
        info: '#82d6ff',
        warning: '#f2db5b'
    }

    return colors.hasOwnProperty(key) ? colors[key] : defaultValue;
}

/**
 * Renvoi l'url de la page
 * @return {String}
 */
function getUrl() {
    return window.location.pathname;
}

/**
 * Permet de lancer des fonctions et des instructions par rapport aux urls
 * @param {String} url L'url courant
 * @param {Function} callback La fonction callback à appeler
 */
function router(url, callback) {
    if (getUrl() === url) {
        callback();
    }
}

/**
 * Ajoute le loader sur l'élément ciblé
 * @param {Element} element L'élément en question
 * @return {void}
 */
function makeSuperLoader(element) {
    $(element).append(`<div class="card-loading" id="superLoader">
        <div class="showbox">
            <div class="loader">
                <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
                </svg>
            </div>
        </div>
    </div>`);
}

/**
 * Permet d'arrêter le loader
 * @return {void}
 */
function stopSuperLoader() {
    $('#superLoader').animate({backgroundColor: '#ffffff'}, 1000, function () {
        $('#superLoader').remove();
    });
}

/**
 * Vérifie si l'objet passé en paramètre n'est pas vide
 * @param {Object} object L'object à vérifier
 * @return {Boolean}
 */
function objectNotEmpty(object) {
    let objectKeys = Object.keys(object);

    return objectKeys.length > 0;
}

/**
 * Permet de faire une redirection vers un autre url
 * @param {String} url L'url à rédiriger
 * @return {void}
 */
function redirect(url) {
    window.location.pathname = url
}