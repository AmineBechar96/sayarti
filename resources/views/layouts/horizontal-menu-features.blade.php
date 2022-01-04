<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

<div class="horizontal-menu-wrapper">
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-without-dd-arrow navbar-shadow menu-border"
        role="navigation" data-menu="menu-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand"
                        href="../../../html/ltr/horizontal-menu-template/index.html">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">Vuexy</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                            class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                            class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                            data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <!-- Horizontal menu content-->
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <!-- include ../../../includes/mixins-->
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="home"
                        data-toggle="dropdown"><i class="feather icon-home"></i><span
                            data-i18n="Dashboard">Accueil</span></a>
                    <ul class="dropdown-menu">
                        @if (Auth::user() and Auth::user()->hasVerifiedEmail())
                        <li data-menu=""><a class="dropdown-item" href="my-services" data-toggle="dropdown"
                                data-i18n="Email"><i class="feather icon-save"></i>Mes Services</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="liked-services" data-toggle="dropdown"
                                data-i18n="Chat"><i class="feather icon-heart"></i>Services Aimés</a>
                        </li>
                        @endif

                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                        data-toggle="dropdown"><i class="feather icon-settings"></i><span data-i18n="Others">
                            Entretien Automobile
                        </span></a>
                    <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item" href="general-mechanic" data-toggle="dropdown"
                                data-i18n="Email"><i class="fas fa-tools" style="color:#626262;"></i>Mécanicien
                                Général</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="detached-pieces-stores" data-toggle="dropdown"
                                data-i18n="Chat"><i class="feather icon-settings"></i>Pièces Détachés</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                        data-toggle="dropdown"><i class="feather icon-shopping-bag"></i><span data-i18n="Apps">
                            Points de Ventes</span></a>
                    <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item" href="sell-points" data-toggle="dropdown"
                                data-i18n="Email"><i class="fas fa-map-marker-alt" style="color:#6e706f"></i>Points de
                                Ventes</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="weekly-markets" data-toggle="dropdown"
                                data-i18n="Chat"><i class="fas fa-cubes" style="color:#6e706f"></i>Marché
                                Hebdomadaires</a>
                        </li>
                        <!--li data-menu=""><a class="dropdown-item" href="app-todo.html" data-toggle="dropdown"
                                data-i18n="Todo"><i class="feather icon-check-square"></i>Nos Partenaires</a>
                        </li-->

                    </ul>
                </li>


                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                        data-toggle="dropdown"><i class='bx bx-car'></i><span data-i18n="Pages">Location de
                            voitures</span></a>
                    <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item" href="rent-agencies" data-toggle="dropdown"
                                data-i18n="Profile"><i class='bx bx-car'></i></i>Agences Location de Voitures</a>
                        </li>
                        <!--li data-menu=""><a class="dropdown-item" href="page-account-settings.html"
                                data-toggle="dropdown" data-i18n="Account Settings"><i
                                    class="feather icon-settings"></i>Voitures de Lux</a>
                        </li-->



                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                        data-toggle="dropdown"><i class="feather icon-truck"></i><span
                            data-i18n="Charts &amp; Maps">Depannages &amp; Transport</span></a>
                    <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item" href="recovery-truck" data-i18n="Charts"><i
                                    class="fas fa-truck-loading" style="color:#6e706f"></i>Depannages</a>

                        </li>
                        <li data-menu=""><a class="dropdown-item" href="transport-operators" data-toggle="dropdown"
                                data-i18n="Google Maps"><i class="feather icon-truck"
                                    style="color:#6e706f"></i>Véhicules de Transport</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                        data-toggle="dropdown"><i class="feather icon-bar-chart-2"></i><span data-i18n="Others">
                            Statistiques</span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                data-i18n="Menu Levels"><i class="feather icon-menu"></i>rent agencies</a>

                        </li>
                        <li class="disabled" data-menu=""><a class="dropdown-item" href="" data-toggle="dropdown"
                                data-i18n="Disabled Menu"><i class="feather icon-eye-off"></i>Disabled Menu</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item"
                                href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation"
                                data-toggle="dropdown" data-i18n="Documentation"><i
                                    class="feather icon-folder"></i>Documentation</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="https://pixinvent.ticksy.com/"
                                data-toggle="dropdown" data-i18n="Raise Support"><i
                                    class="feather icon-life-buoy"></i>Raise
                                Support</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- END: Main Menu-->