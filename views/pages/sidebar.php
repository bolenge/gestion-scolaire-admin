<div class="app-sidebar sidebar-shadow bg-royal sidebar-text-light">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <div class="widget-content">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="btn-group">
                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                <img width="42" class="rounded-circle" src="/public/images/avatars/1.jpg" alt="">
                                <i class="fa fa-angle-down ml-2 opacity-8"></i>
                            </a>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                <a href="/admins/account/username" tabindex="0" class="dropdown-item"><i class="pe-7s-user"></i>&nbsp;&nbsp;Mon compte</a>
                                <a href="/admins/parameters" tabindex="0" class="dropdown-item"><i class="pe-7s-config"></i>&nbsp;&nbsp;Parametres</a>
                                <div tabindex="-1" class="dropdown-divider"></div>
                                <a href="/admins/logout" tabindex="0" class="dropdown-item"><i class="pe-7s-power"></i>&nbsp;&nbsp;Déconnexion</a>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left  ml-3 header-user-info">
                        <div class="widget-heading cl-white">
                            <?= session('admin')['username'] ?>
                        </div>
                        <div class="widget-subheading cl-white">
                            <?= ucfirst(str_replace('-', ' ', session('admin')['role'])) ?>
                        </div>
                        <!-- <button style="border-radius: 400px;" class="mt-1 btn btn-danger btn-lg btn-block"><i class="pe-7s-power"></i> DECONNEXION</button> -->
                    </div>
                </div>
            </div><hr>
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Tableau de board</li>
                <li>
                    <a href="index.html" class="mm-active">
                        <i class="metismenu-icon pe-7s-menu"></i>
                        Menu principal
                    </a>
                </li>
                <li class="app-sidebar__heading">Administrateurs</li>
                <li>
                    <a href="/admins/create">
                        <i class="metismenu-icon pe-7s-add-user"></i>
                        Créer un administrateur
                    </a>
                </li>
                <li>
                    <a href="/admins/liste">
                        <i class="metismenu-icon pe-7s-users">
                        </i>Liste des administrateurs
                    </a>
                </li>
                <li class="app-sidebar__heading">ECOLES</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-plus"></i>
                        Création d'une ecole
                    </a>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-study"></i>
                        Liste des ecoles
                    </a>
                </li>
            </ul>
            
        </div>
    </div>
</div>  