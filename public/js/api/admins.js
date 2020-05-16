/*********************************************************\
 * CE FICHIER EST LIE EST TOUT CE QUI CONCERNE LES ADMINS *
\*********************************************************/

import { uploadFile } from "./medias.js";
import { createActeur } from "./acteurs.js";
import { findAndShowErrorOnRequested, showAlertMessage } from "./helpers.js";

/**
 * Permet de faire connecter un administrateur
 * @return {void}
 */
export function loginAdmin() {
    
    $('#form-login-admin').on('submit', (e) => {
        e.preventDefault();

        let $this = e.currentTarget;
        let datas = $($this).serialize();
        
        $.ajax({
            url: '/admins/login',
            type: 'POST',
            data: datas,
            dataType: 'json',
            beforeSend: () => {
                makeSuperLoader($('#cardLoginAdmin'))
            },
            complete: () => {
                stopSuperLoader();
            },
            success: (res) => {

                $('#form-login-admin .input-group-text').each(function () {
                    $(this).css({
                        border: '1px solid #38dba3',
                        borderLeft: 'none'
                    })
                });
                
                if (res) {
                    if (res.success) {
                        redirect('/dashboard');
                    }else {
                        let errors = res.errors;

                        if (objectNotEmpty(errors)) {
                            for (const key in errors) {
                                let error = errors[key];

                                if (key === "warning") {

                                    Snackbar.show({
                                        text: error,
                                        pos: 'top-center',
                                        showAction: true,
                                        actionText: "Fermer",
                                        duration: 9000,
                                        textColor: '#333',
                                        backgroundColor: getColorByKey('danger')
                                    });
                                }else {
                                    try {
                                        if ($('#feedback-'+key)) {
                                            $('#form-login-admin .input-group-text-'+key).css({
                                                border: '1px solid #d92550',
                                                borderLeft: 'none'
                                            });

                                            $('#'+key).css({
                                                border: '1px solid #d92550',
                                                borderRight: 'none'
                                            });

                                            $('#feedback-'+key).removeClass('valid-feedback');
                                            $('#feedback-'+key).addClass('invalid-feedback');
                                            $('#feedback-'+key).html(error);
                                            $('#feedback-'+key).css({display: 'inline-block'});
                                        }
                                    } catch (err) {
                                        
                                    }
                                }
                            }

                            $('#form-login-admin').addClass('was-validated');
                        }
                    }
                }
            },
            error: (err) => {
                console.log(err);
                
            }
        });
    })
}

/**
 * Permet de lancer l'upload de l'avatar de l'admin
 */
export function uploadAdminAvatar() {
    $('#media_avatar').on('change', (e) => {
        let $this = e.currentTarget;
        let files = $this.files;

        makeSuperLoader($('#containerAvatarAdmin'), true);

        uploadFile('media_avatar', (results, err) => {
            if (err) {
                Snackbar.show({
                    text: err,
                    pos: 'top-center',
                    showAction: true,
                    actionText: "Fermer",
                    duration: 9000,
                    textColor: '#333',
                    backgroundColor: getColorByKey('danger')
                });
            }else {
                stopSuperLoader();
                if (results.success) {
                    let data = results.results;
                    printImgOnUpload(files[0], 'containerAvatarAdmin', 'avatar-create-admin');
                    $('#id_media_avatar').val(data.id);
                }else {
                    Snackbar.show({
                        text: results.message,
                        pos: 'top-center',
                        showAction: true,
                        actionText: "Fermer",
                        duration: 9000,
                        textColor: '#333',
                        backgroundColor: getColorByKey('danger')
                    });
                }
            }
        })
    })
}

/**
 * Permet de créer un nouvel admin
 * @return {void}
 */
export function submitCreateAdmin() {
    $('#form-create-admin').on('submit', (e) => {
        e.preventDefault();

        let $this = e.currentTarget;
        let data_serialized = $($this).serialize();
        let data = $.unserialize(data_serialized);
        let acteur = data;

        acteur.email = acteur.email.replace('%40', '@');

        makeSuperLoader($('#card-create-admin'))
        
        createActeur(acteur, (err_acteur, result_acteur) => {
            if (!err_acteur) {
                if (result_acteur.success) {
                    const admin = {
                        id_acteur: result_acteur.results.id,
                        role: data.role,
                        username: data.username,
                        password: data.password
                    }

                    createAdmin(admin, (err_admin, result_admin) => {
                        if (!err_admin) {
                            if (result_admin.success) {
                                showAlertMessage("Admin créé avec succès !", 'success', 4000, '#fff');

                                $this.reset();
                                $('.avatar-create-admin').attr('src', '/public/images/avatars/user-avatar.png');
                            }else {
                                findAndShowErrorOnRequested(result_admin);
                            }
                        }else {
                            showAlertMessage(err_admin, 'danger', 5000);
                        }

                        stopSuperLoader();
                    })
                }else {
                    findAndShowErrorOnRequested(result_acteur);
                    stopSuperLoader();
                }
            }else {
                showAlertMessage(err_acteur, 'danger');
                stopSuperLoader();
            }
        })
    })
}

/**
  * Permet de créer un nouvel admin
  * @param {Object} new_admin Les données de l'admin à créer
  * @param {Function} callback La fonction callback à appeler
  * @returns {void}
  */
 export function createAdmin(new_admin, callback) {
    $.ajax({
        url: getHostAPI()+'/admins/createAdmin',
        type: 'POST',
        data: new_admin,
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