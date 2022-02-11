<head> 
        <!-- title -->
        <title>Cinema</title>

        <!-- meta -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- css -->
        <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/vendor/Swiper/swiper-bundle.min.css">
        <link rel="stylesheet" href="assets/css/custom.css">
    </head>
    <body>
 
 <!-- scroll progress bar -->
 <div id="progress">
            <span id="progress-value"></span>
        </div>
        <!-- !scroll progress bar -->

<!-- navigation -->
<nav class="navigation">

    <!-- toggle button -->
    <input type="checkbox" class="menu-btn" id="menu-btn">
    <label for="menu-btn" class="menu-icon"><span class="nav-icon"></span></label>
    <!-- !toggle button -->

    <!-- nav-brand -->
    <a href="<?php echo BASE_URL . '/index.php'; ?>" class="logo"> Cin<span>ema</span></a>
    <!-- !nav brand -->

    <!-- menu -->
    <ul class="menu">
        <li><a href="#">Now Showing</a></li>
        <li><a href="#">Coming soon</a></li>
        <li><a href="#">About</a></li>
    </ul>
    <!-- !menu -->

    <?php if (isset($_SESSION['id'])): ?>

        <div class="head-profile">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <ul class="list-unstyled">
                        <li class="dropdown ml-2">
                
                            <a class="rounded-circle " href="#" role="button" id="dropdownUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                    <img alt="avatar" src="assets/img/avatar/user.jpg" class="rounded-circle">
                                </div>
                            </a> 

                            <div class="dropdown-menu mt-3" aria-labelledby="dropdownUser">
                                <div class="dropdown-item">
                                    <div class="d-flex py-2 justify-content-between">
                                        <div class="ml-3 lh-1">
                                            <h5 class="mb-0"><?php echo $_SESSION['username']; ?></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="dropdown-divider"></div>

                                <div class="">
                                    <ul class="list-unstyled">

                                        <?php if($_SESSION['role']): ?>
                                            <li><a class="dropdown-item" href="<?php echo BASE_URL . '/admin/schedule/index.php' ?>">Dashboard</a></li>
                                        <?php endif; ?>

                                        <li><a class="dropdown-item" href="#">Profile</a></li>
                                    </ul>
                                </div>

                                <div class="dropdown-divider"></div>

                                <ul class="list-unstyled">
                                    <li><a class="dropdown-item" href="<?php echo BASE_URL . '/logout.php' ?>">Sign Out</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div> 


    <?php else: ?>

        <div class="user-log">
            <ul><li> <a href="<?php echo BASE_URL . '/access.php' ?>" class="btn-log">Sign In</a></li></ul>
        </div>

    <?php endif; ?>


</nav>
<!-- !navigation -->