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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Movie</a></li>
                                            <li class="breadcrumb-item active">Schedule list</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Movie Schedule</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="header-title">Screen schedule</h4>

                                    <table data-toggle="table"
                                            data-search="true"
                                            data-show-refresh="true"
                                            data-sort-name="id"
                                            data-page-list="[5, 10, 20]"
                                            data-page-size="5"
                                            data-pagination="true" 
                                            data-show-pagination-switch="true" 
                                            class="table-borderless">
                                        <thead class="thead-light">
                                            <tr>
                                                <th data-field="id" data-sortable="false">S / NO</th>
                                                <th data-field="name" data-sortable="true">Movie Name</th>
                                                <th data-field="screen" data-sortable="true">Screen</th>
                                                <th data-field="quality" data-sortable="true">Quality</th>
                                                <th data-field="date" data-sortable="true" data-formatter="dateFormatter">Date</th>
                                                <th data-field="time" data-sortable="true">Showing Time</th>
                                                <th data-field="amount" data-align="center" data-sortable="true" data-sorter="priceSorter">Price</th>
                                                <th data-field="status" data-align="center" data-sortable="true" data-formatter="statusFormatter">Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach ($datas as $key => $schedule): ?>
                                                <tr>
                                                    <td> <?php echo $key + 1; ?> </td>
                                                    <td> <?php echo $schedule['movie_name']; ?></td>
                                                    <td> <?php echo $schedule['screen_name']; ?> </td>
                                                    <td> <?php echo $schedule['quality']; ?> </td>
                                                    <td> <?php echo $schedule['date']; ?> </td>
                                                    <td> <?php echo $schedule['start_time'] . " hrs"; ?></td>
                                                    <td> <?php echo $schedule['price'] . " Tshs"; ?> </td>
                                                    <td>showing</td>
                                                    <td>
                                                        <a href="edit.php?id=<?php echo $region['id']; ?>" class="action-icon"><i class="mdi mdi-square-edit-outline"></i></a>
                                                        <a href="index.php?del_id=<?php echo $region['id']; ?>" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div> <!-- end card-box-->
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