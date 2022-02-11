<?php
    include('../../config.php');
    include(ROOT_PATH . "/app/contollers/theaters.php"); 

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
                                <div class="page-title-box"><h4 class="page-title">Update Theater</h4></div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-xl-12">

                                                <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>

                                                <form action="edit.php" method="post">
                                                    <input type="hidden" name="id" value="<?php echo $id; ?>">

                                                    <div class="form-group">
                                                        <label for="theaterName">Theater Name</label>
                                                        <input type="text" id="theater-name" name="th_name" value="<?php echo $name; ?>" class="form-control" placeholder="Enter theater name" require>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="regionName">Region Name</label>
                                                        <select name="region_id" class="selectpicker" data-live-search="true"  data-style="btn-light">
                                                            <option value=""></option>

                                                            <?php foreach($regions as $key => $region): ?>

                                                                <?php if(!empty($region_id) && $region_id == $region['id']): ?>
                                                                    <option selected value="<?php echo $region['id']; ?>"> <?php echo $region['region_name']; ?> </option>
                                                                <?php else: ?>
                                                                    <option value="<?php echo $region['id']; ?>"> <?php echo $region['region_name']; ?> </option>
                                                                <?php endif; ?>

                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <button type="submit" name="updatetheater" class="btn btn-success waves-effect waves-light m-1">
                                                            <i class="fe-check-circle mr-1"></i> Update
                                                        </button>
                                                    </div>
                                                </form>

                                            </div> <!-- end col-->

                                        </div>
                                        <!-- end row -->

                                    </div> <!-- end card-body -->
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