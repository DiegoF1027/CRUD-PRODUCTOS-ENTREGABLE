<div class="app-menu">

    <!-- Brand Logo -->
    <div class="logo-box">
        <!-- Brand Logo Light -->
        <a href="index.html" class="logo-light">
            <img src="./assets/images/icono.png"
                alt="logo" class="logo-lg logo">
            <img src="./assets/images/icono2.png"
                alt="small logo" class="logo-sm logoPequeño">
        </a>

        <!-- Brand Logo Dark -->
        <a href="index.html" class="logo-dark">
            <img src="./assets/images/icono.png logo"
                alt="dark logo" class="logo-lg">
            <img src="./assets/images/icono2.png"
                alt="small logo" class="logo-sm logoPequeño">
        </a>
    </div>

    <!-- menu-left -->
    <div class="scrollbar">

        <!-- User box -->
        <div class="user-box text-center">
            <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="dropdown-toggle h5 mb-1 d-block" data-bs-toggle="dropdown">Geneva
                    Kennedy</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-muted mb-0">Admin Head</p>
        </div>

        <!--- Desktop -->
        <ul class="menu">

            <li class="menu-title mt-3">Panel de Administracion</li>

            <li class="menu-item">
                <a href="?c=dashboard&m=dashboard" class="menu-link colorletra">
                    <span class="menu-icon"><i data-feather="monitor"></i></span>
                    <span class="menu-text dashboard"> Escritorio </span>
                </a>
            </li>
            <!--- End of Desktop -->

            <!--- Companies Menu -->
            <li class="menu-item companies">
                <a href="#menuCompañia" data-bs-toggle="collapse" class="menu-link  colorletra">
                    <span class="menu-icon"><i data-feather="briefcase"></i></span>
                    <span class="menu-text"> Compañias </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuCompañia">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="?c=companies&m=index" class="menu-link">
                                <span class="menu-text">Listar</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!--- End of Companies Menu -->

            <!--- Products Menu -->
            <li class="menu-item products">
                <a href="#menuProductos" data-bs-toggle="collapse" class="menu-link colorletra">
                    <span class="menu-icon"><i data-feather="package"></i></span>
                    <span class="menu-text"> Productos </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuProductos">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="?c=products&m=index" class="menu-link">
                                <span class="menu-text">Listado</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>