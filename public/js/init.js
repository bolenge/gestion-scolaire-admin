/**
 * $.unserialize
 *
 * Takes a string in format "param1=value1&param2=value2" and returns an object { param1: 'value1', param2: 'value2' }. If the "param1" ends with "[]" the param is treated as an array.
 *
 * Example:
 *
 * Input:  param1=value1&param2=value2
 * Return: { param1 : value1, param2: value2 }
 *
 * Input:  param1[]=value1&param1[]=value2
 * Return: { param1: [ value1, value2 ] }
 *
 * @todo Support params like "param1[name]=value1" (should return { param1: { name: value1 } })
 */
(function($){
	$.unserialize = function(serializedString){
		var str = decodeURI(serializedString);
		var pairs = str.split('&');
		var obj = {}, p, idx, val;
		for (var i=0, n=pairs.length; i < n; i++) {
			p = pairs[i].split('=');
			idx = p[0];

			if (idx.indexOf("[]") == (idx.length - 2)) {
				// Eh um vetor
				var ind = idx.substring(0, idx.length-2)
				if (obj[ind] === undefined) {
					obj[ind] = [];
				}
				obj[ind].push(p[1]);
			}
			else {
				obj[idx] = p[1];
			}
		}
		return obj;
	};
})(jQuery);

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
        warning: '#f2db5b',
        white: '#ffffff'
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
 * @param {Boolean} toPrepend S'il faut mettre le loader au devant ou pas
 * @return {void}
 */
function makeSuperLoader(element, toPrepend = false) {
    let content = `<div class="card-loading" id="superLoader">
        <div class="showbox">
            <div class="loader">
                <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
                </svg>
            </div>
        </div>
    </div>`;

    if (toPrepend) {
        $(element).prepend(content);
    }else {
        $(element).append(content);
    }
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
    return object ? Object.keys(object).length > 0 : false;
}

/**
 * Permet de faire une redirection vers un autre url
 * @param {String} url L'url à rédiriger
 * @return {void}
 */
function redirect(url) {
    window.location.pathname = url
}

/**
 * Renvoi le Host du site
 * @return {String}
 */
function getHost() {
    return window.location.origin;
}

/**
 * Renvoi le Host de l'API
 * @return {String}
 */
function getHostAPI() {
    return 'http://localhost:3000';
}

/**
 * Permet de créer l'interface à afficher l'image à uploader
 * @param {Files} file L'objet file du fichier uploader
 * @param {Object} prev L'élément à uploader
 * @param {String} listClassNames Les classes qu'il faut ajouter à l'image
 */
function createThumbnail(file, prev, listClassNames) {
    var reader = new FileReader();
    
    reader.onload = function () {
        
        var imgElement = document.createElement('img');
            imgElement.style.maxWidth = '100%';
            imgElement.style.maxHeight = '100%';
            imgElement.src = this.result;
            prev.innerHTML = '';
            imgElement.className = listClassNames;
            prev.appendChild(imgElement);

    }

    reader.readAsDataURL(file);
}

/**
 * Permet de véifier si le type (extension) du fichier passé est image
 * @param {String} imgType Le type de l'image
 */
function isImgFile(imgType) {
    var allowedTypes = ['png', 'jpg', 'jpeg', 'gif'];

    if (~allowedTypes.indexOf(imgType)) {
         return true;
    }else{
        return false;
    }
}

/**
 * Permet d'afficher directement une image quand on l'upload
 * @param {Element} id_file L'identifiant du champ du fichier
 * @param {Element} id_previous L'identifiant de l'élément où à afficher
 * @param {String} listClassNames Les classes qu'il faut ajouter à l'images
 * @return {void}
 */
function printImgOnUpload(file, id_previous, listClassNames) {
    var prev = document.querySelector("#"+id_previous),
        imgType;
    
    if (listClassNames == undefined) {
        listClassNames = '';
    }

    imgType = file.name.split('.');
    imgType = imgType[imgType.length - 1].toLowerCase();

    if (isImgFile(imgType)) {
        
        createThumbnail(file, prev, listClassNames);

        return true;
    }else{
        alert("Extension non valide");
        return false;
    }
}

/**
 * Renvoi le message warning
 * @param {String} element L'élément lié au message à envoyer
 */
function getWarningMessage(element = null) {
    return "Une erreur est survenue "+element+" <br/>Si cette erreur persiste veuillez contacter l'équipe de développement UHTEC";
}

/**
 * Permet de mettre la prémière lettre d'un texte en majuscule
 * @param {String} text Le text à traiter
 * @return {String}
 */
function ucFirst(text) {
    return text[0].toUpperCase() + text.substring(1);
}