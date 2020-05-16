/*********************************************************\
 * CE FICHIER EST LIE EST TOUT CE QUI CONCERNE LES ADMINS *
\*********************************************************/

import { uploadFile } from "./medias.js";

/**
 * Permet de faire connecter un administrateur
 * @return {void}
 */
function loginAdmin() {
    
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
function uploadAdminAvatar() {
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
function createAdmin() {
    $('#form-create-admin').on('submit', (e) => {
        e.preventDefault();

        let $this = e.currentTarget;

        let data_serialized = $($this).serialize();
        let data = $.unserialize(data_serialized);
        let acteur = {
            nom: data.nom,
            prenom: data.prenom,
            email: data.email,
        }

        
    })
}

export {loginAdmin, uploadAdminAvatar, createAdmin}