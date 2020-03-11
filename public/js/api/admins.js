/**
 * Gère les admins
 */

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

export {loginAdmin}