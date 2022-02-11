<?php include('../../config.php'); ?>
<?php include(ROOT_PATH . '/app/contollers/movies.php'); 
adminOnly();
?>

<!DOCTYPE html>
<html lang="en">
    
    <?php include(ROOT_PATH . '/app/includes/adminHead.php'); ?>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <?php include(ROOT_PATH . '/app/includes/adminNav.php'); ?>

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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Cinemas</a></li>
                                            <li class="breadcrumb-item active">Create movie</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Add / Edit Movie</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>

                        <form action="create.php" method="post" class="parsley-examples" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="card-box">

                                        <div class="form-group mb-3">
                                            <label for="movie-name">Movie Name</label>
                                            <input type="text" id="movie-name" name="movie_name" class="form-control" value="<?php echo $name; ?>" placeholder="Enter movie name ..">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="moviedescription">Movie description</label>
                                            <textarea class="form-control" id="movie-description" name="description" rows="3" placeholder="Please enter description ... " >
                                                <?php echo $description; ?>
                                            </textarea>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="Age">Age Rating</label>

                                            <select class="selectpicker" name="age" data-live-search="true"  id="screen">
                                                <option>Select</option>
                                                <option value="G">G - General Audience</option>
                                                <option value="PG">PG - Parental Guidance suggested</option>
                                                <option value="PG-13"> PG-13 - Parental Strongly Cautioned</option>
                                                <option value="R">R - Restricted</option>
                                                <option value="NC-17">NC-17 - Adults Only</option>
                                            </select>

                                        </div>

                                    </div> <!-- end card-box -->
                                </div> <!-- end col -->

                                <div class="col-4">
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="form-group mb-3">
                                                <label for="duration">Movie duration </label>
                                                <input type="text" name="duration" class="form-control" data-toggle="input-mask" data-mask-format="00:00:00">
                                                <span class="font-13 text-muted">e.g "HH:MM:SS"</span>
                                            </div>

                                            <!-- url textbox -->
                                            <div class="form-group mb-3">
                                                <label for="product-reference">Youtube link trailer </label>
                                                <input parsley-type="url" type="url" name="link" value="<?php echo $youtubeLink; ?>" class="form-control" required placeholder="URL"/>
                                            </div>
                
                                            <div class="row">
                                                <div class="col-12">
                                                    <h4 class="header-title">Poster Image Upload</h4>

                                                    <div class="mt-3">
                                                        <input type="file" name="image" class="" />
                                                    </div>
                                                </div>
                                            </div>


                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div><!-- end col -->

                                <div class="col-6">
                                    <div class="text-center mb-3">
                                        <button type="submit" name="addmovie" class="btn w-sm btn-success waves-effect waves-light">Save</button>
                                        <button type="reset" class="btn w-sm btn-danger waves-effect waves-light">Reset</button>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->
                            </div>

                        </form>

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