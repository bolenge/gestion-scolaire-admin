/**
* Permet de cacher et afficher le mot de passe
* @param {Element} passwordElement
* @param {Element} eyeElement
*/
function manipuleEyePassword(id, checkbox) {
    var input = $("#" + id)[0];
    checkbox[0].checked ? input.type = 'text' : input.type = 'password';
    // var type = passwordElement.type == 'text' ? passwordElement.type = 'password' : passwordElement.type = 'text';

    // if (type == 'text') {
    //     eyeElement.classList.remove('fa-eye');
    //     eyeElement.classList.add('fa-eye-slash');
    // }else {
    //     eyeElement.classList.remove('fa-eye-slash');
    //     eyeElement.classList.add('fa-eye');
    // }
}

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