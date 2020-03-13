<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-users icon-gradient bg-premium-dark">
                        </i>
                    </div>
                    <div>ADMINISTRATEURS
                        <div class="page-title-subheading">
                            <h5>Création d'un administrateur</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <form class="">
                            <div class="form-row">
                                <div class="col-md-3">
                                    <span style="position: relative;">
                                        <span id="userAvatar" style="position: relative;">
                                            <img src="/public/images/avatars/default-user-avatar.png" style="width: 150px;" alt="">
                                        </span>
                                        
                                        <span class="text-center">
                                            <input type="file" name="media" id="avatar" style="visibility: hidden;" />
                                            <label for="avatar" id="labelAdminAvatar" class="text-info pointer"><i class="fa fa-camera fa-2x"></i></label>
                                        </span>
                                    </span>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="nom" class="">Nom</label>
                                                <input name="nom" id="nom" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="prenom" class="">Prénom</label>
                                                <input name="prenom" id="prenom" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="nom" class="">Email</label>
                                                <input name="email" id="nom" type="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="nom" class="">Rôle</label>
                                                <select name="role" id="role" class="form-control">
                                                    <option value="simple-admin">Simple admin</option>
                                                    <option value="super-admin">Super admin</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="nom" class="">Nom d'utilisateur (Login)</label>
                                                <input name="email" id="nom" type="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="nom" class="">Mot de passe</label>
                                                <input name="email" id="nom" type="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="mt-2 btn btn-primary btn-lg col-md-12">Enregistrement <i class="pe-7s-diskette"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- <div class="card-stat" style="margin-bottom: 20px;">
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
                </div> -->
            </div>
        </div>
    </div>   
</div>
