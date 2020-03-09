<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <center>
                <img style="margin-bottom: 50px;" width="150" class="rounded-circle" src="/public/images/svg/undraw_Security_on_ff2u.png" alt="">
            </center>
            <form id="form-login-agent" class="">
                <div class="position-relative form-group">
                    <input style="padding: 1.5em;border-radius: 400px;" name="login" id="login" placeholder="Entrez votre login" type="text" class="form-control">
                </div>
                <div class="position-relative input-group">
                    <input style="padding: 1.5em;border-radius: 400px;" name="password" id="password" placeholder="Entrez votre mot de passe" type="password" class="form-control" /><br><br>
                </div>
                <div class="position-relative input-group mb-4">
                    <div class="position-relative form-check"><label class="form-check-label"><input type="checkbox" class="form-check-input" onchange="manipuleEyePassword('password', $(this))"> Afficher le mot de passe</label></div>
                </div>
                <center>
                    <button style="padding: 1.5em;border-radius: 400px;" type="submit" form="form-login-agent" id="btn-login-agent" class="mt-1 btn btn-primary btn-lg btn-block">SE CONNECTER</button>
                </center>
                
            </form>
        </div>
    </div>
</div>