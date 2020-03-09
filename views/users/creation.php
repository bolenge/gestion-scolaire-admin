<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card-stat" style="margin-bottom: 20px;">
                    <div class="mb-3 widget-content">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <i style="font-size: 5em;" class="pe-7s-add-user"></i>
                                <div class="widget-heading">UTILISATEURS</div>
                                <div class="widget-subheading">Création d'un utilisateur</div>
                            </div>
                        </div>
                    </div>
                    <form class="">
                        <div class="position-relative row form-group"><label for="nom" class="col-sm-2 col-form-label">Nom</label>
                            <div class="col-sm-10"><input name="nom" id="nom" placeholder="Nom de l'utilisateur" type="text" class="form-control"></div>
                        </div>
                        <div class="position-relative row form-group"><label for="prenom" class="col-sm-2 col-form-label">Prénom</label>
                            <div class="col-sm-10"><input name="text" id="prenom" placeholder="Prénom de l'utilisateur" type="text" class="form-control"></div>
                        </div>
                        <div class="position-relative row form-group"><label for="email" class="col-sm-2 col-form-label">Adresse email</label>
                            <div class="col-sm-10"><input name="email" id="email" placeholder="Adresse email" type="email" class="form-control"></div>
                        </div>
                        <div class="position-relative row form-group"><label for="role" class="col-sm-2 col-form-label">Role</label>
                            <div class="col-sm-10">
                                <select name="role" id="role" class="form-control">
                                    <option>Super-Admin</option>
                                    <option>Utilisateur simple</option>
                                </select>
                            </div>
                        </div>
                        <div class="position-relative row form-group"><label for="fonction" class="col-sm-2 col-form-label">Fonction</label>
                            <div class="col-sm-10"><input name="text" id="fonction" placeholder="Fonction de l'utilisateur" type="text" class="form-control"></div>
                        </div>
                        <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Login</label>
                            <div class="col-sm-10"><input name="login" id="login" placeholder="Login de l'utilisateur" type="text" class="form-control"></div>
                        </div>
                        <div style="margin-bottom: 0px;" class="position-relative row form-group"><label for="password" class="col-sm-2 col-form-label">Mot de passe initial</label>
                            <div class="col-sm-10"><input name="password" id="password" placeholder="Mot de passe initial" type="password" class="form-control"></div>


                        </div>
                        <div class="position-relative row form-group">
                            <div class="col-md-9"></div>
                            <div class="col-md-3">
                                <div class="position-relative form-check"><label class="form-check-label"><input type="checkbox" class="form-check-input" onchange="manipuleEyePassword('password', $(this))"> Afficher le mot de passe</label></div>
                            </div>
                        </div>
                        <div class="position-relative row form-check">
                            <div class="col-sm-10 offset-sm-2">
                                <center><button style="border-radius: 400px;" class="mt-1 btn btn-primary btn-lg"><i class="pe-7s-add-user"></i> VALIDER LA CREATION</button></center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>   
</div>
