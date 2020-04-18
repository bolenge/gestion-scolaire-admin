/**
 * Permet de faire uploader un média
 * @param {Element} idInputFile L'ID de l'élément input du fichier à uploader
 * @param {Function} callback La fonction callback à appeler
 * @return {void}
 */
function uploadFile (idInputFile, callback) {
    let form = document.createElement('form');
    let file = document.getElementById(idInputFile).cloneNode(true);

    $(form).append(file);

    let formData = new FormData($(form)[0]);

    $.ajax({
        url: '/medias/upload',
        type: 'POST',
        data: formData,
        dataType: 'json',
        success: function (res) {
            callback(res, null);
        },
        error: function (err) {
            if (err) {
                callback(null, getWarningMessage("lors de l'upload du fichier"));
            }
        },
        mimeType: 'multipart/form-data',
        cache: false,
        contentType: false,
        processData: false
    });
}

export {uploadFile}