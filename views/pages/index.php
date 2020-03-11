<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 offset-4">
            <div class="card rounded" id="cardLoginAdmin">
                <div class="card-body p-4">
                    <div class="text-center">
                        <img style="margin-bottom: 50px;" width="150" class="rounded-circle" src="/public/images/svg/undraw_Security_on_ff2u.png" alt="">
                    </div>

                    <form class="needs-validation" id="form-login-admin" mathod="POST" autocomplete="off">
                        <div class="position-relative form-group input-group">
                            <input name="username" id="username" placeholder="Nom d'utilisateur" type="text" class="form-control p-4 border-right-0 rounded-left" required="required" />

                            <div class="input-group-prepend pointer border-left-0">
                                <span class="input-group-text input-group-text-username bradius-rb bg-white border-left-0 rounded-right"><i class="fa fa-user-circle"></i></span>
                            </div>
                            <div class="invalid-feedback" id="feedback-username">Ce champ est obligatoire</div>
                        </div>
                        <div class="position-relative input-group">
                            <input name="password" id="password" placeholder="Mot de passe" type="password" class="form-control border-right-0 p-4 rounded-left" required="required" />

                            <div class="input-group-prepend pointer border-left-0" onclick="manipuleEyePassword(document.querySelector('#password'), document.querySelector('#eyePassword i'))">
                                <span class="input-group-text input-group-text-password bradius-rb border-left-0 bg-white rounded-right" id="eyePassword"><i class="fa fa-eye"></i></span>
                            </div>

                            <div class="invalid-feedback" id="feedback-password">Ce champ est obligatoire</div>
                            
                        </div>
                        <p class="float-right mr-4 mt-2"><a href="#">Mot de passe oublié ?</a></p>

                        <div class="my-4">
                            <button type="submit" form="form-login-admin" id="btn-login-agent" class="mt-1 btn btn-primary btn-lg btn-block p-3">SE CONNECTER&nbsp;<i class="fa fa-sign-in-alt"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>