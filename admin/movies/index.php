<?php
    include('../../config.php');

    include(ROOT_PATH . "/app/contollers/movies.php"); 

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
                                    <h4 class="page-title">Theaters</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-4">
                                                <a href="<?php echo BASE_URL . '/admin/theater/create.php' ?>" class="btn btn-danger mb-2">
                                                    <i class="mdi mdi-plus-circle mr-2"></i> Add Movie
                                                </a>
                                            </div>
                                        </div>

                                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>S/NO</th>
                                                    <th>Name</th>
                                                    <th>Age</th>
                                                    <th>Link</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($datas as $key => $movie): ?>
                                                    <tr>
                                                        <td> <?php echo $key + 1; ?> </td>
                                                        <td> <a href="detail.php?id=<?php echo $movie['id'] ?>" class="text-body font-weight-semibold"> <?php echo $movie['movie_name']; ?></a> </td>
                                                        <td> <?php echo $movie['age']; ?> </td>
                                                        <td> <a href="<?php echo $movie['link']; ?>"> View Trailer</a> </td>
                                                        <td>
                                                            <a href="edit.php?id=<?php echo $movie['id']; ?>" class="action-icon"><i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="index.php?del_id=<?php echo $movie['id']; ?>" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
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