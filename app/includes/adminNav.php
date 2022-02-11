<!-- Topbar Start -->
<div class="navbar-custom">
    <div class="container-fluid">
        <ul class="list-unstyled topnav-menu float-right mb-0">

            <li class="dropdown d-none d-lg-inline-block">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
                    <i class="fe-maximize noti-icon"></i>
                </a>
            </li>

            <?php if(isset($_SESSION['id'])): ?>
                <li class="dropdown notification-list topbar-dropdown">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="../assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ml-1">
                            <?php echo $_SESSION['username']; ?> <i class="mdi mdi-chevron-down"></i> 
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                        <!-- item-->
                        <a href="<?php echo BASE_URL . '/index.php' ?>" class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>View site</span>
                        </a>
                        
                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="<?php echo BASE_URL . '/logout.php' ?>" class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>
            <?php endif; ?>
        </ul>

        <!-- LOGO -->
        <div class="logo-box">
            
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
            </li>

            <li>
                <!-- Mobile menu toggle (Horizontal Layout)-->
                <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </li>   
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
<!-- end Topbar -->

<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li><a href="<?php echo BASE_URL . "/admin/index.php" ?>"><i data-feather="home"></i><span> Home </span></a></li>

                <li>
                    <a href="#sidebarDashboards" data-toggle="collapse">
                        <i data-feather="film"></i>
                        <span> Movie </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarDashboards">
                        <ul class="nav-second-level">
                            <li><a href="<?php echo BASE_URL . "/admin/movies/index.php" ?>">List</a></li>
                            <li><a href="<?php echo BASE_URL . "/admin/movies/create.php" ?>">Add</a></li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarSchedular" data-toggle="collapse">
                        <i data-feather="clock"></i>
                        <span> Schedular </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarSchedular">
                    <ul class="nav-second-level">
                            <li><a href="<?php echo BASE_URL . "/admin/schedule/index.php" ?>">List</a></li>
                            <li><a href="<?php echo BASE_URL . "/admin/schedule/create.php" ?>">Add</a></li>
                        </ul>
                    </div>
                </li>

                <!-- <li><a href="#"><i data-feather="calendar"></i><span> Calendar </span></a></li> -->

                <!-- <li><a href="#"><i data-feather="calendar"></i><span> Tickets </span></a></li> -->

                <li><a href="<?php echo BASE_URL . "/admin/halls/index.php" ?>"><i data-feather="airplay"></i><span> Halls </span></a></li>

                <li><a href="<?php echo BASE_URL . "/admin/theater/index.php" ?>"><i data-feather="airplay"></i><span> Theaters </span></a></li>

                <li><a href="<?php echo BASE_URL . "/admin/region/index.php" ?>"><i data-feather="map"></i><span> Regions </span></a></li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->