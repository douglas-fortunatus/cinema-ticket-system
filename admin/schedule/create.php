<?php include('../../config.php'); ?>

<?php include(ROOT_PATH . '/app/contollers/schedule.php'); 
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Cinema</a></li>
                                            <li class="breadcrumb-item active">Schedule</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Add Schedule</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <form action="create.php" method="post">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card-box">

                                        <div class="form-group mb-3">
                                            <label for="movie-name">Movie Name </label>

                                            <select class="selectpicker" name="movie_id" data-live-search="true"  data-style="btn-light">
                                                <?php foreach ($movies as $key => $movie): ?>
                                                    <option value="<?php echo $movie['id']; ?>"> <?php echo $movie['movie_name']; ?> </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="screens">Screens</label>

                                            <select class="selectpicker" name="screen_id" data-live-search="true"  id="screen">
                                                <option>Select</option>
                                                
                                                <?php foreach ($screens as $key => $screen): ?>
                                                    <option value="<?php echo $screen['id']; ?>"> <?php echo $screen['screen_name'] . " ( " .$screen['th_name']. " )"; ?> </option>
                                                <?php endforeach; ?>
                                            </select>

                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group mb-3">
                                                    <label for="movie-date">Movie date </label>
                                                    <input type="text" name="date" id="humanfd-datepicker" class="form-control" placeholder="October 9, 2018">
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group mb-3">
                                                    <label for="movie-time">Movie time </label>
                                                    <input type="time" name="start_time" class="form-control" min="12:00" max="22:00" id="">
                                                    <!-- <input type="text" name="start_time" id="minmax-timepicker" class="form-control" placeholder="12:00"> -->
                                                    <!-- <input type="text" name="start_time" id="24hours-timepicker" class="form-control" placeholder="16:21" min="12:00" max="22:00"> -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="mb-2">Quality </label>
                                            <br/>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="inlineRadio2" value="2D" name="quality">
                                                <label for="inlineRadio2"> 2D </label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="inlineRadio2" value="3D" name="quality">
                                                <label for="inlineRadio2"> 3D </label>
                                            </div>
                                        </div>

                                        <div class="form-group mb-0">
                                            <button type="submit" name="addSl" class="btn w-sm btn-success waves-effect waves-light">Save</button>
                                        </div>
                                    </div> <!-- end card-box -->
                                </div> <!-- end col -->

                                <!-- calender -->
                                <div class="col-lg-8">
                                    <div class="main">
                                        <div style="display:flex">
                                            <div style="">
                                                <div id="nav"></div>
                                            </div>

                                            <div style="flex-grow: 1; margin-left: 10px;">
                                                <div class="toolbar buttons">
                                                    <span class="toolbar-item"><a id="buttonDay" href="#">Day</a></span>
                                                    <span class="toolbar-item"><a id="buttonWeek" href="#">Week</a></span>
                                                    <span class="toolbar-item"><a id="buttonMonth" href="#">Month</a></span>
                                                </div>

                                                <div id="dpDay"></div>
                                                <div id="dpWeek"></div>
                                                <div id="dpMonth"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </form>
                        

                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                2015 - <script>document.write(new Date().getFullYear())</script> &copy; UBold theme by <a href="">Coderthemes</a> 
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
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