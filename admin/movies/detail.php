<?php
    include('../../config.php');
    include(ROOT_PATH . '/app/contollers/movies.php');
    adminOnly();
?>

<!DOCTYPE html>
<html lang="en">
    <!-- head -->
    <?php include(ROOT_PATH . '/app/includes/adminHead.php'); ?>
    <!-- !head -->

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <?php include(ROOT_PATH . '/app/includes/adminNav.php'); ?>

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Movie</a></li>
                                            <li class="breadcrumb-item active">Movie Detail</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Movie Detail</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="container-poster">
                                                <img src="<?php echo BASE_URL . '/assets/img/poster' . $movie['image']; ?>" class="image-poster" alt="movie poster">
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-5">
                                            <div class="pl-xl-3 mt-3 mt-xl-0">
                                                <h4 class="mb-3"> <?php echo $movie['movie_name']; ?> </h4>
                                                
                                                <p class="text-muted mb-4"> <?php echo $movie['description']; ?> </p>

                                                <h5 class="text-danger text-uppercase mb-3"> <?php echo $movie['age']; ?> </h5>

                                                <p class="mb-4"> <b><?php echo $movie['duration'] . " Mins"; ?></b> </p>

                                                <h6 class="text-danger text-uppercase mb-3"> <a href="<?php echo $movie['link']; ?>">View trailer</a></h6>

                                                <a href="edit.php?id=<?php echo $movie['id']; ?>" class="btn btn-success"> EDIT </a>
                                            </div>
                                        </div> <!-- end col -->
                                    </div>
                                    <!-- end row -->


                                    <div class="table-responsive mt-4">
                                        <table class="table table-bordered table-centered mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Schedule</th>
                                                    <th>Quality</th>
                                                    <th>Hall</th>
                                                    <th>Price</th>
                                                    <th>Tickets</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>ASOS Ridley Outlet - NYC</td>
                                                    <td>$139.58</td>
                                                    <td>
                                                        <div class="row align-items-center no-gutters">
                                                            <div class="col-auto">
                                                              <span class="mr-2">27%</span>
                                                            </div>
                                                            <div class="col">
                                                                <div class="progress progress-sm">
                                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 27%" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$1,89,547</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> 
                                &copy;  <a href="">Cinema</a> 
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <?php include(ROOT_PATH . '/app/includes/adminFooter.php'); ?>
        
    </body>
</html>